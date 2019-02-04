<?php

  add_theme_support('post-thumbnails');

  set_post_thumbnail_size( $width, $height, $crop );

  require_once('wp-bootstrap-navwalker.php');

  // theme support
  function wpb_theme_setup(){
	 // Nave menus
	 register_nav_menus(array(
	 'primary' => __('Primary Menu')
	 ));
  }
  add_action('after_setup_theme','wpb_theme_setup');


?>
