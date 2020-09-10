<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pgrr
 */

?>

<section id="content" class="container">
    <div class="row align-items-center justify-content-center my-5">
        <header class="entry-header  col-12">
            <h1 class="page-title text-center"><?php esc_html_e( 'Nothing Found', 'pgrr' ); ?></h1>
        </header><!-- .page-header -->
        <div class="col-12 p-3 text-center">
            <?php
            if ( is_home() && current_user_can( 'publish_posts' ) ) {
                printf(
                    '<p>' . wp_kses(
                    /* translators: 1: link to WP admin new post page. */
                        __( 'Ready to publish your first post? <a class="btn btn-dark" href="%1$s">Get started here</a>.', 'pgrr' ),
                        array(
                            'a' => array(
                                'href' => array(),
                            ),
                        )
                    ) . '</p>',
                    esc_url( admin_url( 'post-new.php' ) )
                );
            } elseif ( is_search() ) {
                ?><p><?php
                esc_html_e(
                    'Sorry, but nothing matched your search terms. Please try again with some different keywords.',
                    'pgrr' );
                ?></p><?php
                get_search_form();
            } else {
                ?><p><?php
                esc_html_e(
                    'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.',
                    'pgrr' );
                ?></p><?php
                get_search_form();
            }
            ?>
        </div>
    </div>
</section><!-- .no-results -->
