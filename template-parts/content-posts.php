<main class="container">
  <header class="text-center mt-5">
    <h1><?php esc_html_e('Latest posts', 'pgrr') ?></h1>
  </header>
  <hr class="my-5 w-100" />
  <div class="card-columns">
    <?php while (have_posts()) : the_post(); ?>
      <article class="my-3">
        <div class="card shadow">
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
            <a class="btn btn-primary" href="<?php the_permalink() ?>">
              <?php esc_html_e('Read more', 'pgrr') ?>
            </a>
          </footer>
        </div>
      </article>
    <?php endwhile; ?>
  </div>
  <hr class="my-5 w-100" />
  <footer class="text-center mb-5 col-12">
    <?php the_posts_navigation() ?>
  </footer>
</main>