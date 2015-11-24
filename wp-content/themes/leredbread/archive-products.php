<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        <div class="container-products clearfix">
            
            <div class="products-motto">
                <h1>OUR PRODUCTS ARE MADE FRESH DAILY</h1>
                <p>We are a team of creative and talented individuals who love making delicious treats.</p>
            </div>
            <hr class="line"></hr>
        <div class="product-wrapper">
        <?php    $taxonomy = 'product_type'; ?>
        <?php    $terms = get_terms($taxonomy); ?>
        <?php    if ($terms): ?>
        <?php    foreach($terms as $term): ?>
          <div class="product-type">  <a href="<?php echo get_term_link($term); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $term->slug;?>.png"/> 
            <?php echo $term->name;?>
            </a></div>

         <?php endforeach; ?>
         <?php endif; ?>
         </div>
        <div class="archive-products">
        <?php if ( have_posts() ) : ?>

            <header class="page-header">
                <?php
                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>
            </header><!-- .page-header -->
           
          <?php  ?>

            <?php while ( have_posts() ) : the_post(); ?>
                <div class="archive-product">
                <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'medium' ); ?>
                <?php endif; ?>
                <p class= "price" ><?php the_title( ); ?>
                 Price: <?php echo esc_html( CFS()->get('price')); ?></p>
                 </div>
               <?php endwhile; ?>
                
            <?php the_posts_navigation(); ?>

        <?php else : ?>

              <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>
         </div>
         </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>