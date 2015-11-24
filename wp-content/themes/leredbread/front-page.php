<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); 
?>
<div class="container1">
  <div class="heading">
    <span class="text-head">
      Baked to perfection
    </span>
  </div>
  <div class="product_t">
    <?php    $taxonomy = 'product_type'; ?>
    <?php    $terms = get_terms($taxonomy); ?>
    <?php    if ($terms): ?>
    <?php    foreach($terms as $term): ?>
    <div class="product">
      <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $term->slug;?>.png"/> 
      <div class="text"><h3><?php   echo $term->name;?></h3>
        <p><?php echo $term->description;?>
          <a href="<?php echo get_term_link($term); ?>">See More...</a></p>
        </div>
      </div>
    <?php endforeach; ?>
  <?php endif; ?> 
</div>
<div class="see-menu">
  <p>
    All our products are made fresh daily from locally-sourced ingredients. Our menu is updated frequently.
    <a href="http://localhost:3000/le-red-bread/products/" class="button-menu">See Our Products</a>
  </p>
</div>  

<div class="images">
  <h2>Our latest news</h2>
  <hr class="line"></hr>
  <div class="container-images">
    <?php
    $args = array( 'posts_per_page' => 4, 'post_type' => 'post' );
   $blog_posts = get_posts( $args ); // returns an array of posts
   ?>
   <?php foreach ( $blog_posts as $post ) : setup_postdata( $post ); ?>
   
   <li> 
     <div id="thumbnail"> <?php the_post_thumbnail(); ?></div>
     <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
     <p><?php the_time ('d M Y'); ?> 
      <?php comments_number('/ 0 Comments'); ?></p>

    </li>


  <?php endforeach; wp_reset_postdata(); ?>
</div>
</div>
<div class="testimonials">
  <div class="testimonials-head">
    <h2>What others say about us</h2>
    <hr class="line"></hr>
  </div>
  <ul>
    <li>
      <img src="<?php echo get_template_directory_uri();?>/images/testimonial-headshots/dr-dosist-headshot.png" alt="logo">
      <div class="review">
        <P>Healthy food be damned! If you are a bakery and sweet addict like myself this place is life changing. So many goodies. Have a cheat day and eat all the pretzels!</p>
          <p class="name">Dr. Dosist</p>
          <P class="creds">Nutritionist-<a href="http://www.redacademy.com">Health Time Clinic</a></p>
          </div>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri();?>/images/testimonial-headshots/maxi-milli-headshot.png" alt="logo">
          <div class="review">
            <P>Do you like bread? Seriously, who doesn’t? You have to check Le Red Bread’s lovely loaves. Fresh flavours every day…need I say more?</p>
              <p class="name">Maxi Milli</p>
              <P class="creds">Chef-<a href="http://www.redacademy.com"> Sailor Spoon</a></p>
              </div>
            </li>

            <li>
              <img src="<?php echo get_template_directory_uri();?>/images/testimonial-headshots/ana-vandana-headshot.png" alt="logo">
              <div class="review">
                <P>Excellent cookies! They always have unique flavours and the cookies are always super fresh. Make sure you get them before they sell out! And keep an eye out on holidays, the flavour combinations they come up with are brilliant. Delicious!</p>
                  <p class="name">Anna Vandana</p>
                  <P class="creds">Author-<a href="http://www.redacademy.com">Food is Great Magazine</a></p>
                  </div>
                </li>
                <li>
                  <img src="<?php echo get_template_directory_uri();?>/images/testimonial-headshots/martha-m-masters-headshot.png" alt="logo">
                  <div class="review">
                    <P>Where has this bakery been all my life! I absolutely love their cookies and muffins. Nom nom.</p>
                      <p class="name">Martha M. Masters</p>
                      <P class="creds">Food Critic-<a href="http://www.redacademy.com"> WikiTravel</a></p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>    
              <?php get_footer(); ?>