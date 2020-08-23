<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pgrr
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php get_template_part('template-parts/head'); ?>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<div id="page" class="site">

		<a class="skip-link screen-reader-text" href="#primary" aria-hidden="true"><?php esc_html_e('Skip to content', 'pgrr'); ?></a>

		<?php
		if (
			!is_page_template('blank-page.php')
			&& !is_page_template('blank-page-with-container.php')
		)
			get_template_part('template-parts/navbar-primary');
		?>

		<div id="content" class="site-content">
