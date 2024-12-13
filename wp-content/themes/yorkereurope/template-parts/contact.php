<?php
/**
 * Template Name: contact
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
	
    <!--============ breadcrump start ============-->
	<section class="breadcrump-wrapper" style="background-image:url(<?php echo get_the_post_thumbnail_url($post_id, 'full'); ?>)">
        <div class="container">
            <span class="subtitle">GET IN TOUCH</span>
            <h1>CONTACT <span>us</span></h1>
        </div>
    </section>

    <section class="information-wrapper section-padding pt-3">
        <div class="container">
            <div class="row">
				<?php $hero = get_field('informtion'); if( $hero ): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-info">
                        <div class="icon-box">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>    
                        <div class="details">
                            <h4>Address</h4>							
                            <p><?php echo $hero['address']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-info">
                        <div class="icon-box">
                            <i class="fa-sharp fa-solid fa-phone"></i>
                        </div>    
                        <div class="details">
                            <h4>Phone</h4>
                            <p><?php echo $hero['phonne']; ?></p>
                            <p><?php echo $hero['phonne2']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-info">
                        <div class="icon-box">
                            <i class="fa-solid fa-envelope"></i>
                        </div>    
                        <div class="details">
                            <h4>Email</h4>
                            <p><?php echo $hero['email']; ?></p>
                        </div>
                    </div>
                </div>
				<?php endif; ?>
            </div>
        </div>
    </section>

    <section class="contact-wrapper section-padding">
        <div class="row">
            <div class="col-lg-6 position-static">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.9076954990323!2d-0.12615592414421534!3d51.514909410155695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604ccabd74e61%3A0x9f541e2bfa56e4dd!2s71%20Shelton%20St%2C%20London%20WC2H%209JQ%2C%20UK!5e0!3m2!1sen!2sin!4v1730701360771!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-6">
                <div class="form">
                    <div class="heading text-center">
                        <h3>Send us a <span>message</span></h3>
                    </div>
                    <div class="body">
                        <?php echo apply_shortcodes( '[contact-form-7 id="140f972" title="Contact_form"]' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>