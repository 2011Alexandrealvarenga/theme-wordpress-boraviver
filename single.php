<?php
/**
* A Simple Category Template
*/
 
get_header(); ?> 
<div class="container space-container">
  <div class="single">
    <div class="row">
      <div class="col-md-8 col-sm-12">
        <?php if(have_posts()): 
        while(have_posts()):
          the_post();
        ?>
        
        <?php get_template_part('template-parts/content','single'); ?>


        <?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>

        
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>    
</div> 
 


 
 
