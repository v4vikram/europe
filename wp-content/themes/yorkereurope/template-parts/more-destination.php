<?php
/**
 * Template Name: more Destination
 *
 */
get_header(); ?>

<!--============ breadcrump start ============-->
<section class="breadcrump-wrapper">
    <div class="container">
        <span class="subtitle">CHOOSE YOUR TOUR</span>
        <h1><span>Packages</span> Categories</h1>
    </div>
</section>

<!--============ tour start ============-->
<section class="hotdeals-wrapper section-padding">
    <div class="container">
        <div class="tour-section">
            <div class="row">
                <?php
                // Get all product categories
                $categories = get_terms(array(
                    'taxonomy' => 'package_category',
                    'hide_empty' => true,
                ));

                // Define the URL of the default image
                $default_image_url = 'path-to-your-default-image.jpg'; // Replace with your default image URL

                // Check if categories exist
                if (!empty($categories) && !is_wp_error($categories)) {
                    foreach ($categories as $category) {
                        // Get the category image using ACF
                        $category_image = get_field('package_category_image', 'package_category_' . $category->term_id);

                        // Use the category image if it exists, otherwise use the default image
                        $image_url = $category_image ? esc_url($category_image) : esc_url($default_image_url);
                        ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="cat_single">
                                <a href="<?php echo esc_url(get_term_link($category)); ?>">
                                    <img src="<?php echo $image_url; ?>" alt="<?php echo esc_attr($category->name); ?>" />
                                </a>
                                
                                <h4>
                                    <a href="<?php echo esc_url(get_term_link($category)); ?>">
                                        <?php echo esc_html($category->name); ?>
                                    </a>
                                </h4>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo '<p>No categories found.</p>';
                }
                ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
