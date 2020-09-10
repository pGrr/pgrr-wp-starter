<?php
// default arguments
$defaultArgs = array(
    'title' => '',
    'subtitle' => '',
    'query' => $GLOBALS['wp_query'],
    'read-more' => 'Read more'
);
// if arguments are provided merge them with the default ones
$args = isset($args) ? array_merge($defaultArgs, $args) : $defaultArgs;
?>

<section id="content" class="container">

    <?php if ($args['title'] || $args['description']) : ?>
        <header class="page-header text-center mt-5">
            <?php if ($args['title']) : ?>
                <h1 class="page-title text-center"><?= $args['title'] ?></h1>
            <?php endif; ?>
            <?php if ($args['subtitle']) : ?>
                <p class="text-center"><?= $args['subtitle'] ?></p>
            <?php endif; ?>
        </header><!-- .page-header -->
    <?php endif; ?>

    <?php if ($args['query']->have_posts()) : ?>
        <div class="row justify-content-center">
            <div class="card-columns my-4">
                <?php while ($args['query']->have_posts()) : $args['query']->the_post(); ?>
                    <article class="my-3">
                        <div class="card shadow rounded-0" style="width: 18rem;">
                            <?php if (has_post_thumbnail()) : ?>
                                <img class="card-img-top" src="<?php the_post_thumbnail_url() ?>" alt="Card image cap">
                            <?php endif; ?>
                            <header class="card-header text-center border-bottom">
                                <h2><?php the_title() ?></h2>
                            </header>
                            <div class="card-body p-3">
                                <?php the_excerpt() ?>
                            </div>
                            <footer class="card-footer text-center">
                                <a class="btn btn-outline-dark" href="<?php the_permalink() ?>">
                                    <?php esc_html_e($args['read-more'], 'pgrr') ?>
                                </a>
                            </footer>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
        </div>

    <?php endif; ?>
    <?php if ($previosPostsLink = get_previous_posts_link() || $nextPostsLink = get_next_posts_link()) : ?>
        <footer id="posts-navigation" class="text-center mb-5 col-12 sans-serif">
            <?php if ($previosPostsLink) : ?>
                <?= $previosPostsLink ?>
            <?php endif; ?>
            <?php if ($nextPostsLink) : ?>
                <?= $nextPostsLink ?>
            <?php endif; ?>
        </footer>
    <?php endif; ?>
</section>

