<?php
/**
* A Simple Category Template
*/
 
get_header(); ?> 
<div class="container space-container">
  <div class="row">

    <div class="col-12 title-category">
      
      <h3><?php the_category( ' ' ); ?></h3>

    </div>
  </div>
</div>
<div class="container space-container">
  <div class="todos-posts">
    <div class="row">
      <div class="col-8">
        <?php if(have_posts()): 
        while(have_posts()):
          the_post();
        ?>
          <?php get_template_part('template-parts/content','listageral'); ?>
        <?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>

        <?php get_template_part('template-parts/content','paginacao'); ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>    
</div> 
 


 
 
