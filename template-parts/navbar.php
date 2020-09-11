<?php

/**
 * Template part for rendering the primary navbar.
 * @package pgrr
 */

// default arguments
$defaultArgs = array(
    'bg-type' => 'navbar-dark',
    'bg' => 'bg-primary',
    'shadow' => 'shadow',
    'position' => 'navbar-static-top',
    'title-font-class' => 'sans-serif',
    'description-font-class' => 'sans-serif',
    'menu-font-class' => 'sans-serif',
);
// if arguments are provided merge them with the default ones
$args = isset($args) ? array_merge($defaultArgs, $args) : $defaultArgs;
?>

<!-- Navbar -->
<header id="masthead" class="site-header reveal">
    <nav class="navbar navbar-expand-lg <?php $args['position'] ?> <?= $args['bg-type'] ?> <?= $args['bg'] ?> <?= $args['shadow'] ?>">
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
                        <a class="site-title <?= $args['title-font-class'] ?> unlink" href="<?= esc_url(home_url('/')); ?>">
                            <?= esc_html__(bloginfo('name'), 'pgrr'); ?>
                        </a><!-- Site title -->
                    <?php endif; ?>
                    <?php if (get_bloginfo('description') || is_customize_preview()) : ?>
                        <!-- Site description -->
                        <a class="site-description <?= $args['description-font-class'] ?> unlink small d-none d-sm-inline" href="<?= esc_url(home_url('/')); ?>">
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
            'menu_class'        => 'nav navbar-nav ' . $args['menu-font-class'],
            'depth'             => 3,
        ));
        ?>
    </nav>
</header><!-- Navbar -->