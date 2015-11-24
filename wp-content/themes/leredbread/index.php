<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area clearfix">
	     <div class="blogpage clearfix">
           <div class="blogposts">
		    <?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h2 class="page-title screen-reader-text"><?php single_post_title(); ?></h2>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<div class="post-description">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>
            </div>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
	</div>
		<div class="blog-side">
         <?php get_sidebar(); ?>
     </div>
 </div>
	</div><!-- #primary -->


<?php get_footer(); ?>
