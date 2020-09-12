<?php
$query = new WP_Query(array( 'category_name' => block_field('category', false) ));
echo get_template_part('template-parts/content', 'loop', array(
    'title' => block_field( 'title' , false),
    'subtitle' => block_field( 'subtitle', false ),
    'query' => $query,
    'read-more' => block_field('read-more', false),
));
wp_reset_postdata();
?>