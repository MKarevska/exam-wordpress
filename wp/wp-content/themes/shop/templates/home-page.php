<?php
/**
 * Template Name: homepage
 */
 get_header(); ?>

<?php if ( have_posts() ) : ?>
    <h2>Latest posts</h2>   
	<ul class="products-listing">
    <?php while ( have_posts() ) : ?>

        <?php the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile; ?>
    </ul>
<?php endif; ?>

<?php get_footer(); ?>