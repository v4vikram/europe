<?php get_header(); ?>

<div class="tour-packages-container">
    <h1><?php single_cat_title(); ?> Packages</h1>

    <?php if (have_posts()) : ?>
        <div class="tour-packages-list">
            <?php while (have_posts()) : the_post(); ?>
                <div class="tour-package">
                    <h2><?php the_title(); ?></h2>
                    <div class="package-content">
                        <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="read-more">View Package</a>
                </div>
            <?php endwhile; ?>
        </div>

        <?php the_posts_pagination(); ?>
    <?php else : ?>
        <p>No packages found for this category.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
