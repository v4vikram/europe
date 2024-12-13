<?php
/**
 * Template Name: Group
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
    <section class="breadcrump-wrapper">
        <div class="container">
            <span class="subtitle">CHOOSE YOUR TOUR</span>
            <h1><span>Europe Group</span> Package</h1>
        </div>
    </section>

    <!--============ tour start ============-->
    <section class="hotdeals-wrapper section-padding">
        <div class="container">
            <div class="tour-section">
                <div class="row">
                    <?php $loop = new WP_Query( array( 'post_type' => 'package', 'posts_per_page' => -1, 'order' => 'ASC', 'package_category' => 'group') ); ?>
           			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                       <div class="single">
                           <?php $thumbnail_id = get_post_thumbnail_id( $post->ID );
						   $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); ?>
						   <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php echo $alt;?>">                          						
						   <?php $hero = get_field('info'); if( $hero ): ?>
                           <div class="details">                                  
                               <h4><a href="<?php the_permalink();?>"> <?php the_title();?></a></h4>
                               <span class="price">
                                    <i class="fa-solid fa-euro-sign"></i> <?php echo $hero['price']; ?> <span>/ per person</span>
                                </span>
                               <div class="row facilities">
                                    <div class="col-7 border-right">
                                        <span class="time"><i class="fa-light fa-clock"></i> <?php echo $hero['duration']; ?></span>
                                    </div>
                                    <div class="col-5 text-right">
                                        <a href="<?php the_permalink();?>">Explore <i class="fa-light fa-arrow-right"></i></a>
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

<?php get_footer(); ?>