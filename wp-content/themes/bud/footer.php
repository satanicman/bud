<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 footer_social columns">
                <h2 class="footer_title">МЫ В СОЦИАЛЬНЫХ СЕТЯХ</h2>
                <ul class="social_list">
                    <li><a href="#"><i class="icon fb-icon"></i></a></li>
                    <li><a href="#"><i class="icon tw-icon"></i></a></li>
                    <li><a href="#"><i class="icon in-icon"></i></a></li>
                    <li><a href="#"><i class="icon r-icon"></i></a></li>
                    <li><a href="#"><i class="icon v-icon"></i></a></li>
                </ul>
                <p class="copyright">
                    &copy; Компания «Будсистема» 2016 <br/>разработка: <a href="#">Pinguin-studio</a>
                </p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 footer_menu columns">
                <h2 class="footer_title">БЫСТРАЯ НАВИГАЦИЯ</h2>
                <?php wp_nav_menu( array( 'theme_location' => 'footer_menu', 'menu_class' => 'footer_menu_list clearfix', 'container' =>false) ); ?>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 footer_contacts columns">
                <h2 class="footer_title">КОНТАКТЫ</h2>
                <p class="footer_contacts_phones">(050) 340-12- 72  (050) 340-12- 72 <br/>(050) 340-12- 72</p>
                <p class="footer_contacts_email">E-mail: <br/>Zakaz@vedmedyk.com.ua</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 footer_subscribe columns">
<!--                <h2 class="footer_title">ПОДПИСАТЬСЯ НА НОВОСТИ</h2>-->
<!--                <p class="footer_subscribe_text">Подпишитесь на новости, чтобы всегда быть в курсе о последних поступлениях новинок и акциях</p>-->
<!--                <form action="/" method="POST">-->
<!--                    <input type="email" name="email" id="email" class="footer_subscribe_input" placeholder="Электронная почта">-->
<!--                    <button class="btn btn-small">OK</button>-->
<!--                </form>-->
                <?php
                if ( function_exists('dynamic_sidebar') )
                    dynamic_sidebar('footer_subscribe');
                ?>
            </div>
        </div>
    </div>
</footer>
<a href="#" id="scroller"><i class="icon up-icon"></i></a>
<?php wp_footer(); ?>
</body>
</html>