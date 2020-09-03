<?php

/**
 * Template part for rendering the primary navbar.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pgrr
 */

?>

<!-- Navbar -->
<header id="masthead" class="site-header navbar-static-top <?= get_theme_mod('nav_bg_type') ?> <?= get_theme_mod('nav_bg') ?> <?= get_theme_mod('nav_shadow') ?>">
  <nav class="navbar navbar-expand-lg">

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