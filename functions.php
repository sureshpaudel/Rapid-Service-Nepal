<?php
include(get_template_directory(). '/includes/front/enqueue.php');
include(get_template_directory(). '/includes/front/setup.php');
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
function rapid_widgets(){
    register_sidebar(array(
        'name' => 'Blog Sidebar',
        'id' => 'blog_sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'rapid_widgets');
?>
