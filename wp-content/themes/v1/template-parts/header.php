<header>
  <div class="wrap">
    <div class="logo">
      <a href="<?php echo get_home_url(); ?>" title="<?php echo get_bloginfo(); ?>">
        <!-- <img src="<?php echo get_template_directory_uri() ?>/assets/images/v1-wordmark.png" alt="Matt Maneval wordmark."> -->
        <svg><use xlink:href="#logo" /></svg>
      </a>
    </div>
    <?php include(locate_template("template-parts/navigation/menu-button.php")); ?>
    <?php include(locate_template("template-parts/navigation/mobile-menu.php")); ?>
  </div>
</header>
