<?php 

// inclusion dinamica css y js

function add_css_js() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
   
    wp_enqueue_style( 'slider', get_template_directory_uri() . '/style.css', array(), '1.1', 'all');
   
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/index.js', array ( 'jquery' ), 1.1, true);
   
      if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
      }
  }
  add_action( 'wp_enqueue_scripts', 'add_css_js' );

//menu
if(function_exists('register_nav_menus')){
    register_nav_menus(array(
        'superior' => 'Menu princiapl superior'
    ));
}

//clase enalces menu

add_filter('nav_menu_link_attributes', 'clase_inventada', 10, 3);
function clase_inventada ($atts, $item, $args){
$class = 'header_nav_li';
$atts['class'] = 'header_nav_li';
return $atts;

};


?>