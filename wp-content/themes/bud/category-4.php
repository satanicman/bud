<?php get_header(); ?>
<section class="news">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 left_column">
                <?php if( have_posts() ) : ?>
                <ul class="news_list">
                    <?php while( have_posts() ){ the_post(); ?>
                        <li class="news_list_item">
                            <div class="news_list_item_img">
                                <?php if(get_the_post_thumbnail_url()) : ?>
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="portfolio_item_img">
                                <?php endif; ?>
                            </div>
                            <div class="news_list_item_information">
                                <div class="news_list_item_header">
                                    <h3 class="news_name"><?php the_title(); ?></h3>
                                    <div class="news_list_item_date"><i class="icon date-icon"></i><?php the_time('j F, Y') ?></div>
                                </div>
                                <div class="news_list_item_text"><?php the_excerpt(); ?><a href="<?php the_permalink(); ?>">...Подробнее</a></div>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
                <?php else : ?>
                    <p>Пока нет новостей</p>
                <?php endif; ?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 right_column">
                <div class="search_block_right">
                    <h6 class="search_title">Поиск по сайту</h6>
                    <?php get_search_form(); ?>
                    <div class="search_text">Найти нужный материал или статью</div>
                </div>
                <div class="latest_news">
                    <div class="latest_news_title">Последние новости</div>
                    <ul class="latest_news_list">
                        <?php $count = 3; while( have_posts() && $count--){ the_post(); ?>
                            <li class="latest_news_item">
                                <div class="latest_news_img">
                                    <?php if(get_the_post_thumbnail_url()) : ?>
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="portfolio_item_img">
                                    <?php endif; ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="latest_news_link"><?php the_title(); ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <a href="#" class="btn btn-default btn-large">PDF</a>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
