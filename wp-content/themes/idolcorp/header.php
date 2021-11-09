<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="page">
 *
 *
 * @package Idolcorp
 * @since Idolcorp 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="idolcorp_menu"><span></span><span></span><span></span></div>
    <div id="fpage">
        <div id="page" class="hfeed site">
            <header id="masthead" class="site-header">
                <div class="hgroup-wrap">
                    <section class="site-branding">
                        <div class="container">
                            <div class="row">
                                <div class="col-8 p-0"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img src="<?php insert_img('logo_Alise.png');?>" class="img-fluid" alt=""></a></div>
                                <div class="col-4 ec-logo"><img src="<?php insert_img('logo_European_Commission.jpg');?>" class="img-fluid" alt=""></div>
                            </div>
                        </div>
                    </section>
                </div>
                <div id="navbar" class="navbar top-menu">
                    <div class="container">
                        <nav id="site-navigation" class="navigation main-navigation row">
                            <div class="menu-top-menu-container clearfix">
                                <?php wp_nav_menu(array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' )); ?>
                            </div>
                        </nav>
                    </div>
                </div>
                <?php echo do_action('header_title');?>
            </header>