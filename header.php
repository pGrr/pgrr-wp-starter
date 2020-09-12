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

// default arguments
$defaultArgs = array(
        'navbar' => array(
            'bg-type' => 'navbar-dark',
            'bg' => 'bg-primary',
            'shadow' => 'shadow',
            'position' => 'navbar-static-top',
            'title-font-class' => 'sans-serif',
            'description-font-class' => 'sans-serif',
            'menu-font-class' => 'sans-serif',
        ),
    'bubbles-body-background' => false,
);

// theme arguments
$skinArgs = isset($GLOBALS['skin']['header']) ? $GLOBALS['skin']['header'] : array();

// template arguments (passed at runtime)
$args = isset($args) ? $args : array();

// merge arguments with priority: 1) args, 2) skinArgs, 3) defaultArgs
$args = array_merge($defaultArgs, $skinArgs, $args);
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
<body id="body" <?php body_class('my-0 reveal d-none'); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#primary" style="font-size:0px; position:absolute;">
    <?php esc_html_e('Skip to content', 'pgrr'); ?>
</a>
<?php get_template_part('template-parts/navbar', null, $args['navbar']); ?>
<main id="primary" class="site-main">
    <?php get_template_part('template-parts/particlesbg-bubbles'); ?>

