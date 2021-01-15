<?php

  // Resume
  function register_cpt_resume() {
    $labels = array(
      'name' => __( 'Resume', 'resume' ),
      'singular_name' => __( 'Resume', 'resume' ),
      'add_new' => __( 'Add New Resume', 'resume' ),
      'add_new_item' => __( 'Add New Resume', 'resume' ),
      'edit_item' => __( 'Edit Resume', 'resume' ),
      'new_item' => __( 'New Resume', 'resume' ),
      'view_item' => __( 'View Resume', 'resume' ),
      'search_items' => __( 'Search Resume', 'resume' ),
      'not_found' => __( 'No resume found', 'resume' ),
      'not_found_in_trash' => __( 'No resume found in Trash', 'resume' ),
      'parent_item_colon' => __( 'Parent Team:', 'team' ),
      'menu_name' => __( 'Resume', 'resume' ),
    );

    $args = array(
      // 'description' => "Our team has over a century of combined experience exploring and innovating at the intersection of arts education and business technologies.",
      'labels' => $labels,
      'hierarchical' => false,
      'supports' => array( 'title', 'thumbnail', 'editor' ),
      'taxonomies'  => array( 'media_outlet', 'category' ),
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-media-document',
      'show_in_nav_menus' => false,
      'show_in_rest' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => true,
      'has_archive' => true,
      'query_var' => true,
      'can_export' => true,
      'rewrite' => true,
      'capability_type' => 'post'
    );

    register_post_type( 'resume', $args );
  }
  add_action( 'init', 'register_cpt_resume' );

?>
