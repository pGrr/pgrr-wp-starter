<?php

namespace pgrr;

use urbanfabrica\view\Footer;

require_once get_stylesheet_directory() . '/controllers/customizer/class-top-navbar-customizer.php';
require_once get_stylesheet_directory() . '/controllers/customizer/class-footer-customizer.php';


class PgrrCustomizer 
{
  static function addAll($wp_customize)
  {
    self::addPanel($wp_customize);
    TopNavbarCustomizer::addAll($wp_customize);
    FooterCustomizer::addAll($wp_customize);
  }

  static function addPanel($wp_customize) {
    $wp_customize->add_panel( 'pgrr_options', array(
      'title' => __( 'Pgrr theme options', 'pgrr'),
      'priority' => 999, // bottom
    ) );
  }
}