<?php
/**
*
*Template Name:about page
* @package RED_Starter_Theme
*/
get_header(); ?>
 
    <div class="container3 clearfix">

        <section class="motto"> 
          <h1 class="entry-title">Learn About Our Team and Culture</h1>
          <?php echo ( CFS()->get('team_motto')); ?>
          
        </section>
          <hr class="line"> </hr>
        <div class="container11">
            <section class= "left-side"> <?php echo ( CFS()->get('left_block')); ?></section>
            <section class="right-side"> <?php echo ( CFS()->get('right_block')); ?></section>

        </div>
            <p class= "our-story"> <?php echo ( CFS()->get('our_story')); ?></p>
        
        <section class="call-to-action clearfix">
              <p>
                  <span>
                      Feel free to contact us with any questions coments or suggestions. We even take custom orders!
                   </span>
        
                <a href="http://localhost:3000/le-red-bread/contacts/" class="btn">Contact Us</a>
             </p>
        </section>
      </div>

<?php get_footer(); ?>