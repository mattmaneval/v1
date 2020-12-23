<!doctype html>
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php include( get_template_directory() . '/template-parts/head-meta.php'); ?>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php
			get_template_part('template-parts/svg-sprite');
			get_template_part('template-parts/header');
		?>
