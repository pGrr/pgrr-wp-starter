<form class="form-inline search-form justify-content-center" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
  <label>
    <span class="screen-reader-text">Cerca:</span>
    <input type="search" class="search-field form-control mr-sm-2" placeholder="<?php esc_html_e('Search...', 'pgrr') ?>" value="" name="s" title="Cerca:" />
  </label>
  <input type="submit" class="search-submit btn btn-success my-2 my-sm-0" value="<?php esc_html_e('Search', 'pgrr') ?>" />
</form>