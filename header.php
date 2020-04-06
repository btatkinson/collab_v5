
<!-- load scripts -->
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="initial-scale=1.0, width=device-width">
<?php wp_head() ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Lora|LibreFranklin:100,100&display=swap" rel="stylesheet">
<!-- Fontawesome -->
<script src="https://kit.fontawesome.com/523fd0d64e.js" crossorigin="anonymous"></script>
<title>Collaborative Law</title>

<!-- front page nav bar -->
<?php if(is_front_page()) { ?>
    <div class="vanity-bar">

    </div>
    <nav id="main-nav">
    <!-- left aligned logo -->
        <div class="logo">
        <?php if(has_custom_logo()){
            the_custom_logo();
            }else{
                echo "Logo";
            }
        ?>
        
        </div>

    <!-- right aligined page menu -->
        <div class="nav-header-menu">
            <?php
            wp_nav_menu( array( 
                'theme_location' => 'header-menu', 
                'container_class' => 'custom-menu-class header-menu' ) ); 
            ?>
        </div>

    </nav>
<?php } elseif($pagename == "members-area") { ?>
<?php  } elseif($pagename == "event-calendar") { ?>
<?php  } elseif($pagename == "downloads") { ?>
<?php } else { ?>
    <div class="page-container">
        <!-- header image -->
        <div class="header-image" style="background-image: url(<?php echo get_theme_mod('home_image'); ?>);">
        </div>
        <nav id="main-nav">
        <!-- page menu -->
            <div class="nav-main-menu">
            <?php
            wp_nav_menu( array( 
                'theme_location' => 'main-menu', 
                'container_class' => 'custom-menu-class' ) ); 
            ?>
            </div>
        </nav>
        <div class="page-bar">
        </div>
<?php } ?>