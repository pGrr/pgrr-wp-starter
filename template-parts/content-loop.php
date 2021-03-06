<?php
// default arguments
$defaultArgs = array(
    'title' => '',
    'subtitle' => '',
    'title-class' => 'h2',
    'subtitle-class' => 'h5',
    'query' => $GLOBALS['wp_query'],
    'read-more' => 'Read more'
);
// if arguments are provided merge them with the default ones
$args = isset($args) ? array_merge($defaultArgs, $args) : $defaultArgs;
?>

<section id="content" class="container">

    <?php if ($args['title'] || $args['description']) : ?>
        <header class="page-header text-center mt-5 reveal">
            <?php if ($args['title']) : ?>
                <h1 class="page-title text-center <?= $args['title-class'] ?>'"><?= $args['title'] ?></h1>
            <?php endif; ?>
            <?php if ($args['subtitle']) : ?>
                <p class="text-center <?= $args['subtitle-class'] ?>"><?= $args['subtitle'] ?></p>
            <?php endif; ?>
        </header><!-- .page-header -->
    <?php endif; ?>

    <?php if ($args['query']->have_posts()) : ?>
        <div class="row justify-content-center">
            <div class="card-deck justify-content-center">
                <?php
                while ($args['query']->have_posts()) {
                    $args['query']->the_post();
                    get_template_part('template-parts/card', null, array('read-more' => $args['read-more']));
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

