<?php

  function enqueue_scripts() {

    // Theme Stylesheet
    wp_enqueue_style( 'styles', get_stylesheet_uri(), "", '1.0.0', 'all' );

    // Theme Scripts
    wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/assets/js/build.js', "", '1.0.0', true );
  }

  add_action('wp_enqueue_scripts', 'enqueue_scripts');
?>
