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
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body id="body" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#primary" style="font-size:0px; position:absolute;">
    <?php esc_html_e('Skip to content', 'pgrr'); ?>
</a>
<?php get_template_part('template-parts/navbar'); ?>
<main id="primary" class="site-main">
    <?php get_template_part('template-parts/particlesbg-bubbles'); ?>
    <?php get_template_part('template-parts/carousel'); ?>


