<?php

/**
 * pgrr Theme Customizer
 *
 * @package pgrr
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function pgrr_customize_register($wp_customize)
{
	$wp_customize->get_setting('blogname')->transport         = 'postMessage';
	$wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
	$wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

	if (isset($wp_customize->selective_refresh)) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'pgrr_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'pgrr_customize_partial_blogdescription',
			)
		);

        $wp_customize->add_section( 'pgrr_front_page_slider' , array(
            'title'      => __( 'Front page hero slider', 'pgrr' ),
            'priority'   => 30,
        ) );

        $wp_customize->add_setting( "pgrr_slider" , array(
            'default'   => false,
            'transport' => 'refresh',
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, "pgrr-slider", array(
            'label'      => __( "Display slider in homepage?", 'pgrr' ),
            'section'    => 'pgrr_front_page_slider',
            'settings'   => "pgrr_slider",
            'type' => 'checkbox',
        ) ) );

        foreach ([1, 2, 3, 4, 5] as $n ) {
            $wp_customize->add_setting( "pgrr_slider_image_$n" , array(
                'default'   => null,
                'transport' => 'refresh',
            ) );
            $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, "image$n", array(
                'label'      => __( "Image $n", 'pgrr' ),
                'section'    => 'pgrr_front_page_slider',
                'settings'   => "pgrr_slider_image_$n",
            ) ) );
            $wp_customize->add_setting( "pgrr_slider_title_$n" , array(
                'default'   => null,
                'transport' => 'refresh',
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, "title$n", array(
                'label'      => __( "Title $n", 'pgrr' ),
                'section'    => 'pgrr_front_page_slider',
                'settings'   => "pgrr_slider_title_$n",
            ) ) );
            $wp_customize->add_setting( "pgrr_slider_subtitle_$n" , array(
                'default'   => null,
                'transport' => 'refresh',
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, "subtitle$n", array(
                'label'      => __( "Subtitle $n", 'pgrr' ),
                'section'    => 'pgrr_front_page_slider',
                'settings'   => "pgrr_slider_subtitle_$n",
            ) ) );
            $wp_customize->add_setting( "pgrr_slider_action_text_$n" , array(
                'default'   => null,
                'transport' => 'refresh',
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, "action_text$n", array(
                'label'      => __( "Action text $n", 'pgrr' ),
                'section'    => 'pgrr_front_page_slider',
                'settings'   => "pgrr_slider_action_text_$n",
            ) ) );
            $wp_customize->add_setting( "pgrr_slider_action_url_$n" , array(
                'default'   => null,
                'transport' => 'refresh',
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, "action_url$n", array(
                'label'      => __( "Action url $n", 'pgrr' ),
                'section'    => 'pgrr_front_page_slider',
                'settings'   => "pgrr_slider_action_url_$n",
            ) ) );
        }


	}
}
add_action('customize_register', 'pgrr_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function pgrr_customize_partial_blogname()
{
	bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function pgrr_customize_partial_blogdescription()
{
	bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function pgrr_customize_preview_js()
{
	wp_enqueue_script('pgrr-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), _S_VERSION, true);
}
add_action('customize_preview_init', 'pgrr_customize_preview_js');
