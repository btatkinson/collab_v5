<?php

/*
Template Name: About
*/

get_header(); ?>
<div class="ab-bkgrd xpad">
  <div class="ab-container">
    <div class="row ab-row">
      <div class="ab-title">
        <h1 class="ab-display"><?php single_post_title(); ?></h1>
      </div>
    </div>
    <div class="row ab-row">
      <div class="col-sm-3">
        <div class="ab-image ab-img-1" style="height: 100%; background-image: url(<?php echo get_theme_mod('about_image_first'); ?>);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;">
        </div>
      </div>
      <div class="col-sm-9 ab-text-1">
        <div class="about-block">
        <h5 class="eyebrow"></h5>
        <h2 class="ab-h2">What is the CACP?
        </h2>
        <p>
          The Cincinnati Academy of Collaborative Professionals (CACP) is one of the oldest and most successful Collaborative Practice groups in the country. Started in 1997, the CACP consists of Greater Cincinnati’s leading Family Law Attorneys, Family Relations Specialists and Financial Specialists.
        </p>
        <p>
          The group was founded with the simple premise that there is a “better way” to end a marriage. CACP members commit to ongoing professional training, sharing of best practices at monthly meetings, and adherence to the highest level of both legal and ethical requirements for the practice of Collaborative Law.
        </p>
        </div>
      </div>
    </div>
    <div class="row ab-row">
      <div class="col-sm-9 ab-col">
        <div class="about-block">
          <h5 class="eyebrow"></h5>
          <h2 class="ab-h2">What will my Collaborative Process look like?</h2>
          <p>
            <b>Contact a Member of the CACP.</b>  Both spouses in the Collaborative Process need to engage an attorney. A CACP member can learn more about your situation and answer your specific questions.</p>
          <p>

            <b>Signing the Participation Agreement</b> formally begins the Collaborative Process.  <a class="resources-link" href="<?php echo get_permalink(get_page_by_title('Resources')) ?>">You can find a copy of the Collaborative Participation Agreement here.</a>  This is a legal document outlining the agreed-upon commitments all parties will follow.
            A CACP member can answer any questions you may have about the content of the Participation Agreement.</p>
          <p>

            <b>Information gathering</b> is an important first step of the Collaborative Process. The professionals work with you to gather and organize all of the information and documentation you will need, including documentation about income, assets, debts, and any child-related issues.
            The Collaborative Process requires full transparency and a complete disclosure of all relevant information.</p>
          <p>

            <b>Team meetings</b> are held with you, your spouse, and the other professionals.  At these team meetings, we review your goals and interests, then work to create options for resolution of all financial and child-related issues.
            Team meetings are the cornerstone of the Collaborative Process where you, your spouse, and your Collaborative professionals work toward a final agreement at the same table.</p>
          <p>

            <b>Agreements</b> are then formalized into legal documents to be submitted to your local court.  Since you took an active role in shaping your agreement, there are no surprises and no questions left unanswered.</p>
        </div>
      </div>
      <div class="col-sm-3 ab-col d-xs-none d-sm-none d-sm-block">
        <div class="ab-image" style="height: 50%; background-image: url(<?php echo get_theme_mod('about_image_second'); ?>);
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;">
        </div>
        <br>
        <br>
        <div class="ab-image" style="height: 40%; background-image: url(<?php echo get_theme_mod('about_image_third'); ?>);
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;">
        </div>
      </div>
    </div>
    <div class="row ab-row">
      <div class="col-sm-12">
        <div class="about-block">
        <h5 class="eyebrow"></h5>
        <h2 class="ab-h2">Why should I choose the Collaborative Process?</h2>
        <p>
          <b>You shape the outcome.</b>  Though you each have a lawyer, you and your spouse take responsibility for shaping the settlement as the key members of the team.
        </p>
        <p>
          <b>You retain control.</b>  A divorce in the court system follows the court’s process. This includes court appearances and hearings.  The Collaborative Process is driven by your family’s needs and schedules. When you reach an agreement, it can be finalized within a shorter time frame.
          You do not get bogged down for months while you wait for a court date.
        </p>
        <p>
          <b>You gain support.</b>  You benefit from the experience, support, and problem-solving skills of the professional team.
          You receive insight and support from professionals who assist in identifying your interests and your children’s needs.
        </p>
        <p>
          <b>You can focus on settlement.</b>  Removing the threat of “going to court” reduces anxiety and fear, which allows you to focus on finding positive solutions.
        </p>
        <p>
          <b>You negotiate a better settlement.</b>  Every family is unique and every family deserves a unique solution to the issues raised by their circumstances.
          The Collaborative Process is designed to help you reach agreements uniquely tailored to your family’s needs.
        </p>
        <p>
          <b>You lay the groundwork for a better future.</b>  There is no pain-free way to end a marriage, but by reducing stress, working in a climate of cooperation, and treating each other with respect, you and your spouse are creating an environment in which you and your children can thrive.
        </p>
        </div>
      </div>
    </div>
    <!-- Link to get started page -->
    <div class="row">
      <div class="ab-ib-container">
        <div class="ab-image-bottom" style="height: 300px; background-image: url(<?php echo get_theme_mod('about_image_fourth'); ?>);
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;">
          <a class="btm-link-wrap" href="<?php echo get_permalink(get_page_by_title('Get Started')) ?>"></a>
          <a href="<?php echo get_permalink(get_page_by_title('Get Started')) ?>"><h2 class="ab-btm-txt" style="font-family: 'Pacifico', cursive;">Get Started <i class="fas fa-angle-right"></i></h2></a>
        </div>
      </div>
    </div>
  </div>
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
<?php get_footer(); ?>