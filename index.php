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

get_header();

if (is_singular()) {
	get_template_part('template-parts/content', 'singular');
} else if (is_archive()) {
	get_template_part('template-parts/content', 'archive');
} else if (is_search()) {
	get_template_part('template-parts/content', 'search');
} else if (have_posts()) {
	get_template_part('template-parts/content', 'posts');
} else {
	get_template_part('template-parts/content', 'none');
}

get_sidebar();
get_footer();
