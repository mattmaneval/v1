<?php
  $resumeLoop = new WP_Query(array(
    'post_type' => 'resume',
    'posts_per_page' => 1,
  ));

  while($resumeLoop -> have_posts()) {
    $resumeLoop -> the_post();
    include(locate_template("template-parts/resume/resume-cta.php"));
  }
?>
