<?php
  //Front Page
  get_header();
  include(locate_template("template-parts/navigation/socials-bar.php"));
  include(locate_template("template-parts/navigation/email-bar.php"));
  include(locate_template("template-parts/hero.php"));
  include(locate_template("template-parts/about.php"));
  include(locate_template("template-parts/projects/projects-callout.php"));
  get_footer();
?>
