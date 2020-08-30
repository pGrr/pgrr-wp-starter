<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package pgrr
 */

get_header();
?>

<main id="primary" class="site-main container">

	<?php if (have_posts()) : ?>
		<header class="text-center mt-5">
			<h1 class="page-title">
				<?php
				printf(esc_html__('Search Results for: %s', 'pgrr'), '<span>' . get_search_query() . '</span>');
				?>
			</h1>
		</header>
		<?php get_template_part('template-parts/cards', 'masonry'); ?>
		<footer class="text-center mb-5 col-12">
			<?php the_posts_navigation() ?>
		</footer>
	<?php
	else :
		get_template_part('template-parts/content', 'none');
	endif;
	?>
</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
