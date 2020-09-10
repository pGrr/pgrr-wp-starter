<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package pgrr
 */

get_header();
if (have_posts()) {
    get_template_part('template-parts/content', 'loop', array(
            'title' => sprintf(esc_html__('Search Results for: %s', 'pgrr'), get_search_query()),
    ));
} else {
    get_template_part('template-parts/content', 'none');
}
//get_sidebar();
get_footer();
