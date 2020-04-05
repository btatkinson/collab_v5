<?php

/*
Template Name: Get Started
*/

get_header(); ?>
<div class="ab-bkgrd">
    <div class="gs-container">
    <div class="row">
        <div class="col-sm-12">
            <div class="gs-jumbotron">
            <h2 class="gs-h2">Where Do I Start?</h2>
            <hr/>
            <ul class="gs-top-ul">
                <li>You can begin the Collaborative Process by contacting any of our Collaborative Professionals. They will explain how the Collaborative Process works and help you assemble your team of caring professionals.</li>
                <li>Many people begin by contacting a Family Lawyer. You can start by contacting any Collaborative Professional based on what you feel you need. If your immediate concerns involve finances, you might choose to contact a Financial Specialist. Or, if you're struggling with emotions, conflict, or parenting issues, you might choose to contact a Family Relations Specialist.</li>
                <li>If you're not sure yet whether the Collaborative Process is the right fit for you, reach out to any of our Collaborative Professionals. We know this is a stressful time and we will be happy to answer your questions.</li>
            </ul>
            </div>
        </div>
    </div>
    <!-- EDITS BUTTONS -->
    <div class="row">
    <div class="col-sm-4 gs-btn-container">
      <button id="btn-attorney" class="gs-button gs-clicked">
        <i class="fas fa-gavel gs-btn-icon"></i>
        <p class="gs-btn-label">Attorney</p>
      </button>
    </div>
    <div class="col-sm-4 gs-btn-container">
      <button id="btn-family" class="gs-button">
        <i class="fas fa-users gs-btn-icon"></i>
        <p class="gs-btn-label">Famliy Relations Specialist</p>
        </button>
    </div>
    <div class="col-sm-4 gs-btn-container">
      <button id="btn-financial" class="gs-button">
        <i class="fas fa-piggy-bank gs-btn-icon"></i>
        <p class="gs-btn-label">Financial Specialist</p>
      </button>
    </div>
    </div>
    <!-- EDITS TEXT BELOW BUTTONS -->
    <div id="attorney" class="specialist-block">
    <h3 class="gs-h3">Attorney</h3>

    <hr class="my-3" />
    <p>
    The Attorney members of our Collaborative Practice Group are attorneys who have completed special training in Collaborative Law. These Attorneys will give you legal advice, just as any traditional attorney does.

    The Collaborative Process empowers you and your spouse to discuss and reach agreements about the issues that are important to you. You and your spouse, rather than a court, make these important decisions. Your Attorneys will help to guide these discussions at group meetings where both spouses and their Attorneys sit at the same table.

    You and your spouse will each have a separate Attorney in the Collaborative Process. Your Attorney will work together with your spouse’s Attorney to find solutions that work for both you and your spouse. Even though the threat of litigation is off the table, your Attorney is still working for you and serving as your legal counsel.

    Your Attorney will guide you as you and your spouse address the legal issues related to ending your marriage. This includes:
    </p>
    <ul>
        <li>Making decisions about your children</li>
        <li>Sharing time with your children</li>
        <li>Financial support, including spousal and child support</li>
        <li>Dividing your assets</li>
        <li>Dividing your debts</li>
    </ul>
    <p>
    Once you and your spouse have reached agreement on all issues, the Attorneys will prepare the legal paperwork to submit to the court in a non-adversarial filing.

    You and your Attorney will sign a Collaborative Participation Agreement. As part of this Agreement, you and your Attorney commit to staying out of court. If you decide to go to court, you will have to hire a new attorney.
    </p>
    </div>
    <div id="financial" class="specialist-block">
    <h3 class="gs-h3">Financial Specialist</h3>

    <hr class="my-3" />
    <p>
    It is no secret that one of the main stressors in ending a marriage is related to finances. In the Collaborative Process, you and your spouse can use a Financial Specialist. A Financial Specialist works to educate you and your spouse about the financial implications of ending your marriage. A Financial Specialist is a neutral participant and does not advocate for your or your spouse.

    Many times, the Financial Specialist works with you and your spouse to gather all necessary financial information and documentation. Because the free flow of information is crucial to the Collaborative Process, you and your spouse will work with the Financial Specialist to ensure that complete and accurate financial information has been provided. With this financial information, the Financial Specialist can then work with you and your spouse to create a spreadsheet of the marital assets and debts.

    It is not unusual that one spouse may be less familiar with the marital finances. The Financial Specialist can work with you and your spouse to explain the financial picture, including income, assets, and debts.

    As part of the Collaborative Process, the Financial Specialist will work with you and your spouse to discuss options that work to meet your and your spouse’s financial goals. The might include working with you or your spouse to create a budget and compare that budget to your cash flow. Or, this might include plans to save for children’s college educations or to save for retirement.

    The Financial Specialist’s goal is to provide financial expertise while you and your spouse are making decisions about your financial futures. These topics might include:
    <ul>
        <li>Analyzing and understanding your and your spouse’s income</li>
        <li>Understanding how taxes impact your financial picture</li>
        <li>Assisting with the division of retirement accounts</li>
        <li>Performing calculations related to spousal and child support</li>
        <li>Developing property division scenarios</li>
    </ul>
    </p>
    </div>
    <div id="family" class="specialist-block">
    <h3 class="gs-h3">Family Relations Specialist</h3>

    <hr class="my-3" />
    <p>
    When you choose the Collaborative Process, you have the opportunity to work with a Collaborative Family Relations Specialist (FRS). Family Relations Specialists are psychologists, social workers and counselors – all licensed in their respective fields – who have expertise in family dynamics, child development, and couples’ communication. FRS’s have specialized training in Collaborative Law and actively participate in the Cincinnati Academy of Collaborative Professionals, where they engage in ongoing training and case conferences to further their knowledge in this area.

    A FRS works with you and your spouse to identify and prioritize concerns and interests, and then helps to facilitate dialogue and promote compromise. A FRS enhances communication among the team members and reduces misunderstandings to help the process move toward resolution.

    If you have children or teenagers, a FRS will provide information and guidance to you and your spouse as you create a shared parenting plan and develop co-parenting skills, personalized to the needs of each family.

    A FRS acts as a facilitator, not as a therapist, in the Collaborative Process. A FRS serves as a neutral professional in the process.
    </p>
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