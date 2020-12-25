<?php
  $image = get_template_directory_uri() . "/assets/images/v1-meta.png";
  $favicon_path = get_template_directory_uri() . "/favicon.png";
?>

<!-- Primary Meta Tags -->
<title>Freelance Web Developer based in Toledo, Ohio.</title>
<meta name="title" content="Freelance Web Developer based in Toledo, Ohio.">
<meta name="description" content="Hi there, my name is Matt. I'm a freelance web developer in Toledo, Ohio. I specialize in creating pixel-perfect and performant websites.">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $favicon_path; ?>">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo home_url(); ?>">
<meta property="og:title" content="Freelance Web Developer based in Toledo, Ohio.">
<meta property="og:description" content="Hi there, my name is Matt. I'm a freelance web developer in Toledo, Ohio. I specialize in creating pixel-perfect and performant websites.">
<meta property="og:image" content="<?php echo $image; ?>">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="<?php echo home_url(); ?>">
<meta property="twitter:title" content="Freelance Web Developer based in Toledo, Ohio.">
<meta property="twitter:description" content="Hi there, my name is Matt. I'm a freelance web developer in Toledo, Ohio. I specialize in creating pixel-perfect and performant websites.">
<meta property="twitter:image" content="<?php echo $image; ?>">
