<?php
/**
 * Template Name: service
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
            <span class="subtitle">CHOOSE YOUR SERVICES</span>
            <h1>Services <span>We Provide</span></h1>
        </div>
    </section>

    <section class="serices-wrapper section-padding bg-color-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">                        
                        <div class="image">                            
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/escorted-tours.jpg" alt="">
                            <div class="text-box">
                                <h4>Escorted Tours</h4>
                                <a class="ser_open">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">                        
                        <div class="image">                            
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/individual-tour.jpg" alt="">
                            <div class="text-box">
                                <h4>Individual Tour</h4>
                                <a class="ser_open">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">                        
                        <div class="image">                            
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/mice.jpg" alt="">
                            <div class="text-box">
                                <h4>MICE Tour</h4>
                                <a class="ser_open">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">                        
                        <div class="image">                            
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/private-van-tour.jpg" alt="">
                            <div class="text-box">
                                <h4>Private Van Tour</h4>
                                <a class="ser_open">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">                        
                        <div class="image">                            
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/europe-rail-tour-packages.jpg" alt="">
                            <div class="text-box">
                                <h4>Europe Rail Tour</h4>
                                <a class="ser_open">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">                        
                        <div class="image">                            
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/self-drive.jpg" alt="">
                            <div class="text-box">
                                <h4>Self Drive Tour</h4>
                                <a class="ser_open">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">                        
                        <div class="image">                            
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/sightseeing.jpg" alt="">
                            <div class="text-box">
                                <h4>Sightseeing Tour</h4>
                                <a class="ser_open">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>


    <!-- popup form -->
    <div class="ser_form_bg">       
        <div class="form position-relative">
            <span class="close_pop ser_close"><i class="fa-light fa-xmark"></i></span>
            <h3>Booking Form</h3>
            <?php echo apply_shortcodes( '[contact-form-7 id="106" title="service_form"]' ); ?>
        </div>
    </div> 

<?php get_footer(); ?>