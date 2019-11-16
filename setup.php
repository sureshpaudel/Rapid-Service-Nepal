<?php

function rapid_setup_theme(){
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
  add_image_size('blog',770,394,true);
  add_image_size('news',370,260,true);
  add_image_size('about',540,350,true);
  add_image_size('gallery',390,260,true);
  add_image_size('zoom',1800,1200,true);
}
add_action('after_setup_theme', 'rapid_setup_theme');
 ?>
