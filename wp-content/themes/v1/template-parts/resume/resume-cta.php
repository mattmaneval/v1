<?php
  $file = get_field('resume_pdf');
  $filedir = wp_get_attachment_url( $file );
?>

<a class="resume-link" href="<?php echo esc_html($filedir) ?>" title="View my resume." target="_blank">
  <span class="resume-cta">
    <span>resume</span>
  </span>
</a>
