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
                <?php
                while ($args['query']->have_posts()) {
                    $args['query']->the_post();
                    get_template_part('template-parts/card');
                }
                ?>
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

