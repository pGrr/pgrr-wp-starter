<section id="content" class="container">
    <div class="row align-items-center justify-content-center">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-8 p-3'); ?>>
                <?php if (get_the_title() != '') : ?>
                <header class="entry-header mt-5 col-12">
                    <h1 class="entry-title text-center my-3"><?php the_title()?></h1>
                </header><!-- .entry-header -->
                <?php endif; ?>
                <?php pgrr_post_thumbnail(); ?>
                <div class="entry-content col-12 p-3 text-justify">
                    <?php the_content(); ?>
                </div>
                <?php
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
                ?>
            </article>
        <?php endwhile; ?>
    </div>
</section>