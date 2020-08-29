<div class="container-fluid">
	<div class="row text-center">
		<?php if (is_archive()) :
			the_archive_title('<h1>', '</h1>');
			the_archive_description('<h6>', '</h6>');
		endif; ?>
	</div>
	<div class="row">
		<?php while (have_posts()) : the_post() ?>
			<?php get_template_part('template-parts/preview', get_post_type()) ?>
		<?php endwhile; ?>
	</div>
</div>