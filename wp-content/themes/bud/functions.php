<?php
function enqueue_styles()
{
    wp_enqueue_style('whitesquare-style', get_stylesheet_uri());
    wp_enqueue_style('cbk', 'https://cdn.envybox.io/widget/cbk.css');
    if (is_single()) {
        wp_enqueue_style('productioncss', get_template_directory_uri() . '/css/information.css');
    } elseif (is_page()) {
        switch (get_the_ID()) {
            case 17 :
                wp_enqueue_style('productioncss', get_template_directory_uri() . '/css/contacts.css');
                break;
            case 101 :
                wp_enqueue_style('productioncss', get_template_directory_uri() . '/css/about.css');
                break;
            case 141 :
                wp_enqueue_style('productioncss', get_template_directory_uri() . '/css/form.css');
                break;
            default:
                wp_enqueue_style('productioncss', get_template_directory_uri() . '/css/index.css');
                break;
        }
    } elseif (is_category()) {
        if(is_category(3))
            wp_enqueue_style('productioncss', get_template_directory_uri() . '/css/portfolio.css');
        elseif(is_category(4))
            wp_enqueue_style('productioncss', get_template_directory_uri() . '/css/news.css');
        else
            wp_enqueue_style('productioncss', get_template_directory_uri() . '/css/news.css');

    } elseif(is_search()) {
        wp_enqueue_style('productioncss', get_template_directory_uri() . '/css/news.css');
    } else {
        wp_enqueue_style('productioncss', get_template_directory_uri() . '/css/index.css');
    }
}

if (function_exists('enqueue_styles')) {
    add_action('wp_enqueue_scripts', 'enqueue_styles');
}

function enqueue_scripts()
{
    wp_enqueue_script('jquery', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.js', array(), '', true);
    wp_enqueue_script('productionjs', get_template_directory_uri() . '/js/global.js', array(), '', true);
    wp_enqueue_script('callme', get_template_directory_uri() . '/callme/js/callme.min.js', array(), '', true);
    wp_enqueue_script('cbk', 'https://cdn.envybox.io/widget/cbk.js?wcb_code=798d4afea6f654eeeda090042b924f72', array(), '', true);
    if (is_page()) {
        switch (get_the_ID()) {
            case 141 :
                wp_enqueue_script('formJs', get_template_directory_uri() . '/js/form.js', array(), '', true);
                break;
        }
    }
}

if (function_exists('enqueue_styles')) {
    add_action('wp_enqueue_scripts', 'enqueue_scripts');
}

// Регистрация меню
function register_my_menus()
{
    register_nav_menus(
        array(
            'main_menu' => 'main_menu',
            'about_menu' => 'about_menu',
            'footer_menu' => 'footer_menu'
        )
    );
}

// Виджеты
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'footer_subscribe',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
}
// Миниатюры
add_theme_support('post-thumbnails'); // для всех типов постов

// подключаемся к хукам
if (function_exists('load_style_script')) {
    add_action('wp_enqueue_scripts', 'load_style_script');
}
if (function_exists('register_nav_menus')) {
    add_action('init', 'register_my_menus');
}

add_action('wp_ajax_my_ajax_action', 'send_form_mail');

function send_form_mail() {
    if(!isset($_POST['data'])) {
        die(json_encode(array('hasError' => 1, 'message' => 'Что-то пошло не так:(')));
    }

    $message = '<h1>Запрос быстрого расчета:</h1>';
    $message .= '<table border="1" cellpadding="5" cellspacing="0"><tbody>';
    foreach ($_POST['data'] as $field=> $value) {
        $message .= '<tr>';
        if(is_array($value)) {
            $message .= '<td><strong>';
            $message .= form_translate($_POST['data']['type']);
            $message .= '</strong></td><td><table cellpadding="5"><tbody>';
            foreach ($value as $type => $v) {
                $message .= '<tr><td>'.form_translate($type).'</td><td>'.$v.'</td></tr>';
            }
            $message .= '</tbody></table></td>';
        } elseif($field != 'type') {
            $message .= '<td><strong>'.form_translate($field).'</strong></td><td>'.$value.'</td>';
        }
        $message .= '</tr>';
    }
    $message .= '</tbody></table>';

    $to = get_option('admin_email');
    $subject = 'Запрос быстрого расчета';
    $headers = "Content-Type: text/html; charset=UTF-8\r\n";

    mail($to, $subject, $message, $headers);
    die(json_encode(array('hasError' => 0, 'message' => 'Запрос успешно отправлен. В ближайшее время с вами свяжется нашь менеджер. Благодарим за заявку.')));
}

function form_translate($name) {
    $translate = array(
        'length' => 'Длина(м)',
        'width' => 'Ширина(м)',
        'height' => 'Высота(м)',
        'tol' => 'Стеновые панели толщина, мм',
        'tolPan' => 'Кровельные панели толщина, мм',
        'name' => 'Имя',
        'phone' => 'Телефон',
        'email' => 'E-mail',
        'city' => 'Город строительства',
        'aim' => 'Назначение',
        'sqire' => 'Площадь(м<sup>2</sup>)',
        'dvu' => 'Двускатная',
        'odn' => 'Односкатная',
        'pl' => 'Плоская',
        'dach' => 'Крыша',
        'wall' => 'Стены',
        'brett' => 'Планки обрамления',
    );

    if(isset($translate[$name]))
        return $translate[$name];

    return $name;
}

/*
 * "Хлебные крошки" для WordPress
 * автор: Dimox
 * версия: 2016.11.17
 * лицензия: MIT
*/
function breadcrumbs()
{

    /* === ОПЦИИ === */
    $text['home'] = 'Главная'; // текст ссылки "Главная"
    $text['category'] = '%s'; // текст для страницы рубрики
    $text['search'] = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
    $text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
    $text['author'] = 'Статьи автора %s'; // текст для страницы автора
    $text['404'] = 'Ошибка 404'; // текст для страницы 404
    $text['page'] = 'Страница %s'; // текст 'Страница N'
    $text['cpage'] = 'Страница комментариев %s'; // текст 'Страница комментариев N'

    $wrap_before = ''; // открывающий тег обертки
    $wrap_after = ''; // закрывающий тег обертки
    $sep = '/'; // разделитель между "крошками"
    $sep_before = '<span class="sep">'; // тег перед разделителем
    $sep_after = '</span>'; // тег после разделителя
    $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
    $show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
    $show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
    $before = '<span class="current">'; // тег перед текущей "крошкой"
    $after = '</span>'; // тег после текущей "крошки"
    /* === КОНЕЦ ОПЦИЙ === */

    global $post;
    $home_url = home_url('/');
    $link_before = '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
    $link_after = '</span>';
    $link_attr = ' itemprop="item"';
    $link_in_before = '<span itemprop="name">';
    $link_in_after = '</span>';
    $link = $link_before . '<a href="%1$s"' . $link_attr . '>' . $link_in_before . '%2$s' . $link_in_after . '</a>' . $link_after;
    $frontpage_id = get_option('page_on_front');
    $parent_id = $post->post_parent;
    $sep = ' ' . $sep_before . $sep . $sep_after . ' ';
    $home_link = $link_before . '<a href="' . $home_url . '"' . $link_attr . ' class="home">' . $link_in_before . $text['home'] . $link_in_after . '</a>' . $link_after;

    if (is_home() || is_front_page()) {

        if ($show_on_home) echo $wrap_before . $home_link . $wrap_after;

    } else {

        echo $wrap_before;
        if ($show_home_link) echo $home_link;

        if (is_category()) {
            $cat = get_category(get_query_var('cat'), false);
            if ($cat->parent != 0) {
                $cats = get_category_parents($cat->parent, TRUE, $sep);
                $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr . '>' . $link_in_before . '$2' . $link_in_after . '</a>' . $link_after, $cats);
                if ($show_home_link) echo $sep;
                echo $cats;
            }
            if (get_query_var('paged')) {
                $cat = $cat->cat_ID;
                echo $sep . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_current) echo $sep . $before . sprintf($text['category'], single_cat_title('', false)) . $after;
            }

        } elseif (is_search()) {
            if (have_posts()) {
                if ($show_home_link && $show_current) echo $sep;
                if ($show_current) echo $before . sprintf($text['search'], get_search_query()) . $after;
            } else {
                if ($show_home_link) echo $sep;
                echo $before . sprintf($text['search'], get_search_query()) . $after;
            }

        } elseif (is_day()) {
            if ($show_home_link) echo $sep;
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $sep;
            echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F'));
            if ($show_current) echo $sep . $before . get_the_time('d') . $after;

        } elseif (is_month()) {
            if ($show_home_link) echo $sep;
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y'));
            if ($show_current) echo $sep . $before . get_the_time('F') . $after;

        } elseif (is_year()) {
            if ($show_home_link && $show_current) echo $sep;
            if ($show_current) echo $before . get_the_time('Y') . $after;

        } elseif (is_single() && !is_attachment()) {
            if ($show_home_link) echo $sep;
            if (get_post_type() != 'post') {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                printf($link, $home_url . '/' . $slug['slug'] . '/', $post_type->labels->singular_name);
                if ($show_current) echo $sep . $before . get_the_title() . $after;
            } else {
                $cat = get_the_category();
                $cat = $cat[0];
                $cats = get_category_parents($cat, TRUE, $sep);
                if (!$show_current || get_query_var('cpage')) $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr . '>' . $link_in_before . '$2' . $link_in_after . '</a>' . $link_after, $cats);
                echo $cats;
                if (get_query_var('cpage')) {
                    echo $sep . sprintf($link, get_permalink(), get_the_title()) . $sep . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
                } else {
                    if ($show_current) echo $before . get_the_title() . $after;
                }
            }

            // custom post type
        } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
            $post_type = get_post_type_object(get_post_type());
            if (get_query_var('paged')) {
                echo $sep . sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_current) echo $sep . $before . $post_type->label . $after;
            }

        } elseif (is_attachment()) {
            if ($show_home_link) echo $sep;
            $parent = get_post($parent_id);
            $cat = get_the_category($parent->ID);
            $cat = $cat[0];
            if ($cat) {
                $cats = get_category_parents($cat, TRUE, $sep);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr . '>' . $link_in_before . '$2' . $link_in_after . '</a>' . $link_after, $cats);
                echo $cats;
            }
            printf($link, get_permalink($parent), $parent->post_title);
            if ($show_current) echo $sep . $before . get_the_title() . $after;

        } elseif (is_page() && !$parent_id) {
            if ($show_current) echo $sep . $before . get_the_title() . $after;

        } elseif (is_page() && $parent_id) {
            if ($show_home_link) echo $sep;
            if ($parent_id != $frontpage_id) {
                $breadcrumbs = array();
                while ($parent_id) {
                    $page = get_page($parent_id);
                    if ($parent_id != $frontpage_id) {
                        $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
                    }
                    $parent_id = $page->post_parent;
                }
                $breadcrumbs = array_reverse($breadcrumbs);
                for ($i = 0; $i < count($breadcrumbs); $i++) {
                    echo $breadcrumbs[$i];
                    if ($i != count($breadcrumbs) - 1) echo $sep;
                }
            }
            if ($show_current) echo $sep . $before . get_the_title() . $after;

        } elseif (is_tag()) {
            if (get_query_var('paged')) {
                $tag_id = get_queried_object_id();
                $tag = get_tag($tag_id);
                echo $sep . sprintf($link, get_tag_link($tag_id), $tag->name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_current) echo $sep . $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
            }

        } elseif (is_author()) {
            global $author;
            $author = get_userdata($author);
            if (get_query_var('paged')) {
                if ($show_home_link) echo $sep;
                echo sprintf($link, get_author_posts_url($author->ID), $author->display_name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_home_link && $show_current) echo $sep;
                if ($show_current) echo $before . sprintf($text['author'], $author->display_name) . $after;
            }

        } elseif (is_404()) {
            if ($show_home_link && $show_current) echo $sep;
            if ($show_current) echo $before . $text['404'] . $after;

        } elseif (has_post_format() && !is_singular()) {
            if ($show_home_link) echo $sep;
            echo get_post_format_string(get_post_format());
        }

        echo $wrap_after;

    }
} // end of dimox_breadcrumbs()
