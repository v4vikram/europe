<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

	<!--============ footer start ============-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single">
                        <img src="<?php echo get_template_directory_uri(  )?>/assets/images/footer-logo.png" alt="logo">
                        <p>Explore UK and Europe with a tailored tour package, offering unforgettable experiences crafted to fulfill each traveler’s unique desires and dreams.</h4>
                        <ul class="social-icon ml-0">
                            <li><a target="_blank" href="https://www.facebook.com/profile.php?id=61565776293117"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/yorkerholidays/?hl=en"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a target="_blank" href="https://x.com/yorkerindia?lang=en"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/company/yorker-holidays-services-pvt-ltd-/about/"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="contact">
                                <h4>Contact</h4>
								<?php $hero = get_field('informtion',34); if( $hero ): ?>
                                <ul>
                                    <li><a href="mailto:<?php echo $hero['email']; ?>"><i class="fa-solid fa-envelope"></i> <?php echo $hero['email']; ?></a></li>
                                    <li><a href="tel:<?php echo $hero['phonne']; ?>"><i class="fa-sharp fa-solid fa-phone"></i> <?php echo $hero['phonne']; ?></a></li>
                                    <li><a href="javascpirt:void(0)"><i class="fa-solid fa-location-dot"></i> <?php echo $hero['address']; ?></a></li>
                                </ul>
								<?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="single">
                                <h4>Explore</h4>
                                <?php
								wp_nav_menu( array(
									'theme_location' => 'footer',
								) );
								?>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single">
                                <h4>We Accepts:</h4>
                                <div class="payment">
                                    <img src="https://demo.egenslab.com/html/tourx/assets/images/payment/payment-card-2.png">
                                    <img src="https://demo.egenslab.com/html/tourx/assets/images/payment/payment-card-1.png">
                                    <img src="https://demo.egenslab.com/html/tourx/assets/images/payment/payment-card-3.png">
                                    <img src="https://demo.egenslab.com/html/tourx/assets/images/payment/payment-card-4.png">
                                    <img src="https://demo.egenslab.com/html/tourx/assets/images/payment/payment-card-5.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>      
            </div>
            <div class="copyright">
                <p>Copyright <?php echo date('Y'); ?> <span>Yorker  UK adn Europe DMC</span>  |  Design By <a href="https://tdpkreative.com">TDP Kreative</a></p>
            </div>
        </div>
    </footer>

	<!--====== js files includes ======-->
	<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery3.6.0.js"></script>	
	<script src="<?php bloginfo('template_url'); ?>/assets/js/slick.js"></script>		
	<script src="<?php bloginfo('template_url'); ?>/assets/js/function.js?cache=<?php echo time(); ?>"></script>
<?php wp_footer(); ?>
</body>
</html>
