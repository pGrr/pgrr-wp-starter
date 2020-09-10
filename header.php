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
    'bg-type' => 'navbar-dark',
    'bg' => 'bg-primary',
    'shadow' => 'shadow'
);
// if arguments are provided merge them with the default ones
$args = isset($args) ? array_merge($defaultArgs, $args) : $defaultArgs;
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
<!-- Navbar -->
<header id="masthead" class="site-header">
    <nav class="navbar navbar-expand-lg navbar-static-top <?= $args['bg-type'] ?> <?= $args['bg'] ?> <?= $args['shadow'] ?>">
        <!-- Brand -->
        <div class="navbar-brand d-flex flex-row">
            <?php if (has_custom_logo()) : ?>
                <!-- Logo -->
                <?php the_custom_logo() ?>
            <?php endif; ?>
            <?php if (get_bloginfo('name') || get_bloginfo('description')) : ?>
                <!-- Site title and description -->
                <div class="d-flex flex-column justify-content-center mx-3">
                    <?php if (get_bloginfo('name') || is_customize_preview()) : ?>
                        <!-- Site title -->
                        <a class="site-title sans-serif unlink" href="<?= esc_url(home_url('/')); ?>">
                            <?= esc_html__(bloginfo('name'), 'pgrr'); ?>
                        </a><!-- Site title -->
                    <?php endif; ?>
                    <?php if (get_bloginfo('description') || is_customize_preview()) : ?>
                        <!-- Site description -->
                        <a class="site-description serif unlink small d-none d-sm-inline" href="<?= esc_url(home_url('/')); ?>">
                            <?= esc_html__(get_bloginfo('description'), 'pgrr') ?>
                        </a><!-- Site description -->
                    <?php endif; ?>
                </div><!-- Site title and description -->
            <?php endif; ?>
        </div><!-- Brand -->
        <!-- Toggler button -->
        <button id="#toggle-button" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button><!-- Toggler button -->
        <?php
        wp_nav_menu(array(
            'walker'            => new WP_Bootstrap_Navwalker(),
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'theme_location'    => 'primary',
            'container'         => 'div',
            'container_id'      => 'main-nav',
            'container_class'   => 'collapse navbar-collapse justify-content-end',
            'menu_id'           => 'menu-content',
            'menu_class'        => 'nav navbar-nav sans-serif',
            'depth'             => 3,
        ));
        ?>
    </nav>
</header><!-- Navbar -->
<main id="primary" class="site-main">
    <?php get_template_part('template-parts/particlesbg-bubbles'); ?>
    <?php get_template_part('template-parts/carousel'); ?>


