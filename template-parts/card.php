<a href=" <?php echo get_permalink(); ?> " class="unlink">
  <div class="card shadow m-1" style="width: 18rem;">
    <img class="card-img-top" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="Card image cap" />
    <div class="card-body justify-content-center">
      <h5 class="card-title text-center"><?php the_title(); ?></h5>
      <p class="card-text text-center"><?php the_excerpt() ?></p>
      <a href="<?php echo get_permalink(); ?>" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</a>