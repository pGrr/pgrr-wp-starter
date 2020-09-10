<?php
/**
 * The template part for 404 pages.
 */
?>

<div class="container">
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
</div>
