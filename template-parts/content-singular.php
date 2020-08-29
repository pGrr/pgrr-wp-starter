<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pgrr
 */

?>

<main id="primary" class="site-main container">
	<?php while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
			<header class="entry-header col-12">
				<?php the_title('<h1 class="entry-title text-center">', '</h1>'); ?>
			</header><!-- .entry-header -->
			<?php pgrr_post_thumbnail(); ?>
			<div class="entry-content col-12">
				<?php the_content(); ?>
			</div>
		</article>
		<?php
		if (comments_open() || get_comments_number()) :
			comments_template();
		endif;
		?>
	<?php endwhile; ?>
</main>