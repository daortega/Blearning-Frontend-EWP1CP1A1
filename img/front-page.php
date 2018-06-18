<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php if ( have_posts() ) { ?>
        <?php while ( have_posts() ) {
          the_post(); ?>

          <?php the_title(); ?>
          <?php the_content() ?>

        <?php }; ?>
      <?php }; ?>
    </div>
  </div>




<?php get_footer(); ?>
