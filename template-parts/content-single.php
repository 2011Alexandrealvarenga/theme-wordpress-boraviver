<div class="content ">
  <?php the_post_thumbnail('medium'); ?>
  <div class="title">
    <h4><?php the_title(); ?></h4>
  </div>
  
  <div class="caract">
    <span>autor: <span><?php the_author(''); ?></span> </span>
    <span><?php the_date(); ?></span>
    <span><?php the_category( ' ' ); ?></span>
  </div>
  
     
  <p class="pt-5"><?php the_content(); ?></p>
    
    

 <?php  ?>
</div>
<div class="comentarios">
  <?php comments_template(); ?>
</div>