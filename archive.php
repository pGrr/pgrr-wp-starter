<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pgrr
 */

get_header();
?>

<main id="primary" class="site-main container">
	<?php if (have_posts()) : ?>
		<header class="page-header text-center mt-5">
			<?php
			the_archive_title('<h1 class="page-title">', '</h1>');
			the_archive_description('<p class="archive-description">', '</p>');
			?>
		</header><!-- .page-header -->
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
