<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?></title>

	<?php wp_head(); ?>
</head>


<?php
$slug = get_post_field('post_name', get_post());
?>



<body <?php body_class($slug); ?>>
	<header class="header">
		<div class="logo-container">
			<?php echo get_custom_logo() ?>
		</div>

		<div class="header__container">
			<?php get_template_part("partials/frontend", "navbar-main") ?>
			

			<a href="<?php echo site_url(); ?>/contact" class="button primary contact-button">
				<span>
					Get in touch
				</span>
			</a>


		</div>
	</header>
	<main>