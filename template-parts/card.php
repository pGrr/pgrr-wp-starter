<?php
// default arguments
$defaultArgs = array(
    'read-more' => 'Read more'
);
// if arguments are provided merge them with the default ones
$args = isset($args) ? array_merge($defaultArgs, $args) : $defaultArgs;
?>

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
