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
                            <ul id="menu-menu-1" class="menu">
                                <li id="" class="">
                                    <a href="<?php echo site_url() ?>">Home</a>
                                </li>
                                <li id="menu-item-120" class="menu-item">
                                    <a href="<?php echo site_url() ?>/about" aria-current="page">About</a>
                                </li>
                                <li id="menu-item-119" class="menu-item dropsub-menu">
                                    <a href="
                                    #">Europe
                                        tour package</a>
                                    <ul class="sub-menu">

                                        <?php
                                        $excluded_categories = array(3,5);
                                        // Get all product categories
                                        $categories = get_terms(array(
                                            'taxonomy' => 'package_category',
                                            'hide_empty' => true,
                                            'exclude' => $excluded_categories,
                                        ));

                                        // Initialize a counter
                                        $count = 0;

                                        foreach ($categories as $category) {
                                            // Increment the counter
                                            $count++;

                                            // Display the category link if the counter is 3 or below
                                            if ($count <= 2) {
                                                echo '<li><a href="' . esc_url(get_term_link($category)) . '">' . esc_html($category->name) . '</a></li>';
                                            } else {
                                                // If the count is greater than 3, break out of the loop
                                                break;
                                            }
                                        }

                                        // If there are more than 3 categories, display the "more destinations" link
                                        if (count($categories) >= 2) {
                                            echo '<li><a href="' . site_url() . '/more-destination">More destinations</a></li>';

                                        }
                                        ?>



                                    </ul>
                                </li>
                                <li id="menu-item-121" class="menu-item "><a
                                        href="<?php echo site_url() ?>/service/">Service</a></li>
                                <li id="menu-item-122" class="menu-item "><a
                                        href="<?php echo site_url() ?>/contact/">Contact</a></li>
                            </ul>
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