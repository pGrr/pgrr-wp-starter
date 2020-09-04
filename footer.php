<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pgrr
 */

?>

<footer id="colophon" class="site-footer container-fluid <?= get_theme_mod('footer_text_color') ?> <?= get_theme_mod('footer_bg') ?> <?= get_theme_mod('footer_shadow') ?>">
	<div class="row justify-content-center">
		<?php foreach (['start', 'middle', 'end'] as $pos) : ?>
			<div class="col-md p-2 d-flex justify-content-center">
				<div>
					<?php dynamic_sidebar('footer-' . $pos); ?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
	<div class="row justify-content-center site-info small <?= get_theme_mod('footer_credits_text_color') ?> <?= get_theme_mod('footer_credits_bg') ?> ">
		<a href="<?php echo esc_url(__('https://wordpress.org/', 'pgrr')); ?>" class="unlink">Proudly powered by Wordpress | Theme: <a href="https://github.com/pGrr/pgrr-wp-starter" class="unlink"> pgrr-wp-starter by Paolo Garroni</a>
	</div><!-- .site-info -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>

</html>