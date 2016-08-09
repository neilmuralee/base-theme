<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('partials/page-header'); ?>
  <?php get_template_part('partials/content-page'); ?>

  <div class="row">
    <div class="col-xs">
      1 of 2
    </div>
    <div class="col-xs">
      2 of 2
    </div>
  </div>

  <div class="row">
    <div class="col-md-10">
      1 of 3
    </div>
    <div class="col-md-6">
      2 of 3
    </div>
    <div class="col-md-16">
      3 of 3
    </div>
  </div>


<?php endwhile; ?>
