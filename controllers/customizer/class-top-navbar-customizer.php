<?php
namespace pgrr;

class TopNavbarCustomizer
{
  static function addAll($wp_customize)
  {
    self::addSection($wp_customize);
    self::addBgColorSection($wp_customize);
    self::addBgType($wp_customize);
    self::addShadow($wp_customize);
  }

  static function addSection($wp_customize)
  {
    $wp_customize->add_section('nav', array(
      'title' => __('Top navbar'),
      'panel' => 'pgrr_options', 
      'priority' => 33,
      'capability' => 'edit_theme_options',
      'theme_supports' => '', // Rarely needed.
    ));
  }

  static function addBgType($wp_customize)
  {
    $wp_customize->add_setting('nav_bg_type', array(
      'default'   => 'navbar-dark',
      'transport' => 'refresh',
    ));
    $wp_customize->add_control(
      new \WP_Customize_Control(
        $wp_customize,
        'nav_bg_type',
        array(
          'label'          => __('Main navigation color type', 'pgrr'),
          'section'        => 'nav',
          'settings'       => 'nav_bg_type',
          'type'           => 'select',
          'choices'        => array(
            'navbar-dark'   => __('Dark'),
            'navbar-light'   => __('Light'),
          )
        )
      )
    );
  }

  static function addBgColorSection($wp_customize)
  {
    $wp_customize->add_setting('nav_bg', array(
      'default'   => 'bg-primary',
      'transport' => 'refresh',
    ));
    $wp_customize->add_control(
      new \WP_Customize_Control(
        $wp_customize,
        'nav_bg',
        array(
          'label'          => __('Main navigation background color', 'pgrr'),
          'section'        => 'nav',
          'settings'       => 'nav_bg',
          'type'           => 'select',
          'choices'        => array(
            'bg-primary'   => __('Primary'),
            'bg-secondary'   => __('Secondary'),
            'bg-info'   => __('Info'),
            'bg-warning'   => __('Warning'),
            'bg-success'   => __('Success'),
            'bg-light'  => __('Light'),
            'bg-dark'   => __('Dark'),
            'bg-white'   => __('White'),
            'bg-black'   => __('Black'),
            'bg-transparent'   => __('Transparent'),
          )
        )
      )
    );
  }

  static function addShadow($wp_customize)
  {
    $wp_customize->add_setting('nav_shadow', array(
      'default'   => 'shadow',
      'transport' => 'refresh',
    ));
    $wp_customize->add_control(
      new \WP_Customize_Control(
        $wp_customize,
        'nav_shadow',
        array(
          'label'          => __('Shadow', 'pgrr'),
          'section'        => 'nav',
          'settings'       => 'nav_shadow',
          'type'           => 'select',
          'choices'        => array(
            'shadow'   => __('Shadow'),
            ''   => __('None'),
          )
        )
      )
    );
  }

}
