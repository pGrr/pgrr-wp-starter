<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package pgrr
 */

get_header();
?>

<main id="primary" class="container my-5">
	<div class="row justify-content-center align-items-center">
		<section id="404-message" class="col my-5">
			<header class="page-header">
				<h1 class="text-center"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'pgrr'); ?></h1>
			</header><!-- .page-header -->
			<div class="mx-auto text-center">
				<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'pgrr'); ?></p>
				<?php get_search_form(); ?>
			</div>
		</section>
	</div>
</main>

<?php
get_footer();
