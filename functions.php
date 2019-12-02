<?php 
//=======================    Load in our css    =======================
function alfa_styles(){
  wp_enqueue_style('style-css', get_stylesheet_directory_uri() . '/style.css');
  wp_enqueue_style('app-css', get_stylesheet_directory_uri() . '/assets/style/css/main.css', [], '', 'all');
}
add_action('wp_enqueue_scripts','alfa_styles');
//=======================  Load in our script  ========================
function alfa_scripts(){
  wp_enqueue_script( 'app-js', get_stylesheet_directory_uri() . '/assets/js/main.js', [], '', true);
}
add_action('wp_enqueue_scripts','alfa_scripts');
//======================== Add theme support ========================
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat']);
add_theme_support('html5');
add_theme_support('automatic-feed-link');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('custom-logo');
add_theme_support('customize-selective-refresh-widgets');
add_theme_support('starter-content');
//=====================  Add read more support  ======================
function alfa_read_more_link( $excerpt ){
  $extended_excerpt = $excerpt;
  $extended_excerpt .= ' <a href="' . get_permalink() . '">';
  $extended_excerpt .= ' Read more &raquo;';
  $extended_excerpt .= ' </a>';
  return $extended_excerpt;
}
add_filter('get_the_excerpt','alfa_read_more_link');
//====================  Register menu locations  =====================
register_nav_menus( [
  'main-menu'   =>    esc_html__('Main Menu', 'alfa'),

] );
//===================     Setup widget areas     =====================
function alfa_sidebar(){
  // Front page sidebar
  register_sidebar([
    'name'          =>      esc_html__('Front page sidebar', 'alfa'),
    'id'            =>      'front-page-sidebar',
    'description'   =>      esc_html__('Add widgets for front page sidebar here', 'alfa'),
    'before_widget' =>      '<section class="widget">',
    'after_widget'  =>      '</section>',
    'before_title'  =>      '<h3 class="widget-title">',
    'after_title'   =>      '</h3>'
  ]);
  // Page sidebar
  register_sidebar([
    'name'          =>      esc_html__('Page sidebar', 'alfa'),
    'id'            =>      'page-sidebar',
    'description'   =>      esc_html__('Add widgets for page sidebar here', 'alfa'),
    'before_widget' =>      '<section class="widget">',
    'after_widget'  =>      '</section>',
    'before_title'  =>      '<h3 class="widget-title">',
    'after_title'   =>      '</h3>'
  ]);
  // category sidebar
  register_sidebar([
    'name'          =>      esc_html__('Category sidebar', 'alfa'),
    'id'            =>      'category-sidebar',
    'description'   =>      esc_html__('Add widgets for category page sidebar here', 'alfa'),
    'before_widget' =>      '<section class="widget">',
    'after_widget'  =>      '</section>',
    'before_title'  =>      '<h3 class="widget-title">',
    'after_title'   =>      '</h3>'
  ]);
  // single sidebar
  register_sidebar([
    'name'          =>      esc_html__('Single sidebar', 'alfa'),
    'id'            =>      'single-sidebar',
    'description'   =>      esc_html__('Add widgets for single page sidebar here', 'alfa'),
    'before_widget' =>      '<section class="widget">',
    'after_widget'  =>      '</section>',
    'before_title'  =>      '<h3 class="widget-title">',
    'after_title'   =>      '</h3>'
  ]);
  }
  add_action('widgets_init', 'alfa_sidebar');


  function alfa_header_top_left(){
  // Header top left
  register_sidebar(array(
    'name'          =>      esc_html__('Header top left', 'alfa'),
    'id'            =>      'header_top_left',
    'class'         =>      'header-top--left',
    'description'   =>      esc_html__('Add widgets for header top left here', 'alfa'),
    'before_widget' =>      '<section class="header-top--left d-flex flex-center">',
    'after_widget'  =>      '</section>',
    'before_title'  =>      '',
    'after_title'   =>      ''
  ));
}
  add_action('widgets_init', 'alfa_header_top_left');
  function alfa_header_top_center(){
  // Header top center
  register_sidebar(array(
    'name'          =>      esc_html__('Header top center', 'alfa'),
    'id'            =>      'header_top_center',
    'class'         =>      'header-top--center',
    'description'   =>      esc_html__('Add widgets for header top center here', 'alfa'),
    'before_widget' =>      '<section class="header-top--center d-flex flex-center">',
    'after_widget'  =>      '</section>',
    'before_title'  =>      '',
    'after_title'   =>      ''
  ));
}
add_action('widgets_init', 'alfa_header_top_center');
  function alfa_header_top_right(){
  // Header top right
  register_sidebar(array(
    'name'          =>      esc_html__('Header top right', 'alfa'),
    'id'            =>      'header_top_right',
    'class'         =>      'header-top--right',
    'description'   =>      esc_html__('Add widgets for header top right here', 'alfa'),
    'before_widget' =>      '<section class="header-top--right d-flex flex-center">',
    'after_widget'  =>      '</section>',
    'before_title'  =>      '',
    'after_title'   =>      ''
  ));
}
add_action('widgets_init', 'alfa_header_top_right');
//   function alfa_header_bottom_left(){
//   // Header bottom left
//   register_sidebar(array(
//     'name'          =>      esc_html__('Header bottom left', 'alfa'),
//     'id'            =>      'header_bottom_left',
//     'class'         =>      'header-bottom--left',
//     'description'   =>      esc_html__('Add widgets for header bottom left here', 'alfa'),
//     'before_widget' =>      '<section class="header-bottom--left d-flex flex-center">',
//     'after_widget'  =>      '</section>',
//     'before_title'  =>      '',
//     'after_title'   =>      ''
//   ));
// }
// add_action('widgets_init', 'alfa_header_bottom_left');
  function alfa_header_bottom_center(){
  // Header bottom center
  register_sidebar(array(
    'name'          =>      esc_html__('Header bottom center', 'alfa'),
    'id'            =>      'header_bottom_center',
    'class'         =>      'header-bottom--center',
    'description'   =>      esc_html__('Add widgets for header bottom center here', 'alfa'),
    'before_widget' =>      '<section class="header-bottom--center d-flex flex-center">',
    'after_widget'  =>      '</section>',
    'before_title'  =>      '',
    'after_title'   =>      ''
  ));
}
  add_action('widgets_init', 'alfa_header_bottom_center');
//   function alfa_header_bottom_right(){
//   // Header bottom right
//   register_sidebar(array(
//     'name'          =>      esc_html__('Header bottom right', 'alfa'),
//     'id'            =>      'header_bottom_right',
//     'class'         =>      'header-bottom--right',
//     'description'   =>      esc_html__('Add widgets for header bottom right here', 'alfa'),
//     'before_widget' =>      '<section class="header-bottom--right d-flex flex-center">',
//     'after_widget'  =>      '</section>',
//     'before_title'  =>      '',
//     'after_title'   =>      ''
//   ));
// }
// add_action('widgets_init', 'alfa_header_bottom_right');


function alfa_footer(){
  // Footer top left
  register_sidebar([
    'name'          =>      esc_html__('Footer top left', 'alfa'),
    'id'            =>      'footer-top__left',
    'class'         =>      'footer-top__left',
    'description'   =>      esc_html__('Add widgets for footer top left here', 'alfa'),
    'before_widget' =>      '<section class="footer-top--left flex-1">',
    'after_widget'  =>      '</section>',
    'before_title'  =>      '<h5 class="widget-title">',
    'after_title'   =>      '</h5>'
  ]);
  // Footer top center
  register_sidebar([
    'name'          =>      esc_html__('Footer top center', 'alfa'),
    'id'            =>      'footer-top__center',
    'class'         =>      'footer-top__center',
    'description'   =>      esc_html__('Add widgets for footer top center here', 'alfa'),
    'before_widget' =>      '<section class="footer-top--center d-flex center space-around flex-2">',
    'after_widget'  =>      '</section>',
    'before_title'  =>      '<h5 class="widget-title">',
    'after_title'   =>      '</h5>'
  ]);
  // Footer top right
  register_sidebar([
    'name'          =>      esc_html__('Footer top right', 'alfa'),
    'id'            =>      'footer-top__right',
    'class'         =>      'footer-top__right',
    'description'   =>      esc_html__('Add widgets for footer top right here', 'alfa'),
    'before_widget' =>      '<section class="footer-top--right flex-1 align-end">',
    'after_widget'  =>      '</section>',
    'before_title'  =>      '<h5 class="widget-title">',
    'after_title'   =>      '</h5>'
  ]);
  // Footer bottom left
  register_sidebar([
    'name'          =>      esc_html__('Footer bottom left', 'alfa'),
    'id'            =>      'footer-bottom__left',
    'class'         =>      'footer-bottom--left',
    'description'   =>      esc_html__('Add widgets for footer bottom left here', 'alfa'),
    'before_widget' =>      '<section class="footer-bottom--left d-flex flex-center">',
    'after_widget'  =>      '</section>',
    'before_title'  =>      '<h5 class="widget-title">',
    'after_title'   =>      '</h5>'
  ]);
  // Footer bottom center
  // register_sidebar([
  //   'name'          =>      esc_html__('Footer bottom center', 'alfa'),
  //   'id'            =>      'footer-bottom__center',
  //   'class'         =>      'footer-bottom--center',
  //   'description'   =>      esc_html__('Add widgets for footer bottom center here', 'alfa'),
  //   'before_widget' =>      '<section class="footer-bottom--center d-flex flex-center">',
  //   'after_widget'  =>      '</section>',
  //   'before_title'  =>      '',
  //   'after_title'   =>      ''
  // ]);
  // Footer bottom right
  register_sidebar([
    'name'          =>      esc_html__('Footer bottom right', 'alfa'),
    'id'            =>      'footer-bottom__right',
    'class'         =>      'footer-bottom--right',
    'description'   =>      esc_html__('Add widgets for footer bottom right here', 'alfa'),
    'before_widget' =>      '<section class="footer-bottom--right d-flex flex-center">',
    'after_widget'  =>      '</section>',
    'before_title'  =>      '<h5 class="widget-title">',
    'after_title'   =>      '</h5>'
  ]);
  // Content bottom
  register_sidebar([
    'name'          =>      esc_html__('Content bottom', 'alfa'),
    'id'            =>      'content-bottom',
    'class'         =>      'content-bottom',
    'description'   =>      esc_html__('Add widgets for Content bottom here', 'alfa'),
    'before_widget' =>      '',
    'after_widget'  =>      '',
    'before_title'  =>      '',
    'after_title'   =>      ''
  ]);  
}
add_action('widgets_init', 'alfa_footer');