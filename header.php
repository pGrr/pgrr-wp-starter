<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until the main content
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

		<a class="skip-link screen-reader-text" href="#primary" style="font-size:0px; position:absolute;"><?php esc_html_e('Skip to content', 'pgrr'); ?></a>

		<?php	get_template_part('template-parts/navbar-primary'); ?>
