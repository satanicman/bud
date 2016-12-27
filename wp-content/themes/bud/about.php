<?php get_header(); ?>
<?php
/*
Template Name: about
*/
?>
    <section class="about">
        <img src="<?php echo get_template_directory_uri(); ?>/img/about_bg.jpg" alt="about_bg" class="about_bg">
        <div class="container about_container">
            <div class="row">
                <h3 class="about_main_title"><?php the_title(); ?></h3>
                <div class="about_content clearfix">
                    <div class="about_left_column column col-lg-3 col-md-3 col-sm-12">
                        <div class="about_left_column_content">
                            <h4 class="category_menu_title">Категории</h4>
                            <?php wp_nav_menu( array( 'theme_location' => 'about_menu', 'menu_class' => 'category_menu_left', 'container' =>false) ); ?>
<!--                            <ul class="category_menu_left">-->
<!--                                <li class="category_menu_left_item"><a href="/about.html" class="category_menu_left_link active">О нас</a></li>-->
<!--                                <li class="category_menu_left_item"><a href="#" class="category_menu_left_link">Технические <br/>объекты</a></li>-->
<!--                                <li class="category_menu_left_item"><a href="#" class="category_menu_left_link">Услуги</a></li>-->
<!--                                <li class="category_menu_left_item"><a href="#" class="category_menu_left_link">Технологии</a></li>-->
<!--                                <li class="category_menu_left_item"><a href="/portfolio.html" class="category_menu_left_link">Портфолио</a></li>-->
<!--                                <li class="category_menu_left_item"><a href="/news.html" class="category_menu_left_link">Пресс-центр</a></li>-->
<!--                                <li class="category_menu_left_item"><a href="/contacts.html" class="category_menu_left_link">Контакты</a></li>-->
<!--                            </ul>-->
                        </div>
                    </div>
                    <div class="about_center_column column col-lg-9 col-md-9 col-sm-12">
                        <?php
                        while ( have_posts() ) : the_post(); ?>
                            <div class="entry-content-page">
                                <?php the_content(); ?>
                            </div><!-- .entry-content-page -->

                            <?php
                        endwhile;
                        wp_reset_query();
                        ?>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>