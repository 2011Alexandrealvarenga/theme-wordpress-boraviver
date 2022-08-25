<?php 
//lista de posts relacionado ao autor
function wpb_related_author_posts($content) {
 
if ( is_single() ) { 
    global $authordata, $post;
     
    $content .= '<h4>Artigos relacionados ao autor:</h4> ';
  
    $authors_posts = get_posts( array( 'author' => $authordata->ID, 'post__not_in' => array( $post->ID ), 'posts_per_page' => 5 ) );
  
    $content .= '<ul>';
    foreach ( $authors_posts as $authors_post ) {
        $content .= '<li><a href="' . get_permalink( $authors_post->ID ) . '">' . apply_filters( 'the_title', $authors_post->post_title, $authors_post->ID ) . '</a></li>';
    }
    $content .= '</ul>';
  
    return $content;
    } 
    else { 
    return $content; 
    }
}
 
add_filter('the_content','wpb_related_author_posts');





//add title
add_theme_support('tittle-tag');

function load_scripts(){
wp_enqueue_style('bootstrap', get_template_directory_uri() . '../assets/css/bootstrap.min.css', array(), '1.0', 'all');
wp_enqueue_style('fontello', get_template_directory_uri() . '../assets/css/fontello.css', array(), '1.0', 'all');
wp_enqueue_style('style', get_template_directory_uri() . '../assets/css/style.css', array(),'1.0', 'all' );
wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array( 'jquery' ), '4.0.0', true );
wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'',true );
}
//chama a função load_scripts
add_action( 'wp_enqueue_scripts', 'load_scripts' );

// REGISTRA O CUSTOM NAVIGATION WALKER
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// REGISTRAR OS MENUS
register_nav_menus( array(
  'principal'=>__('Menu Principal','thema')
));

//sidebar busca
register_sidebar(
  array(
    'name' => 'Busca',
    'id' => 'busca',
    'before_widget' => '<div class="blog-search">',
    'after_widget' => '</div>',
    'before_title' => '<h5>',
    'after_title' => '</h5>',
  )
);
//sidebar sidebar
register_sidebar(
  array(
    'name' => 'sidebar',
    'id' => 'sidebar-id',
    'before_widget' => '<div class="card m-3">',
    'after_widget' => '</div>',
    'before_title' => '<h5 class="card-header">',
    'after_title' => '</h5>',
  )
);

// Registrando Sidebars
add_action( 'widgets_init', 'wpcurso_sidebars' );
function wpcurso_sidebars(){
  register_sidebar(
    array(//NAME - aparece na area de adm
      'name' => __( 'Home Page Sidebar', 'wpcurso' ),
      'id' => 'sidebar-1',
      'description' => __( 'Sidebar to be used on Home Page', 'wpcurso'),
      'before_widget' => '<div class="widget-wrapper">',
      'after_widget' => '</div>',
      'before_title' => '<h5 class="widget-title">',
      'after_title' => '</h5>'
    
    )
  );
    register_sidebar(
    array(//NAME - aparece na area de adm
      'name' => __( 'header', 'wpcurso' ),
      'id' => 'sidebar-header',
      'description' => __( 'Sidebar to be used on Home Page', 'wpcurso'),
      'before_widget' => '<div class="widget-wrapper">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>'
    )
  );

          
}


//imagem destacada
add_theme_support( 'post-thumbnails' );


//LIMITA O TAMANHO DO TEXTO NO POST PAGINA DE RESUMO
ADD_FILTER('excerpt_length',function($lenght){
  return 25;
})



 ?>