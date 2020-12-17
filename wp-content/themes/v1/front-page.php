<?php
  //Front Page
  get_header();
  include(locate_template("template-parts/hero.php"));
  include(locate_template("template-parts/about.php"));
  include(locate_template("template-parts/projects/projects-callout.php"));
  include(locate_template("template-parts/contact.php"));
  get_footer();
?>
