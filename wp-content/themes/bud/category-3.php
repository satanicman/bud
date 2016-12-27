<?php get_header(); ?>
<section class="portfolio">
    <div class="container">
        <div class="row">
            <?php if( have_posts() ) : ?>
            <nav class="menu_block">
                <ul class="menu_block_list">
                    <li class="menu_block_item"><a href="#" class="menu_block_link">Жилые</a></li>
                    <li class="menu_block_item"><a href="#" class="menu_block_link">Общественные</a></li>
                    <li class="menu_block_item"><a href="#" class="menu_block_link">Промышленные</a></li>
                    <li class="menu_block_item"><a href="#" class="menu_block_link">Сельскохозяйственные</a></li>
                </ul>
            </nav>
            <ul class="portfolio_list clearfix">
                <?php while( have_posts() ){ the_post(); ?>
                    <li class="col-lg-4 col-md-4 col-sm-12 col-xs-12 portfolio_item">
                        <div class="portfolio_item_content">
                            <a href="<?php the_permalink(); ?>">
                                <?php if(get_the_post_thumbnail_url()) : ?>
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="portfolio_item_img">
                                <?php endif; ?>
                                <h1 class="portfolio_item_name"><?php the_title(); ?></h1>
                            </a>
                        </div>
                    </li>

                <?php } ?>
            </ul>
            <?php else : ?>
                <p>Пока нет работ</p>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
