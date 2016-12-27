<?php get_header(); ?>
<section class="news">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 left_column">
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
        </div>
    </div>
</section>
<?php get_footer(); ?>
