<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pgrr
 */

function render($content, $slug = null, $args = null) {
    get_header();
    get_template_part("template-parts/$content", $slug, $args);
    // get_sidebar();
    get_footer();
}

if (is_singular()) {
	render( 'content', 'singular');
} else if (is_archive()) {
	render( 'cards', 'default', array(
	    'title' => get_the_archive_title(),
        'subtitle' => get_the_archive_description()
    ));
} else if (is_search()) {
	render('content', 'search');
} else if (have_posts()) {
	render( 'cards', null, array(
	    'title' => 'Latest posts'
    ));
} else {
	render('content', 'none');
}

