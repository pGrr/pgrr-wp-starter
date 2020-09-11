<?php
// default arguments
$defaultArgs = array(
    'title-class' => 'h4',
    'body-class' => 'd-none',
    'read-more' => 'Read more',
    'button-class' => 'btn btn-dark shadow',
);
// if arguments are provided merge them with the default ones
$args = isset($args) ? array_merge($defaultArgs, $args) : $defaultArgs;
?>

<article>
    <div class="card reveal shadow rounded-0 my-4" style="width: 18rem;">
        <?php if (has_post_thumbnail()) : ?>

            <div class="lazy" style="height:150px;background-image:url(<?php the_post_thumbnail_url() ?>);background-position:center;background-size:cover">

        </div>
        <?php endif; ?>

        <header class="card-header text-center border-bottom">
            <h2 class="<?= $args['title-class'] ?>"><?php the_title() ?></h2>
        </header>
        <div class="card-body p-3 <?= $args['body-class'] ?>">
            <?php the_excerpt() ?>
        </div>
        <footer class="card-footer text-center">
            <a class="<?= $args['button-class'] ?>" href="<?php the_permalink() ?>">
                <?php esc_html_e($args['read-more'], 'pgrr') ?> <i class="fas fa-chevron-circle-right"></i>
            </a>
        </footer>
    </div>
</article>
