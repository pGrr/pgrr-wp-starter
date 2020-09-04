<?php
namespace pgrr;

class FooterCustomizer
{
  static function addAll($wp_customize)
  {
    self::addSection($wp_customize);
    self::addBgColorSection($wp_customize);
    self::addTextColor($wp_customize);
    self::addShadow($wp_customize);
    self::addCreditsBgColorSection($wp_customize);
    self::addCreditsTextColor($wp_customize);
  }

  static function addSection($wp_customize)
  {
    $wp_customize->add_section('footer', array(
      'title' => __('Footer', 'pgrr'),
      'panel' => 'pgrr_options', 
      'priority' => 33,
      'capability' => 'edit_theme_options',
      'theme_supports' => '', // Rarely needed.
    ));
  }

  static function addTextColor($wp_customize)
  {
    $wp_customize->add_setting('footer_text_color', array(
      'default'   => 'text-light',
      'transport' => 'refresh',
    ));
    $wp_customize->add_control(
      new \WP_Customize_Control(
        $wp_customize,
        'footer_text_color',
        array(
          'label'          => __('Footer text color', 'pgrr'),
          'section'        => 'footer',
          'settings'       => 'footer_text_color',
          'type'           => 'select',
          'choices'        => array(
            'text-light'   => __('Light', 'pgrr'),
            'navbar-dark'   => __('Dark', 'pgrr'),
            'text-white' => __('White', 'pgrr'),
            'text-muted' => __('Muted', 'pgrr'),
            'text-primary' => __('Primary', 'pgrr'),
            'text-secondary' => __('Secondary', 'pgrr'),
            'text-success' => __('Success', 'pgrr'),
            'text-danger' => __('Danger', 'pgrr'),
            'text-warning' => __('Warning', 'pgrr'),
            'text-info' => __('Info', 'pgrr'),
            'text-light' => __('Light', 'pgrr'),
          )
        )
      )
    );
  }

  static function addBgColorSection($wp_customize)
  {
    $wp_customize->add_setting('footer_bg', array(
      'default'   => 'bg-primary',
      'transport' => 'refresh',
    ));
    $wp_customize->add_control(
      new \WP_Customize_Control(
        $wp_customize,
        'footer_bg',
        array(
          'label'          => __('Footer background color', 'pgrr'),
          'section'        => 'footer',
          'settings'       => 'footer_bg',
          'type'           => 'select',
          'choices'        => array(
            'bg-primary'   => __('Primary', 'pgrr'),
            'bg-secondary'   => __('Secondary', 'pgrr'),
            'bg-info'   => __('Info', 'pgrr'),
            'bg-warning'   => __('Warning', 'pgrr'),
            'bg-success'   => __('Success', 'pgrr'),
            'bg-light'  => __('Light', 'pgrr'),
            'bg-dark'   => __('Dark', 'pgrr'),
            'bg-white'   => __('White', 'pgrr'),
            'bg-transparent'   => __('Transparent', 'pgrr'),
          )
        )
      )
    );
  }

  static function addShadow($wp_customize)
  {
    $wp_customize->add_setting('footer_shadow', array(
      'default'   => 'shadow',
      'transport' => 'refresh',
    ));
    $wp_customize->add_control(
      new \WP_Customize_Control(
        $wp_customize,
        'footer_shadow',
        array(
          'label'          => __('Shadow', 'pgrr'),
          'section'        => 'footer',
          'settings'       => 'footer_shadow',
          'type'           => 'select',
          'choices'        => array(
            'shadow'   => __('Shadow', 'pgrr'),
            ''   => __('None', 'pgrr'),
          )
        )
      )
    );
  }

  static function addCreditsBgColorSection($wp_customize)
  {
    $wp_customize->add_setting('footer_credits_bg', array(
      'default'   => 'bg-primary',
      'transport' => 'refresh',
    ));
    $wp_customize->add_control(
      new \WP_Customize_Control(
        $wp_customize,
        'footer_credits_bg',
        array(
          'label'          => __('Footer credits background color', 'pgrr'),
          'section'        => 'footer',
          'settings'       => 'footer_credits_bg',
          'type'           => 'select',
          'choices'        => array(
            'bg-primary'   => __('Primary', 'pgrr'),
            'bg-secondary'   => __('Secondary', 'pgrr'),
            'bg-info'   => __('Info', 'pgrr'),
            'bg-warning'   => __('Warning', 'pgrr'),
            'bg-success'   => __('Success', 'pgrr'),
            'bg-light'  => __('Light', 'pgrr'),
            'bg-dark'   => __('Dark', 'pgrr'),
            'bg-white'   => __('White', 'pgrr'),
            'bg-transparent'   => __('Transparent', 'pgrr'),
          )
        )
      )
    );
  }

  static function addCreditsTextColor($wp_customize)
  {
    $wp_customize->add_setting('footer_credits_text_color', array(
      'default'   => 'text-light',
      'transport' => 'refresh',
    ));
    $wp_customize->add_control(
      new \WP_Customize_Control(
        $wp_customize,
        'footer_credits_text_color',
        array(
          'label'          => __('Footer credits text color', 'pgrr'),
          'section'        => 'footer',
          'settings'       => 'footer_credits_text_color',
          'type'           => 'select',
          'choices'        => array(
            'text-light'   => __('Light'),
            'navbar-dark'   => __('Dark'),
            'text-white' => __('White'),
            'text-muted' => __('Muted'),
            'text-primary' => __('Primary'),
            'text-secondary' => __('Secondary'),
            'text-success' => __('Success'),
            'text-danger' => __('Danger'),
            'text-warning' => __('Warning'),
            'text-info' => __('Info'),
            'text-light' => __('Light'),
          )
        )
      )
    );
  }


}
