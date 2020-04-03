<!DOCTYPE html>
<html lang="en">
<head>
    <?php get_header(); ?>
</head>
<body>
    <!-- top image panel -->
    <div class="splash" style="background-image: url(<?php echo get_theme_mod('home_image'); ?>);">
        <div class="splash-panel">
            <div class="sp-body">
                <h1 class="quote-text"> Ending your marriage with
                <span id="fadeIn" class="sp-fade"></span>
                </h1>
            </div>
        </div>
        <br>
        <br>
        <a class="sp-button" href="<?php echo get_permalink(get_page_by_title('Get Started')) ?>" role="button">Get Started <i class="fas fa-angle-right sp-arrow"></i></a>
    </div>
    <!-- middle input panel -->
    <div class="middle-input-panel">
        <div class="mip-left">
            <h1 class="slogan">
                <?php //echo get_theme_mod('_themename_intro_text'); ?>
                Ending your marriage doesn’t have to be destructive. <span style="font-family: 'Pacifico', cursive;" class="slogan-emphasis">Explore options. Create solutions.</span>
            </h1>
            <h3 class="slogan-sub">Find A Collaborative Professional Today:</h3>
            <form class="fp-form">
                <div class="form-row">
                    <div class="form-group form-width">
                        <label for="firstName" class="form-control">First Name</label>
                        <input
                        type="text"
                        class="form-control"
                        id="fnameInput"
                        placeholder="First Name"
                        aria-label="First name text input"
                        >
                    </div>
                    <div class="form-group form-width">
                        <label for="lastName" class="form-control">Last Name</label>
                        <input
                        type="text"
                        class="form-control"
                        id="lnameInput"
                        placeholder="Last Name"
                        aria-label="Last name text input"
                        >
                    </div>
                    <div class="form-group form-width">
                        <label for="occSelect" class="form-control">Profession</label>
                        <select id="occSelect" class="custom-select">
                        <option selected>Type (Any)</option>
                        <option value="Attorney">Attorney</option>
                        <option value="Financial Specialist">Financial Specialist</option>
                        <option value="Family Relations">Family Relations</option>
                        </select>
                    </div>
                </div>
            </form>
            <div class="mip-btn-row">
                <button
                class="btn btn-secondary mip-btn"
                id="findProBrowse"
                onclick="window.location.href=('<?php echo get_permalink(get_page_by_title('Find A Professional')) ?>')"
                >
                Browse <i class="fas fa-search"></i></button>
                <button
                class="btn btn-primary mip-btn"
                id="findProSub"
                onclick="window.location.href=('<?php echo get_permalink(get_page_by_title('Find A Professional')) ?>')"
                type="submit" >
                Search <i class="fas fa-arrow-right"></i></button>
            </div>
        </div>
        <div class="mip-right">
            <div class="mip-image" style="background-image: url(<?php echo get_theme_mod('banner_image'); ?>);">
            </div>
        </div>
    </div>
    <section class="fp-advantages">
        <div class="row">
            <div class="col-sm-12">
                <p class="text-center fp-title">Your Collaborative Dissolution involves four fundamental principles: </p>
                <hr class="fp-hr">
            </div>
        </div>
        <div class="row">
            <div class="fp-adv-col col-sm-1 text-center">
                <div class="icon-bg">
                <i class="fas fa-3x fp-fa fa-ban"></i>
                </div>
            </div>
            <div class="fp-adv-col col-sm-5">
                <p class="feature-title">No Court</p>
                <p class="feature-text">Both spouses and their attorneys commit that they will not take the dispute to court.  This allows everyone to focus on problem solving and reaching agreements rather than litigation.</p>
            </div>
            <div class="fp-adv-col col-sm-1 text-center">
                <div class="icon-bg">
                <i class="fas fa-3x fp-fa fa-user"></i>
                </div>
            </div>
            <div class="fp-adv-col col-sm-5">
                <p class="feature-title">Client Centered</p>
                <p class="feature-text">Each spouse’s personal, family, and financial goals and interests are highlighted and carefully considered as the spouses work toward a resolution on all issues.</p>
            </div>
        </div>
        <div class="row">
            <div class="fp-adv-col col-sm-1 text-center">
                <div class="icon-bg">
                <i class="fas fa-3x fp-fa fa-briefcase"></i>
                </div>
            </div>
            <div class="fp-adv-col col-sm-5">
                <p class="feature-title">Inter-Disciplinary</p>
                <p class="feature-text"> In addition to collaboratively trained attorneys who provide legal guidance, spouses are also able to turn to family relations specialists and financial neutrals to address the family-related and financial issues.</p>
            </div>
            <div class="fp-adv-col col-sm-1 text-center">
                <div class="icon-bg">
                <i class="fas fa-3x fp-fa fa-folder-open"></i>
                </div>
            </div>
            <div class="fp-adv-col col-sm-5">
                <p class="feature-title">Transparency</p>
                <p class="feature-text">There is complete, open and transparent communication between attorneys, other professionals, and spouses.  The spouses commit to sharing all relevant information and documentation.</p>
            </div>
        </div>
    </section>
</body>
<?php get_footer(); ?>
</html>

