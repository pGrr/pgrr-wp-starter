<?php
/**
 * Adds bubbles to the background of the html element in which is called, using particles.js
 */
wp_enqueue_script(
    'particles-lib',
    get_stylesheet_directory_uri() . '/js/particles.js',
    array(), "1.0", true);
wp_enqueue_script(
    'bubbles',
    get_stylesheet_directory_uri() . '/js/bubbles.js',
    array('particles-lib'), "1.0", true);
?>
<div id="particles-js"></div>