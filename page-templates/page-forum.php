<?php
/*
Template Name: Forum
*/
get_header(); ?>

<!-- <div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <main> -->
        <?php if(have_posts()){?>
          <?php while(have_posts()) {?>
            <?php the_post(); ?>
            <?php get_template_part('template-parts/page/body'); ?>
          <?php } ?>
        <?php } else { ?>
          Sorry, no pages match your criteria.
        <?php } ?>
      <!-- </main>
    </div>
  </div>
</div> -->

<?php get_footer() ?>
