<?php get_header(); ?>
<section class="information">
    <div class="container">
        <p class="row">
            <h1 class="information_title"><?php the_title(); ?></h1>
            <?php if(get_the_post_thumbnail_url()) : ?>
                <div class="information_img"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></div>
            <?php endif; ?>
            <?php
            while ( have_posts() ) : the_post(); ?>
                <div class="information_text">
                    <?php the_content(); ?>
                </div><!-- .information_text -->

                <?php
            endwhile;
            wp_reset_query();
            ?>
            <a href="<?php echo get_category_link('4'); ?>" class="btn btn-default">Смотреть другие новости</a>
        </div>
    </div>
</section>
<?php get_footer(); ?>