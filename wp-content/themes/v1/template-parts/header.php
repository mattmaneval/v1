<div class="header">
  <div class="big-wrap">
    <div class="wordmark">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/v1-wordmark.png" alt="">
    </div>
    <a class="cta" href="#contact" title="Get in touch">
      <?php
        $arrow_cta_text ="get in touch";
        include(locate_template("template-parts/navigation/arrow-cta.php"));
        unset($arrow_cta_text);
      ?>
    </a>
  </div>
</div>
