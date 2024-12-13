<?php
get_header(); ?>
	
    <!--============ breadcrump start ============-->
    <section class="breadcrump-wrapper">
        <div class="container">
            <span class="subtitle">CHOOSE YOUR TOUR</span>
            <h1><span>
                <?php
                     $current_category = get_queried_object();
                    echo $current_category->name;
                ?>
            </span> Package</h1>
        </div>
    </section>

<!--============ tour start ============-->
<section class="hotdeals-wrapper section-padding">
    <div class="container">
        <div class="tour-section">
            <div class="row">
                <?php 
                $is_checked = get_field('hot_deal');
                // Get the current category slug if viewing a category page.
                $queried_object = get_queried_object();
                $category_slug = '';
                
                if (isset($queried_object->slug)) {
                    $category_slug = $queried_object->slug; // Get the slug of the current category
                }
                
                // Set up a custom query to fetch posts from the 'package' post type.
                $loop = new WP_Query(array(
                    'post_type' => 'package',
                    'posts_per_page' => -1,
                    'order' => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'package_category', // Replace with your taxonomy name
                            'field'    => 'slug',
                            'terms'    => $category_slug,
                        ),
                    ),
                ));
                ?>
                
                <?php if ($loop->have_posts()) : ?>
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="single">
                                <?php 
                                $thumbnail_id = get_post_thumbnail_id($post->ID);
                                $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); 
								
                                ?>
                                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php echo esc_attr($alt); ?>">                          						
                                
                                <?php $hero = get_field('info'); if($hero): ?>
                                <div class="details">                                  
                                    <h4><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h4>
                                    <span class="price">
                                        <i class="fa-solid fa-euro-sign"></i> <?php echo esc_html($hero['price']); ?> <span>/ per person</span>
                                    </span>
                                    <div class="row facilities">
                                        <div class="col-7 border-right">
                                            <span class="time"><i class="fa-light fa-clock"></i> <?php echo esc_html($hero['duration']); ?></span>
                                        </div>
                                        <div class="col-5 text-right">
                                            <a href="<?php the_permalink(); ?>">Explore <i class="fa-light fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div> 
                        </div>
                    <?php endwhile; ?>  
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p>No packages found in this category.</p>
                <?php endif; ?>                  
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