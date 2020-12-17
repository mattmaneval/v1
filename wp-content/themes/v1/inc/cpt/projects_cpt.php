<?php

  // Projects
  function register_cpt_projects() {
    $labels = array(
      'name' => __( 'Projects', 'projects' ),
      'singular_name' => __( 'Project', 'projects' ),
      'add_new' => __( 'Add New Project', 'projects' ),
      'add_new_item' => __( 'Add New Project', 'projects' ),
      'edit_item' => __( 'Edit Project', 'projects' ),
      'new_item' => __( 'New Project', 'projects' ),
      'view_item' => __( 'View Project', 'projects' ),
      'search_items' => __( 'Search Projects', 'projects' ),
      'not_found' => __( 'No projects found', 'projects' ),
      'not_found_in_trash' => __( 'No projects found in Trash', 'projects' ),
      'parent_item_colon' => __( 'Parent Team:', 'team' ),
      'menu_name' => __( 'Projects', 'projects' ),
    );

    $args = array(
      'description' => "Our team has over a century of combined experience exploring and innovating at the intersection of arts education and business technologies.",
      'labels' => $labels,
      'hierarchical' => false,
      'supports' => array( 'title', 'thumbnail', 'editor' ),
      'taxonomies'  => array( 'media_outlet', 'category' ),
      'public' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-post-status',
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

    register_post_type( 'projects', $args );
  }
  add_action( 'init', 'register_cpt_projects' );

?>
