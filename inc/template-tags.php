<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package pgrr
 */

if ( ! function_exists( 'pgrr_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function pgrr_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'pgrr' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'pgrr_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function pgrr_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'pgrr' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'pgrr_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function pgrr_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'pgrr' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'pgrr' ) . '</span>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'pgrr' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'pgrr' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'pgrr' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'pgrr' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'pgrr_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function pgrr_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<?php
					the_post_thumbnail(
						'post-thumbnail',
						array(
							'alt' => the_title_attribute(
								array(
									'echo' => false,
								)
							),
						)
					);
				?>
			</a>

			<?php
		endif; // End is_singular().
	}
endif;

if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;


if ( ! function_exists( 'pgrr_starter_comment' ) ) :
	/**
	 * Template for comments and pingbacks.
	 *
	 * Used as a callback by wp_list_comments() for displaying the comments.
	 */
	function pgrr_starter_comment( $comment, $args, $depth ) {
		 // $GLOBALS['comment'] = $comment;

			if ( 'pingback' == $comment->comment_type || 'trackback' == $comment->comment_type ) : ?>

					<li id="comment-<?php comment_ID(); ?>" <?php comment_class( 'media' ); ?>>
					<div class="comment-body">
							<?php _e( 'Pingback:', 'wp-bootstrap-starter' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( 'Edit', 'wp-bootstrap-starter' ), '<span class="edit-link">', '</span>' ); ?>
					</div>

			<?php else : ?>

			<li id="comment-<?php comment_ID(); ?>" <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?>>
					<article id="div-comment-<?php comment_ID(); ?>" class="comment-body media mb-4">
							<a class="pull-left" href="#">
									<?php if ( 0 != $args['avatar_size'] ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
							</a>

							<div class="media-body">
									<div class="media-body-wrap card">

											<div class="card-header">
													<h5 class="mt-0"><?php printf( __( '%s <span class="says">says:</span>', 'wp-bootstrap-starter' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?></h5>
													<div class="comment-meta">
															<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
																	<time datetime="<?php comment_time( 'c' ); ?>">
																			<?php printf( _x( '%1$s at %2$s', '1: date, 2: time', 'wp-bootstrap-starter' ), get_comment_date(), get_comment_time() ); ?>
																	</time>
															</a>
															<?php edit_comment_link( __( '<span style="margin-left: 5px;" class="glyphicon glyphicon-edit"></span> Edit', 'wp-bootstrap-starter' ), '<span class="edit-link">', '</span>' ); ?>
													</div>
											</div>

											<?php if ( '0' == $comment->comment_approved ) : ?>
													<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'wp-bootstrap-starter' ); ?></p>
											<?php endif; ?>

											<div class="comment-content card-block">
													<?php comment_text(); ?>
											</div><!-- .comment-content -->

											<?php comment_reply_link(
													array_merge(
															$args, array(
																	'add_below' => 'div-comment',
																	'depth' 	=> $depth,
																	'max_depth' => $args['max_depth'],
																	'before' 	=> '<footer class="reply comment-reply card-footer">',
																	'after' 	=> '</footer><!-- .reply -->'
															)
													)
											); ?>

									</div>
							</div><!-- .media-body -->

					</article><!-- .comment-body -->

					<?php
			endif;
	}
endif; // ends check for pgrr_starter_comment()
