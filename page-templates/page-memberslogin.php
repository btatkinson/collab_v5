<?php
/*
Template Name: Members Login
*/
get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-sm-12 ml-col">
        <h3 class="p-3 ml-headline">Current Member Log-In</h3>
        <hr>
        <?php if(have_posts()){?>
          <?php while(have_posts()) {?>
            <?php the_post(); ?>
            <?php get_template_part('template-parts/page/body'); ?>


          <?php } ?>
        <?php } else { ?>
          Sorry, no pages match your criteria.
        <?php } ?>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12 ml-col">
      <h3 class="p-3 ml-headline">Interested in Becoming a Member of the CACP? </h3>
      <hr>
      <p class="p-3 ml-text">To discuss the requirements and benefits of membership with the CACP, please contact our Membership Chairs, <a href='https://collaborativelaw.com/find-a-professional/#!biz/id/5cc88cfeafd6913a13e81b0e'><b>Jessica Beauchamp, JD</b></a> or <a href='https://collaborativelaw.com/find-a-professional/#!biz/id/5cc9a287f033bfba2ae73e1b'><b>Dr. Bernadette Johns</b></a>.</p>
      <!-- https://collaborativelaw.com/find-a-professional/#!biz/id/5cc88cfeafd6913a13e81b0e -->
      <!-- https://collaborativelaw.com/find-a-professional/#!biz/id/5cc9a287f033bfba2ae73e1b -->
    </div>
  </div>
</div>

<?php get_footer(); ?>