<?php
  $file = get_field('resume_pdf');
  $filedir = wp_get_attachment_url( $file );
?>

<a class="resume-cta" href="<?php echo esc_html($filedir) ?>" title="View my resume." target="_blank">
  <span>Resume</span>
  <svg><use xlink:href="#chevron-right" /></svg>
</a>
