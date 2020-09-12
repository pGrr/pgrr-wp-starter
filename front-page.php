<?php
get_header();

if (get_theme_mod('pgrr_slider')) {
    $slides = array();
    foreach ([1,2,3,4,5] as $n) {
        if (get_theme_mod("pgrr_slider_image_$n")) {
            $slides["$n"] = array(
                'img-url' => get_theme_mod("pgrr_slider_image_$n"),
                'img-alt' => "Slide image $n",
                'title' => get_theme_mod("pgrr_slider_title_$n"),
                'subtitle' => get_theme_mod("pgrr_slider_subtitle_$n"),
                'action-text' => get_theme_mod("pgrr_slider_action_text_$n"),
                'action-url' => get_theme_mod("pgrr_slider_action_url_$n"),
            );
        }
    }
    if ($slides) {
        echo get_template_part('template-parts/carousel', null, array('slides' => $slides));
    }
}
the_content();
get_footer();