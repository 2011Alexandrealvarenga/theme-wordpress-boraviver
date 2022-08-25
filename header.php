<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta <?php bloginfo('charset'); ?>>

  <?php wp_head(); ?>

</head>
<body>
  <head>
    <div class="container-fluid p-0 m-0 fixed-top">
      <div class="row">
        <div class="col">
          <nav class="navbar navbar-expand-lg navbar-dark bg-primary "  role="navigation">
            <div class="container">

              <a class="navbar-brand" href="#" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">MENU</a>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>

                  <?php
                  wp_nav_menu( array(
                      'theme_location'    => 'principal',
                      'depth'             => 2,
                      'container'         => 'div',
                      'container_class'   => 'collapse navbar-collapse',
                      'container_id'      => 'bs-example-navbar-collapse-1',
                      'menu_class'        => 'nav navbar-nav collapse navbar-collapse d-flex flex-wrap justify-content-between',
                      'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                      'walker'            => new WP_Bootstrap_Navwalker(),
                  )  );
                  ?>
                   <form class="form-inline my-2 my-lg-0">
                    <?php dynamic_sidebar('Busca'); ?>
                  </form>
               </div>
               
               
          </nav>

        </div>
      </div>
    </div>
   
    <main>
      <div class="container px-0">
        <div class="row">
          <div class="col">
            <div class="image-top">
              <div class="title">
                <h2><?php get_sidebar('header'); ?></h2>
              </div>
            </div>
          </div>
        </div>
      </div>  
    </main>
  </head>
