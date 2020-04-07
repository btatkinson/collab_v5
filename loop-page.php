<?php if(have_posts()){?>
  <?php while(have_posts()) {?>
    <?php the_post(); ?>
    <?php get_template_part('template-parts/page/content'); ?>


  <?php } ?>
<?php } else { ?>
  Sorry, no pages match your criteria.
<?php } ?>
