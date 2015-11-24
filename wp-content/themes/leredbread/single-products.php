<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		
       <div class="single-product-page clearfix">
        <div class="single-product">
		<?php while ( have_posts() ) : the_post(); ?>
		
         <h1><?php the_title(); ?></h1>
          <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'medium' ); ?>
                <p><?php the_content(); ?></p>
                <p class="price"><?php echo esc_html( CFS()->get('price')); ?></p>
                <?php endif; ?>
		
		<?php endwhile; // End of the loop. ?>
		</div>
		<div class="single-product-side">
        <?php get_sidebar(); ?>
    </div>
    </div>
	</div><!-- #primary -->

<?php get_footer(); ?>
