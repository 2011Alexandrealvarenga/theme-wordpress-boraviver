<div class="content">
  <a href="<?php the_permalink(); ?> ">
    <div class="title">
      <h4><?php the_title(); ?></h4>
    </div>
    <div class="content-image">
      <?php the_post_thumbnail('thumbnail'); ?>
    </div>
    <div class="content-text">
      
        
        <div class="attributes">
          <span><?php the_author(''); ?></span>
          <span><?php the_date(); ?></span>
          <span><?php the_category( ' ' ); ?></span>
        </div>
        <p><?php the_excerpt(); ?></p>
    
    </div>

  </a>
</div>
