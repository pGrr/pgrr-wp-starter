<main id="primary" class="site-main container">
	<div class="row align-items-center justify-content-center">
		<?php while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-8 p-3'); ?>>
				<header class="entry-header col-12">
					<?php
					the_title('<h1 class="entry-title text-center my-3">', '</h1>');
					?>
				</header><!-- .entry-header -->
				<?php pgrr_post_thumbnail(); ?>
				<div class="entry-content col-12 p-3 text-justify">
					<?php the_content(); ?>
				</div>
				<footer class="col-12">
					<?php
					if (comments_open() || get_comments_number()) :
						comments_template();
					endif;
					?>
				</footer>
			</article>
		<?php endwhile; ?>

	</div>
</main>