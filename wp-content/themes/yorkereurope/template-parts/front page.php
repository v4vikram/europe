<?php
/**
 * Template Name: front page
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>



<!--============ banner start ============-->
<section class="banner-wrapper">
    <div class="banner-slider">
        <?php $loop = new WP_Query(array('post_type' => 'home_slider', 'posts_per_page' => -1, 'order' => 'ASC')); ?>
        <?php while ($loop->have_posts()):
            $loop->the_post(); ?>
            <div class="single-banner">
                <div class="banner-img">
                    <?php $thumbnail_id = get_post_thumbnail_id($post->ID);
                    $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php echo $alt; ?>">
                </div>
                <div class="banner-content">
                    <div class="container">
                        <h1>Let's travel the world with us</h1>
                        <h2><?php the_content(); ?></h2>
                        <div class="theme_btn">
                            <?php
                            $home_slider_url = get_field('home_slider_url');
                            if ($home_slider_url):
                                ?>
                                <a href="<?php echo esc_url($home_slider_url); ?>">Explore Tour <i
                                        class="fa-light fa-arrow-up-right"></i></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>

    </div>
</section>

<!--============ about start ============-->
<section class="about-wrapper section-padding home_about">
    <div class="container">
        <?php $hero = get_field('about', 26);
       
        if ($hero): ?>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img class="about-img-2" src="<?php echo esc_url($hero['image1']); ?>"
                        alt="<?php echo esc_attr($hero['image2']['alt']); ?>" />
                </div>
                <div class="col-lg-6">
                    <div class="content">
                        <div class="heading">
                            <span class="subtitle">About Us</span>
                            <h4><?php echo $hero['heading']; ?></h4>
                        </div>
                        <?php echo $hero['content']; ?>
                        <a href="<?php echo get_site_url(); ?>/about">Discover More <i
                                class="fa-light fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<!--============ tour start ============-->
<section class="tour-wrapper section-padding bg-color-1">
    <div class="container">
        <div class="heading text-center">
            <span class="subtitle">CHOOSE YOUR PLACE</span>
            <h3><span>Special</span> Tour Package</h3>
        </div>
        <div class="tour-section mt-5">
            <div class="tour-slider position-relative">
                <?php $loop = new WP_Query(array('post_type' => 'package', 'posts_per_page' => -1, 'order' => 'ASC', 'package_category' => 'special')); ?>
                <?php while ($loop->have_posts()):
                    $loop->the_post(); ?>
                    <div class="d-inline-block">
                        <div class="single">
                            <?php $thumbnail_id = get_post_thumbnail_id($post->ID);
                            $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); ?>
                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php echo $alt; ?>">

                            <?php $hero = get_field('info');
                            if ($hero): ?>
                                <span class="price">
                                    <i class="fa-solid fa-euro-sign"></i> <?php echo $hero['price']; ?> <span>/ per
                                        person</span>
                                </span>
                                <div class="details">
                                    <h4><a href="<?php the_permalink(); ?>"><i class="fa-light fa-location-dot"></i>
                                            <?php the_title(); ?></a></h4>
                                    <div class="line"></div>
                                    <div class="row facilities">
                                        <div class="col-8">
                                            <span class="time"><i class="fa-light fa-clock"></i>
                                                <?php echo $hero['duration']; ?></span>
                                        </div>
                                        <div class="col-4">
                                            <a href="<?php the_permalink(); ?>">Explore <i
                                                    class="fa-light fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>

<!--============ hot deals tour start ============-->
<section class="hotdeals-wrapper section-padding">
    <div class="pattern-layer"
        style="background-image: url(https://travio.smartdemowp.com/wp-content/uploads/2021/02/shape-4.png);"></div>
    <div class="container">
        <div class="heading text-center">
            <span class="subtitle">Yorker UK & Europe DMC</span>
            <h3><span>Explore</span> Our hot Deals</h3>
        </div>
        <div class="tour-section mt-5">
            <div class="tour-slider position-relative">
                <?php $loop = new WP_Query(array('post_type' => 'package', 'posts_per_page' => -1, 'order' => 'ASC', 'package_category' => 'hotdeal')); ?>
                <?php while ($loop->have_posts()):
                    $loop->the_post(); ?>
                    <div class="d-inline-block mb-4">
                        <div class="single">
                            <?php $thumbnail_id = get_post_thumbnail_id($post->ID);
                            $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); ?>
                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php echo $alt; ?>">
                            <?php $hero = get_field('info');
                            if ($hero): ?>
                                <div class="details">
                                    <h4><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h4>
                                    <span class="price">
                                        <i class="fa-solid fa-euro-sign"></i> <?php echo $hero['price']; ?> <span>/
                                            per person</span>
                                    </span>
                                    <div class="row facilities">
                                        <div class="col-7 border-right">
                                            <span class="time"><i class="fa-light fa-clock"></i>
                                                <?php echo $hero['duration']; ?></span>
                                        </div>
                                        <div class="col-5 text-right">
                                            <a href="<?php the_permalink(); ?>">Explore <i
                                                    class="fa-light fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>
        </div>
    </div>
</section>

<!--============ talk start ============-->
<div class="callback-warapper text-center">
    <div class="container">
        <div class="inner">
            <h4>ARE YOU READY TO TRAVEL?<br /> REMEMBER US !!</h4>
            <p>Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum<br /> cumque
                laudantium. Sit ornare mollitia tenetur, aptent.</p>
            <div class="theme_btn">
                <a href="<?php echo get_site_url(); ?>/more-destination">View Package</a>
            </div>
        </div>
    </div>
</div>

<!--============ counterup start ============-->
<div class="counterup-section d-inline-block w-100">
    <div class="container">

        <?php $hero = get_field('counterup', 26);
        if ($hero): ?>
            <ul id="counter">
                <li>
                    <span class="count percent" data-count="<?php echo $hero['number1']; ?>">0</span>
                    <span class="count">K+</span>
                    <p>SATISFIED CUSTOMER</p>
                </li>
                <li>
                    <span class="count percent" data-count="<?php echo $hero['number2']; ?>">0</span>
                    <span class="count">+</span>
                    <p>ACTIVE MEMBERS</p>
                </li>
                <li>
                    <span class="count percent" data-count="<?php echo $hero['number3']; ?>">0</span>
                    <span class="count">+</span>
                    <p>TOUR DESTINATION</p>
                </li>
                <li>
                    <span class="count percent" data-count="<?php echo $hero['number4']; ?>"></span>
                    <span class="count">+</span>
                    <p>TRAVEL GUIDES</p>
                </li>
            </ul>
        <?php endif; ?>
    </div>
</div>

<!--============ review start ============-->
<section class="review-wrapper section-padding bg-color-1">
    <div class="heading text-center">
        <span class="subtitle">CLIENT'S REVIEWS</span>
        <h3><span>Traveller's</span> Testimonial</h3>
    </div>
    <div class="review-base position-relative">
        <div class="review-slider">
            <?php $loop = new WP_Query(array('post_type' => 'review', 'posts_per_page' => -1, 'order' => 'ASC')); ?>
            <?php while ($loop->have_posts()):
                $loop->the_post(); ?>
                <div class="d-inline-block review-single">
                    <div class="single">
                        <div class="inner">
                            <div class="icon"
                                style="background-image: url(https://travio.smartdemowp.com/wp-content/uploads/2021/02/quote-1.png);">
                            </div>
                            <div class="author-box">
                                <figure class="thumb-box">
                                    <?php $thumbnail_id = get_post_thumbnail_id($post->ID);
                                    $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); ?>
                                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php echo $alt; ?>">
                                </figure>
                            </div>
                            <div class="text">
                                <h4><?php the_title(); ?></h4>
                                <span class="designation">Traveler</span>
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<!--============ partner start ============-->
<section class="position-relative section-padding pb-3">
    <div class="container">
        <div class="heading text-center">
            <span class="subtitle">MEET PARTNER</span>
            <h3>Our <span>Partner</span></h3>
        </div>
        <div class="partner-slider">
            <?php $loop = new WP_Query(array('post_type' => 'partner', 'posts_per_page' => -1, 'order' => 'ASC')); ?>
            <?php while ($loop->have_posts()):
                $loop->the_post(); ?>
                <div class="image">
                    <?php $thumbnail_id = get_post_thumbnail_id($post->ID);
                    $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php echo $alt; ?>">
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>



<?php get_footer(); ?>

<script>
    //////////// counter up js //////////////
    var counted = 0;
    $(window).scroll(function () {

        var oTop = $('#counter').offset().top - window.innerHeight;
        if (counted == 0 && $(window).scrollTop() > oTop) {
            $('.count').each(function () {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                },

                    {

                        duration: 2000,
                        easing: 'swing',
                        step: function () {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function () {
                            $this.text(this.countNum);
                            //alert('finished');
                        }

                    });
            });
            counted = 1;
        }

    }); 	
</script>