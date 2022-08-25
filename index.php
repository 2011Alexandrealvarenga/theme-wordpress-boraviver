<?php get_header(); ?>
  <div class="container space-container">
    <div class="banner">
      <div class="row linha-banner">
        <div class="coluna-esquerda">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <?php if(have_posts()): 
              while(have_posts()):
                the_post();
              ?>
              
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>

               <?php endwhile; endif; ?>

              <?php wp_reset_query(); ?>
            </ol>
              <div class="carousel-inner">
              
                <?php if(have_posts()): 
                while(have_posts()):
                  the_post();
                ?>

                <div class="carousel-item <?php $c++; if($c == 1) { echo ' active'; } ?>">
                  <a href="<?php the_permalink(); ?> ">
                  <?php the_post_thumbnail('medium'); ?>
                  <div class="carousel-caption d-none d-md-block">
                    
                      <div class="caixa">
                        <h4><?php the_title(); ?></h4>
                        <h6><?php the_category( ' ' ); ?></h6>
                        <h6><?php the_author(''); ?></h6>
                      </div>
                    
                  </div>
                  </a>
                </div>
                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
          </div>
        </div>
         <div class="coluna-direita">
            <div class="content">
              <?php 
              //args
              $my_args_banner = array(
                'post_type' => 'post',
                'posts_per_page' => 4,
              );
             
             $my_query_banner = new WP_Query($my_args_banner);
             ?>

             <?php if($my_query_banner->have_posts()) :
              while($my_query_banner->have_posts()):
                $my_query_banner->the_post();
             ?>
             <div class="item d-flex justify-content-center">
              <a href="<?php the_permalink(); ?> ">
                <?php the_post_thumbnail('thumbnail'); ?>
                
                <div class="caixa">
                  <h5><?php the_title(); ?></h5>
                  <p><?php the_category( ' ' ); ?></p>                
                </div>
              </a>
             </div>
             <?php endwhile; endif; ?>
             <?php wp_reset_query(); ?>
            </div>
          </div>
      </div>
    </div>
  </div>
  <div class="container space-container posts-8">
    <div class="">
      <div class="row">
        <div class="col">
          <div class="conteudo">
            <?php 
              //args
              $my_args_banner = array(
                'post_type' => 'post',
                'posts_per_page' => 5,
                'offset' => 4
              );
             
             $my_query_banner = new WP_Query($my_args_banner);
             ?>

            <?php if($my_query_banner->have_posts()): 
              while ($my_query_banner->have_posts()):$my_query_banner->the_post(); 
             
            ?>
         
            <div class="item">          
                <?php the_post_thumbnail('thumbnail'); ?>      
              
              <div class="texto">
                <h4><?php the_title(); ?></h4>
                <span><?php the_author(); ?></span>
                <span><?php the_date(); ?></span>
                <span><?php the_category( ' ' ); ?></span>
              </div>
            </div>
            <?php endwhile;endif; ?>
          </div>          
        </div>
      </div>
    </div>
  </div>
  <div class="container space-container">
    <div class="todos-posts"> 
      <div class="row">
        <div class="col-md-8 col-sm-12">
          <?php if(have_posts()): 
              while (have_posts()):the_post(); 
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


<?php get_footer(); ?>