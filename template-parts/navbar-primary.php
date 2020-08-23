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
<header id="masthead" class="site-header navbar-static-top bg-primary">
  <nav class="navbar navbar-expand-md" role="navigation">

    <!-- Brand -->
    <div class="navbar-brand d-flex flex-row">

      <!-- Toggler button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button><!-- Toggler button -->

      <?php if (has_custom_logo()) : ?>
        <!-- Logo -->
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <?php the_custom_logo() ?>
        </a><!-- Logo -->
      <?php endif; ?>

      <?php if (get_bloginfo('name') || get_bloginfo('description')) : ?>
      <!-- Site title and description -->
      <div class="d-flex flex-column justify-content-center mx-3">
        
        <?php if (get_bloginfo('name') || is_customize_preview()) : ?>
          <!-- Site title -->
          <a class="site-title" href="<?= esc_url(home_url('/')); ?>">
            <?= esc_html__(bloginfo('name'), 'pgrr'); ?>
          </a><!-- Site title -->
        <?php endif; ?>

        <?php if (get_bloginfo('description') || is_customize_preview()) : ?>
          <!-- Site description -->
          <a class="site-description small" href="<?= esc_url(home_url('/')); ?>">
            <?= esc_html__(get_bloginfo('description'), 'pgrr') ?>
          </a><!-- Site description -->
        <?php endif; ?>

      </div><!-- Site title and description -->
      <?php endif; ?>

    </div><!-- Brand -->

    <?php
    wp_nav_menu(array(
      'walker'            => new WP_Bootstrap_Navwalker(),
      'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
      'theme_location'    => 'primary',
      'container'         => 'div',
      'container_id'      => 'main-nav',
      'container_class'   => 'collapse navbar-collapse justify-content-end',
      'menu_class'        => 'nav navbar-nav',
      'depth'             => 3,
    ));
    ?>

  </nav>
</header><!-- Navbar -->
