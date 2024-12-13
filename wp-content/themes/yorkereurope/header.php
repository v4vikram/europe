<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php if (is_singular() && pings_open(get_queried_object())): ?>
        <link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
    <!--======= css files include =======-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css?cache=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!--============ header start ============-->
    <header class="header">
        <div class="container">
            <div class="inner-sec">
                <div class="toggler">
                    <i class="fa-regular fa-bars-staggered"></i>
                </div>
                <div class="logo">
                    <a href="<?php echo get_site_url(); ?>">
                        <img class="logoimg" src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png"
                            align="logo">
                    </a>
                </div>
                <div class="menu_phone">
                    <div class="black_wall"></div>
                    <nav>
                        <span class="nav_head">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png">
                            <span class="close"><i class="fa-regular fa-xmark"></i></span>
                        </span>

                        <div class="menu-menu-1-container">
                        <?php
						wp_nav_menu( array(
							'theme_location' => 'header_menu',
						) );
						?>
                           
                        </div>

                    </nav>

                    <?php $hero = get_field('informtion', 6);
                    if ($hero): ?>
                        <div class="phone-info">
                            <a href="tel:<?php echo $hero['phonne']; ?>"><i class="fa-light fa-headset"></i>
                                <?php echo $hero['phonne']; ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>