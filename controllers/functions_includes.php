<?php 

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

/**
 * Register footer widget areas
 */
foreach (['start', 'middle', 'end'] as $pos) {
	register_sidebar( array(
		'id'          => 'footer-' . $pos,
		'name'        => 'Footer ' . $pos,
		'description' => __( 'Footer ' . $pos . ' widgets', 'pgrr' ),
		'before_widget' => '<div class="p-3">',
		'after_widget' => '</div>',
	) );
}

