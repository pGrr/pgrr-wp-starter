<div class="container-fluid">
    <?php
    $args = isset($args) ? $args : array();
    foreach ($args as $key => $value) {
        get_template_part($key, null, $value);
    }
    ?>
</div>