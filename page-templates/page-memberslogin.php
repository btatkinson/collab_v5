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
      <p class="p-3 ml-text">To discuss the requirements and benefits of membership with the CACP, please contact our Membership Chairs, Jessica Beauchamp, JD or Bernadette Johns, Ed. D.</p>
      <p class="p-3 ml-text">CACP is offering the two-day Introductory Collaborative Training in Cincinnati for the first time since 2014 with our impressive local team of trainers.  The training will be September 12 and 13, 2019 at the Courtyard Marriott in Rookwood.  This training meets the IACP requirements for introductory training.  Please contact <a href="crwaide@strausstroy.com">Carrie R. Waide</a> for more information.
    </div>
  </div>
</div>

<?php get_footer(); ?>