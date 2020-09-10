<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pgrr
 */

get_header();
if (have_posts()) {
    get_template_part('template-parts/cards', 'default', array(
        'title' => get_the_archive_title(),
        'subtitle' => get_the_archive_description(),
    ));
} else {
    get_template_part('template-parts/content', 'none');
}
//get_sidebar();
get_footer();
