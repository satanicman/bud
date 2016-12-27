<?php get_header(); ?>
<?php
/*
Template Name: contacts
*/
?>
<section class="contacts">
    <div class="container">
        <div class="row">
            <div class="contacts_left_column col-lg-6 col md-6 col-sm-12 col-xs-12">
                <h2 class="contacts_title">Написать нам</h2>
                <form action="" class="contact_form">
                    <div class="form-group required">
                        <label for="name" class="label">Ваше имя</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <div class="form-group required">
                        <label for="email" class="label">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone" class="label">Телефон</label>
                        <input type="tel" name="phone" id="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="text" class="label">Сообщение</label>
                        <textarea name="text" id="text" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <button class="btn btn-send">Отправить</button>
                </form>
            </div>
            <div class="contacts_right_column col-lg-6 col md-6 col-sm-12 col-xs-12">
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
</section>
<?php get_footer(); ?>