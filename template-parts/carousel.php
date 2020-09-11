<?php
/**
 * Carousel template
 */

// default arguments
$defaultArgs = array(
        'xl-height' => '80vh',
    'lg-height' => '60vh',
    'md-height' => '50vh',
    'sm-height' => '40vh',
    'xs-height' => '35vh',
    'slides' => array(
        'manhattan-summer' => array(
            'title' => 'Manhattan summer',
            'subtitle' => 'A Manhattan like you never imagined',
            'img-url' => 'http://test.local/wp-content/uploads/2010/08/manhattansummer.jpg',
            'img-alt' => 'Manhattan summer',
            'action-text' => 'Buy your ticket now',
            'action-url' => '#'
        ),
        'unicorn' => array(
            'title' => 'A unicorn',
            'subtitle' => 'A unicorn like you never imagined',
            'img-url' => 'http://test.local/wp-content/uploads/2012/12/unicorn-wallpaper.jpg',
            'img-alt' => 'Unicorn',
            'action-text' => 'Ride your unicorn now',
            'action-url' => '#'
        ),
    ),
);
// if arguments are provided merge them with the default ones
$args = isset($args) ? array_merge($defaultArgs, $args) : $defaultArgs;
// enqueue js code script
wp_enqueue_script(
        'pgrr-carousel',
        get_stylesheet_directory_uri() . '/js/carousel.js',
        array('jquery'),
        "1.0",
        true);
?>
<style type="text/css" scoped>
    /* Extra large devices (large desktops)
    // No media query since the extra-large breakpoint has no upper bound on its width */
    #pgrr-carousel {
        height: <?= $args['xl-height'] ?>;
    }

    /* Large devices (desktops, less than 1200px) */
    @media (max-width: 1199.98px) {
        #pgrr-carousel {
            height: <?= $args['lg-height'] ?>;
        }
    }

    /* Medium devices (tablets, less than 992px) */
    @media (max-width: 991.98px) {
        #pgrr-carousel {
            height: <?= $args['md-height'] ?>;
        }
    }

    /* Small devices (landscape phones, less than 768px) */
    @media (max-width: 767.98px) {
        #pgrr-carousel {
            height: <?= $args['sm-height'] ?>;
        }
        .slide-title {
            font-size:1.75rem;
        }
    }

    /* Extra small devices (portrait phones, less than 576px) */
    @media (max-width: 575.98px) {
        #pgrr-carousel {
            height: <?= $args['xs-height'] ?>;
        }
        .slide-title {
            font-size:1.5rem;
        }
    }
</style>

<div id="pgrr-carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner h-100 w-100 bg-dark">
        <?php foreach ($args['slides'] as $slide) : ?>
        <!-- carousel slide -->
        <div class="carousel-item h-100 w-100">
            <div class="carousel-background h-100 w-100 d-flex justify-content-center align-items-center"
                 style="background-image:url('<?= $slide['img-url'] ?>'); background-repeat: no-repeat; background-position: center;">
                <?php if ($slide['title'] != null || $slide['subtitle'] != null) : ?>
                    <div class="font-weight-bold text-dark text-center p-3 rounded shadow" style="background-color:rgba(255,255,255,0.5);">
                        <?php if ($slide['title'] != null) : ?>
                            <h1 class="slide-title"><?= $slide['title'] ?></h1>
                        <?php endif; ?>
                        <?php if ($slide['subtitle'] != null) : ?>
                            <p class="slide-subtitle h2 d-none d-md-block"><?= $slide['subtitle'] ?></p>
                        <?php endif; ?>
                        <?php if ($slide['action-url'] != null && $slide['action-text'] != null) : ?>
                            <a class="slide-button btn btn-dark my-3" href="<?= $slide['action-url'] ?>">
                                <?= $slide['action-text'] ?> <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        <?php endif ; ?>
                    </div>
                <?php endif;?>
            </div>
        </div><!-- carousel slide -->
        <?php endforeach; ?>
    </div>
    <a class="carousel-control-prev" href="#pgrr-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#pgrr-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
