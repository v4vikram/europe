<?php
/**
 * Template Name: about
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

get_header(); 


?>
	
    <!--============ breadcrump start ============-->
    <section class="breadcrump-wrapper" style="background-image:url(<?php echo get_the_post_thumbnail_url($post_id, 'full'); ?>)">
        <div class="container">
            <span class="subtitle">THE BEST TRAVEL AGENCY</span>
            <h1>WE HELPING YOU FIND <br/><span>YOUR DREAM</span> VACATION</h1>
        </div>
    </section>

    <!--============ about start ============-->
    <section class="about-wrapper section-padding">
        <div class="container">
			<?php $hero = get_field('about'); if( $hero ): 
                ?>
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="content">
                        <div class="heading">
                            <span class="subtitle">About Us</span>
                            <h4><?php echo $hero['heading']; ?></h4>
                        </div>
                        <?php echo $hero['content']; ?>
                    </div>
                </div>
            </div>
			<?php endif; ?>
        </div>
    </section>

    <!--============ talk start ============-->
    <div class="callback-warapper text-center">
        <div class="container">
            <div class="inner">
                <h4>ARE YOU READY TO TRAVEL?<br/> REMEMBER US !!</h4>
                <p>Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum<br/> cumque laudantium. Sit ornare mollitia tenetur, aptent.</p>
                <div class="theme_btn">
                    <a href="<?php echo get_site_url(); ?>/more-destination/">View Package</a>
                </div>
            </div>            
        </div>
    </div>

    <!--============ counterup start ============-->
    <div class="counterup-section d-inline-block w-100">
        <div class="container">
            
			<?php $hero = get_field('counterup'); if( $hero ): ?>
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

<script>
    //////////// counter up js //////////////
        var counted = 0;
        $(window).scroll(function() {

          var oTop = $('#counter').offset().top - window.innerHeight;
          if (counted == 0 && $(window).scrollTop() > oTop) {
            $('.count').each(function() {
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
                  step: function() {
                    $this.text(Math.floor(this.countNum));
                  },
                  complete: function() {
                    $this.text(this.countNum);
                    //alert('finished');
                  }

                });
            });
            counted = 1;
          }

    });     
    </script>