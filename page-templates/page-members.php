<?php
/*
Template Name: Members-Area
*/
get_header(); ?>

<div id="members" class="ma-container">
  <main>
    <div class="row ma-head-row">
      <div class="col-sm-12">
        <a href="http://collaborativelaw.com">
            <div class="logo">
                <?php if(has_custom_logo()){
                    the_custom_logo();
                    }else{
                        echo "Logo";
                    }
                ?>
                
            </div>
        </a>
      </div>
    </div>
    <header>
      <h1 class="ma-h1">Members Area</h1>
      <div class="text-center">
        <?php if(have_posts()){?>
          <?php while(have_posts()) {?>
            <?php the_post(); ?>
            <?php get_template_part('template-parts/page/body'); ?>
          <?php } ?>
        <?php } else { ?>
          Sorry, no pages match your criteria.
        <?php } ?>
      </div>
    </header>
      <div class="row ma-row">
        <div class="col-sm-4">
          <div class="card ma-card">
            <a href="http://collaborativelaw.com/" class="btn btn-fix ">
              <div class="ma-crd-cnt">
              <i class="far fa-3x fp-fa fa-caret-square-left"></i>
              </div>
              <h4 class="card-title">Back To Site</h4>
            </a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card ma-card">
            <a href="http://collaborativelaw.com/my-account" class="btn btn-fix ">
              <div class="ma-crd-cnt">
                <i class="fas fa-3x fp-fa fa-user"></i>
              </div>
              <h4 class="card-title">My Account</h4>
            </a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card ma-card">
            <a href="http://collaborativelaw.com/members-area/event-calendar/" class="btn btn-fix ">
              <div class="ma-crd-cnt">
                <i class="far fa-3x fp-fa fa-calendar-alt"></i>
              </div>
              <h4 class="card-title">Event Calendar</h4>
            </a>
          </div>
        </div>
      </div>
      <div class="row ma-row">
        <div class="col-sm-4">
          <div class="card ma-card">
            <a href="http://collaborativelaw.com/members-area/forum/" class="btn btn-fix ">
              <div class="ma-crd-cnt">
                <i class="far fa-3x fp-fa fa-comments"></i>
              </div>
              <h4 class="card-title">Forum</h4>
            </a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card ma-card">
            <a href="http://collaborativelaw.com/members-area/downloads/" class="btn btn-fix ">
              <div class="ma-crd-cnt">
                <i class="fas fa-3x fp-fa fa-download"></i>
              </div>
              <h4 class="card-title">Download Files</h4>
            </a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card ma-card">
            <a href="http://collaborativelaw.com/sign-out" class="btn btn-fix ">
              <div class="ma-crd-cnt">
                <i class="fas fa-3x fp-fa fa-sign-out-alt"></i>
              </div>
              <h4 class="card-title">Sign Out</h4>
            </a>
          </div>
        </div>
      </div>
      <!-- <div class="row ma-row">

      </div> -->
  </main>
</div>

<?php get_footer(); ?>