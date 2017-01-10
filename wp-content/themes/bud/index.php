<?php get_header(); ?>
<div class="top_slider">
    <div id="slick-wrap">
        <?php echo do_shortcode('[slick-slider category="6" dots="true" arrows="false" autoplay="false" sliderheight="auto"]'); ?>
    </div>
</div>
<section class="under_slider clearfix">
    <?php
    global $post;
    $postslist = get_posts( array( 'posts_per_page' => 4, 'orderby' => 'date') );
    foreach ( $postslist as $post ) : ?>
        <article class="col-lg-3 col-md-3 col-sm-12 col-xs-12 under_slider_article">
            <div class="under_slider_article_content">
                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <?php if(get_the_post_thumbnail_url()) : ?>
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="under_slider_article_img">
                    <?php endif; ?>
                    <div class="under_slider_article_text">
                        <h2 class="under_slider_article_title"><?php the_title(); ?></h2>
                    </div>
                </a>
            </div>
        </article>
    <?php endforeach; ?>
</section>
<section class="portfolio">
    <div class="container">
        <div class="row">
            <h1 class="main_title">Портфолио</h1>
            <ul class="portfolio_list clearfix">
                <?php $recent = new WP_Query("cat=3&showposts=6"); while($recent->have_posts()) : $recent->the_post();?>
                    <li class="col-lg-4 col-md-4 col-sm-12 col-xs-12 portfolio_item">
                        <div class="portfolio_item_content">
                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                                <?php if(get_the_post_thumbnail_url()) : ?>
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="portfolio_item_img">
                                <?php endif; ?>
                                <h1 class="portfolio_item_name"><?php the_title(); ?></h1>
                            </a>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
            <a href="<?php echo get_category_link('3'); ?>" class="btn btn-default showMore">Смотреть все</a>
        </div>
    </div>
</section>
<section class="news">
    <div class="container">
        <div class="row">
            <ul class="news_list row">
                <li class="col-lg-4 col-md-4 col-sm-12 col-xs-12 news_item news_link white">
                    <div class="news_item_content">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/news/news_link.jpg" alt="link">
                        <div class="news_item_text">
                            <h2 class="news_item_title">Новости</h2>
                            <a href="<?php echo get_category_link('4'); ?>" class="news_item_link">Смотреть все <i class="icon right-arrow-white-icon"></i></a>
                        </div>
                    </div>
                </li>
                <?php $i = 0; $recent = new WP_Query("cat=4&showposts=4"); while($recent->have_posts()) : $recent->the_post();?>
                    <li class="<?php if(!$i) : ?>col-lg-8 col-md-8 sol-sm-12 large<?php else : ?>col-lg-4 col-md-4 col-sm-12 col-xs-12<?php endif; ?> news_item">
                        <div class="news_item_content">
                            <?php if(get_the_post_thumbnail_url()) : ?>
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                            <div class="news_item_text">
                                <h2 class="news_item_title"><?php the_title(); ?></h2>
                                <?php if(!$i) : ?>
                                    <p><?php the_excerpt(); ?></p>
                                <?php endif; ?>
                                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="news_item_link">Подробнее<i class="icon right-arrow-orange-icon"></i></a>
                            </div>
                        </div>
                    </li>
                <?php $i++; endwhile; ?>
            </ul>
        </div>
    </div>
</section>
<section class="request">
    <div class="container">
        <div class="row">
            <a href="<?php echo get_page_link(141); ?>" class="btn btn-default request_btn">Запросить быстрый расчет</a>
            <p class="request_text">ТЕХНИЧЕСКОЕ ЗАДАНИЕ НА РАСЧЕТ СТОИМОСТИ ПОЛНОКОМПЛЕКТНОГО ЗДАНИЯ</p>
            <div class="request_label">
                <i class="icon list-icon"></i>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
