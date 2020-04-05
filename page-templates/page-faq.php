<?php
/*
Template Name: FAQ
*/
get_header(); ?>
<a name="top"></a>
<div class="ab-bkgrd">
  <div class="faq-container">
    <div class="row">
      <div class="faq-col-1">
        <div class="">
          <h1 class="faq-head">What is Collaborative Practice?</h1>
          <hr class="">
          <p class="faq-subt">Collaborative Process allows divorcing and separating couples to put family first and reach creative resolutions without stepping foot in a courtroom.</p>
        </div>
      </div>
    </div>
    <!-- BEGIN SAMPLE QUESTION BLOCK -->
    <!-- <div class="row faq-row">
      <div class="col-sm-1">
        <i class="far fa-4x fa-question-circle"></i>
      </div>
      <div class="col-sm-11">
        <h3 class="faq-q-head">My spouse and I don’t get along. Does that mean the Collaborative Process is wrong for us?</h3>
      </div>
      <div class="col-sm-1">
      </div>
      <div class="col-sm-11">
        <span class="faq-answer"><p>No. Most spouses whose marriages are ending are experiencing conflict. The Collaborative Process addresses these difficult issues in a respectful manner.</p></span>
      </div>
    </div> -->
    <!-- END SAMPLE QUESTION BLOCK -->
    <div class="row faq-row">
      <div class="col-sm-1">
        <i class="far fa-4x fa-question-circle"></i>
      </div>
      <div class="col-sm-11">
        <h3 class="faq-q-head">My spouse and I don’t get along. Does that mean the Collaborative Process is wrong for us?</h3>
      </div>
      <div class="col-sm-1">
      </div>
      <div class="col-sm-11">
        <span class="faq-answer"><p>No. Most spouses whose marriages are ending are experiencing conflict. The Collaborative Process addresses these difficult issues in a respectful manner.</p></span>
      </div>
    </div>

    <div class="row faq-row">
      <div class="col-sm-1">
        <i class="far fa-4x fa-question-circle"></i>
      </div>
      <div class="col-sm-11">
        <h3 class="faq-q-head">How long does the Collaborative Process take from start to finish?</h3>
      </div>
      <div class="col-sm-1">
      </div>
      <div class="col-sm-11">
        <span class="faq-answer"><p>This is a client driven process. The amount of time is directly related to each participant’s unique needs, interests, and engagement. There are no shortcuts or high pressure tactics used to moderate the pace.</p></span>
      </div>
    </div>

    <div class="row faq-row">
      <div class="col-sm-1">
        <i class="far fa-4x fa-question-circle"></i>
      </div>
      <div class="col-sm-11">
        <h3 class="faq-q-head">How is the Collaborative Process different from other ways of ending a marriage?</h3>
      </div>
      <div class="col-sm-1">
      </div>
      <div class="col-sm-11">
        <span class="faq-answer"><p>In the Collaborative Process you and your spouse take an active role in shaping the terms of your settlement. Guided by specially trained family law attorneys, you reach an agreement that reflects your unique needs and interests. Allied professionals are experts in family relations and financial issues and are available to support the process as neutrals serving both spouses. The most unique aspect of the Collaborative Process is that you and your spouse begin, in agreement, by voluntarily choosing to participate in a non-adversarial process. Another unique aspect of the Collaborative Process is that the agreement includes expectations for mutual respect and transparency. The Collaborative Process is designed to end a marriage by Dissolution. In the traditional litigation model (Divorce), one spouse sues the other in a public forum (Domestic Relations Court) to end the marriage. In Divorce, a judge is the final arbiter of the terms and conditions of the settlement. The traditional Divorce model is more contentious, costly and often outcomes can be more uncertain for all involved.</p></span>
      </div>
    </div>

    <div class="row faq-row">
      <div class="col-sm-1">
        <i class="far fa-4x fa-question-circle"></i>
      </div>
      <div class="col-sm-11">
        <h3 class="faq-q-head">What resources do you have to help my kids through this experience?</h3>
      </div>
      <div class="col-sm-1">
      </div>
      <div class="col-sm-11">
        <span class="faq-answer"><p>All parents worry about the impact of ending a marriage on children. Family Relations Specialists are available to work out parenting schedules, develop constructive solutions when differences arise, and meet with your child/children to better understand and address their specific concerns.</p></span>
      </div>
    </div>

    <div class="row faq-row">
      <div class="col-sm-1">
        <i class="far fa-4x fa-question-circle"></i>
      </div>
      <div class="col-sm-11">
        <h3 class="faq-q-head">Is the Collaborative Process expensive?</h3>
      </div>
      <div class="col-sm-1">
      </div>
      <div class="col-sm-11">
        <span class="faq-answer"><p>When ending a marriage, cost is a universal concern. It is a time of great uncertainty financially. The main drivers that impact the cost of dissolving a marriage include the process that you select, the professionals you select, and your readiness to work through the myriad issues that you will face. Using allied professionals such as Family Relations Specialists and Financial Specialists in the Collaborative Process is an opportunity to improve efficiency. No matter which process you choose, there are going to be costs involved. The Collaborative Process is most efficient (i.e.: less costly) when all parties are present at each meeting and prepared to participate.</p></span>
      </div>
    </div>

    <div class="row faq-row">
      <div class="col-sm-1">
        <i class="far fa-4x fa-question-circle"></i>
      </div>
      <div class="col-sm-11">
        <h3 class="faq-q-head">Why is it important to use a member of the Cincinnati Academy of Collaborative Professionals (CACP)?</h3>
      </div>
      <div class="col-sm-1">
      </div>
      <div class="col-sm-11">
        <span class="faq-answer"><p>CACP members are some of the most experienced and well-trained professionals in the areas of family law, family relations, and finance.</p></span>
      </div>
    </div>
    <div class="row btt">
      <a class="btt-link" href="#top">Back To Top <i class="fas fa-arrow-up"></i></a>
    </div>
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

<?php get_footer(); ?>