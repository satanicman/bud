<?php get_header(); ?>
    <section class="page-<?php echo get_the_ID(); ?>">
        <div class="container">
            <div class="row">
                <h1 class="main_title"><?php the_title(); ?></h1>
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
    </section>
<?php get_footer(); ?>