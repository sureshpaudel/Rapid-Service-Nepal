<?php
  function rapid_styles(){
      wp_register_style('custom_css', get_template_directory_uri(). '/style.css');
      wp_register_style('bundle_css', get_template_directory_uri(). '/css/vendor.bundle.css');
      wp_register_style('style_css', get_template_directory_uri(). '/css/style.css');

      wp_enqueue_style('custom_css');
      wp_enqueue_style('bundle_css');
      wp_enqueue_style('style_css');

      wp_register_script('bundle_js',get_template_directory_uri().'/js/jquery.bundle.js', array('jquery'),false, true);
      wp_register_script('jquerymin_js',get_template_directory_uri().'/js/script.js', array('jquery'),false, true);


      wp_enqueue_script('jquery');
      wp_enqueue_script('bundle_js');
      wp_enqueue_script('jquerymin_js');

}
add_action('wp_enqueue_scripts','rapid_styles');
?>
