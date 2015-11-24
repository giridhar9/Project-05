<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	
       <div class="single-page clearfix">
       	<div class="single-blog clearfix">
		<?php while ( have_posts() ) : the_post(); ?>
             
			<?php get_template_part( 'template-parts/content', 'single' ); ?>


			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
           
		<?php endwhile; // End of the loop. ?>
		</div>
		<div class="single-side clearfix">
        <?php get_sidebar(); ?>
         </div>
          </div>
	
	

<?php get_footer(); ?>
