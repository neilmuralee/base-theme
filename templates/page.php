<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('partials/page-header'); ?>
  <?php get_template_part('partials/content-page'); ?>

  <div class="container-fluid">
  <div class="row">
    <div class="col-xs">
      1 of 2
    </div>
    <div class="col-xs">
      1 of 2
    </div>
  </div>
  <div class="row">
    <div class="col-xs">
      1 of 3
    </div>
    <div class="col-xs">
      1 of 3
    </div>
    <div class="col-xs">
      1 of 3
    </div>
  </div>
</div>


<?php endwhile; ?>
