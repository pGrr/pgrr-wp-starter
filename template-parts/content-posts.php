<main class="container">
  <header class="text-center mt-5">
    <h1><?php esc_html_e('Latest posts', 'pgrr') ?></h1>
  </header>
  <?php get_template_part('template-parts/cards', 'masonry'); ?>
  <footer class="text-center mb-5 col-12">
    <?php the_posts_navigation() ?>
  </footer>
</main>