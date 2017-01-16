<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0">
    <title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="header">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 header_logo">
                    <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="" id="header_logo"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 col-lg-offset-2 backColl">
                    <i class="mobile-icon icon"></i><a href="#" class="btn btn-default callme_viewform">Обратный звонок</a>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 header_phones">
                    <table class="header_phones_table">
                        <tr>
                            <td class="bold">Киев</td>
                            <td>
                                <i class="icon kievstar-icon"></i>067-793-08-08
                            </td>
                            <td>
                                <i class="icon phone-icon"></i>044-232-36-46
                            </td>
                        </tr>
                        <tr>
                            <td class="bold">Днепр</td>
                            <td>
                                <i class="icon kievstar-icon"></i>067-739-66-05
                            </td>
                            <td>
                                <i class="icon phone-icon"></i>056-786-11-77
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </header>
    <div class="horisontal_menu">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="<?php echo get_site_url(); ?>" class="navbar-brand"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="" id="header_logo"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'menu_class' => 'menu nav navbar-nav', 'container' =>false) ); ?>
                </div>
            </div>
        </div>
    </div>
    <?php if(!is_front_page()) : ?>
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <?php breadcrumbs(); ?>
            </div>
        </div>
    </div>
    <?php endif; ?>