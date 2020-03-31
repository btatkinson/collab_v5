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
</body>
<?php get_footer(); ?>
</html>

