<?php

namespace pgrr;

require_once get_stylesheet_directory() . '/controllers/customizer/class-top-navbar-customizer.php';

class PgrrCustomizer 
{
  static function addAll($wp_customize)
  {
    self::addPanel($wp_customize);
    TopNavbarCustomizer::addAll($wp_customize);
  }

  static function addPanel($wp_customize) {
    $wp_customize->add_panel( 'pgrr_options', array(
      'title' => __( 'Pgrr theme options' ),
      'priority' => 999, // bottom
    ) );
  }
}