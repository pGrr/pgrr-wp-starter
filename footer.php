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

	<footer id="colophon" class="site-footer fixed-bottom bg-primary shadow">
		<div class="site-info text-white-50 text-center small">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'pgrr' ) ); ?>" class="unlink">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'pgrr' ), 'WordPress' );
				?>
			</a>
			<span class="sep unlink"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'pgrr' ), 'pgrr', '<a href="https://github.com/pGrr" class="unlink">Paolo Garroni</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
