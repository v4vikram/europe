<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

 get_header();
?>

<?php global $wp_query; $post_obj = $wp_query->get_queried_object(); $Page_ID = $post_obj->ID;?>

<section class="gallery-wrapper position-relative">
        <div class="gallery-slider">
            <?php  if( class_exists('Dynamic_Featured_Image') ) {
			global $dynamic_featured_image;
			$featured_images = $dynamic_featured_image->get_featured_images( );
			foreach($featured_images as $featured_image) { echo "<img src='".$featured_image['full']."' 							class='col_01'>"; } }?>
        </div>
    </section>    

    <!--============ tour start ============-->
    <section class="packgae-wrapper section-padding bg-color-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tour-title">
                        <p><i class="fa-light fa-location-dot"></i> <?php the_field('location'); ?></p>
                        <h4><?php the_title();?></h4>
                    </div>
                    <div class="tour-package-details">
						<?php $hero = get_field('info'); if( $hero ): ?>
                        <ul class="packgae-info">
                            <li>
                                <div class="box text-center">
                                    <span class="icon"><i class="fa-light fa-clock"></i></span>
                                    <p><?php echo $hero['duration']; ?></p>
                                </div>
                            </li>
                            <li>
                                <div class="box text-center">
                                    <span class="icon"><i class="fa-light fa-user-group"></i></span>
                                    <p>People: <?php echo $hero['people']; ?></p> 
                                </div>
                            </li>
                            <li>
                                <div class="box text-center">
                                    <span class="icon"><i class="fa-solid fa-euro-sign"></i></span>
                                    <p><?php echo $hero['price']; ?> Per Person</p> 
                                </div>
                            </li>
                        </ul> 
						<?php endif; ?>
						
						<?php $hero = get_field('package_details'); if( $hero ): ?>
                        <div class="inclusion bg-white">
                            <h4>Inclustion</h4>
                            <?php echo $hero['inclusion']; ?>
                        </div>
                        <div class="exclude bg-white">
                            <h4>EXCLUDE</h4>
                            <?php echo $hero['exclusion']; ?>
                        </div>
                        <div class="itinerary bg-white">
                            <h4>ITINERARY</h4>
                            <div class="itinerary-info">
                                <?php echo $hero['itinerary']; ?>
                            </div>
                        </div>
						<?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="booking-form">
						<?php $hero = get_field('info'); if( $hero ): ?>
                        <div class="head">
                            <h4>Book This Tour</h4>
                            <p class="text-light"><i class="fa-solid fa-euro-sign"></i> <?php echo $hero['price']; ?> <span>Per Person</span></p>
                        </div>
						<?php endif; ?>
                        <div class="form">
                            <?php echo apply_shortcodes( '[contact-form-7 id="107" title="booking_form"]' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


	 <!--============ review start ============-->    
    <section class="review-wrapper section-padding bg-color-1">
        <div class="heading text-center">
            <span class="subtitle">CLIENT'S REVIEWS</span>
            <h3><span>Traveller's</span> Testimonial</h3>
        </div>
        <div class="review-base position-relative">
            <div class="review-slider">
				<?php $loop = new WP_Query( array( 'post_type' => 'review', 'posts_per_page' => -1, 'order' => 'ASC') ); ?>
           		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="d-inline-block review-single">
                    <div class="single">
                        <div class="inner">
                            <div class="icon" style="background-image: url(https://travio.smartdemowp.com/wp-content/uploads/2021/02/quote-1.png);">
                            </div>
                            <div class="author-box">                                
                                <figure class="thumb-box">
                                   <?php $thumbnail_id = get_post_thumbnail_id( $post->ID );
                                     $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); ?>
                    				<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php echo $alt;?>">
                                </figure>
                            </div>
                            <div class="text">
                                <h4><?php the_title();?></h4>
                                <span class="designation">Traveler</span>
                                <?php the_content();?>
                            </div>                            
                        </div>
                    </div>
                </div>
				<?php endwhile; ?>
            </div>
        </div>
    </section> 
    <?php
         get_footer();
    ?>