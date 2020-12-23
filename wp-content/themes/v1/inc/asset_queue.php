<?php

  function enqueue_scripts() {

    // Theme Stylesheet
    wp_enqueue_style( 'styles', get_stylesheet_uri(), "", '1.0.0', 'all' );

    // jQuery
      wp_deregister_script('jquery');
      wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true);

    // Theme Scripts
    wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/assets/js/build.js', "", '1.0.0', true );
  }

  add_action('wp_enqueue_scripts', 'enqueue_scripts');
?>
