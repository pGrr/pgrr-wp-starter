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

// default arguments
$defaultArgs = array(
    'text-color' => 'text-light',
    'bg-color' => 'bg-primary',
    'credits-text-color' => 'text-light',
    'credits-bg-color' => 'bg-dark',
    'shadow' => 'shadow',
);

// theme arguments
$skinArgs = isset($GLOBALS['skin']['footer']) ? $GLOBALS['skin']['footer'] : array();

// template arguments (passed at runtime)
$args = isset($args) ? $args : array();

// merge arguments with priority: 1) args, 2) skinArgs, 3) defaultArgs
$args = array_merge($defaultArgs, $skinArgs, $args);
?>

</main>
<footer id="colophon"
        class="site-footer reveal mt-auto container-fluid <?= $args['text-color'] ?> <?= $args['bg-color'] ?> <?= $args['shadow'] ?>">
    <div class="row justify-content-center">
        <?php foreach (['start', 'middle', 'end'] as $pos) : ?>
            <div class="col-md p-2 d-flex justify-content-center">
                <div>
                    <?php dynamic_sidebar('footer-' . $pos); ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="row justify-content-center site-info small <?= $args['credits-text-color'] ?> <?= $args['credits-bg-color'] ?> ">
        <a href="https://wordpress.org/" class="unlink">Proudly powered by Wordpress </a> | Theme: <a href="https://github.com/pGrr/pgrr-wp-starter" class="unlink"> pgrr-wp-starter by Paolo Garroni</a>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
<?php wp_footer(); ?>
</body>
</html>
