<?php 

require get_template_directory() . '/inc/customizer.php';

function otaviow_load_scripts(){
  wp_enqueue_style('otaviow_style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');

  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null);

  wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'otaviow_load_scripts');

function otaviow_config(){
  register_nav_menus(
    array(
      'otaviow_main_menu' => 'Main Menu',
      'otavios_footer_menu' => 'Footer Menu'
    )
  );

  $args = array( 
    'height' => 225,
    'width' => 1920
  );
  add_theme_support('custom-header', $args);
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo', 
    array(
      'width' => 200,
      'height' => 110,
      'flex-height' => true,
      'flex-width' => true
    )
    );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'otaviow_config', 0);

add_action('widgets_init', 'otaviow_sidebars');

function otaviow_sidebars(){
  register_sidebar(
    array(
      'name' => 'Blog Sidebar',
      'id'   => 'sidebar-blog',
      'description' => 'This is the Blog Sidebar. You can add your widgets here.',
      'before_widget' => '<div class="widget-wrapper">', 
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widget-title">', 
      'after_title' => '</h4>',

    )
  );

  register_sidebar(
    array(
      'name' => 'Service 1',
      'id'   => 'service-1',
      'description' => 'Fist service Area',
      'before_widget' => '<div class="widget-wrapper">', 
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widget-title">', 
      'after_title' => '</h4>',

    )
  );

  register_sidebar(
    array(
      'name' => 'Service 2',
      'id'   => 'service-2',
      'description' => 'Second service Area',
      'before_widget' => '<div class="widget-wrapper">', 
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widget-title">', 
      'after_title' => '</h4>',

    )
  );

  register_sidebar(
    array(
      'name' => 'Service 3',
      'id'   => 'service-3',
      'description' => 'Third service Area',
      'before_widget' => '<div class="widget-wrapper">', 
      'after_widget' => '</div>',
      'before_title' => '<h4 class="widget-title">', 
      'after_title' => '</h4>',

    )
  );

}

if ( ! function_exists( 'wp_body_open' ) ){
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
};
