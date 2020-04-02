<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora|LibreFranklin:100,100&display=swap" rel="stylesheet">
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/523fd0d64e.js" crossorigin="anonymous"></script>
    <title>Collaborative Law</title>
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
        <div class="col-lg-4 fp-portrait-col">
        <div class="fp-box d-flex align-items-bottom" style="background-image: url(<?php echo get_theme_mod('_themename_banner_image'); ?>);">
        </div>
        </div>
    </div>
</body>
<?php get_footer(); ?>
</html>

