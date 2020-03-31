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
            'container_class' => 'custom-menu-class' ) ); 
        ?>
    </div>

</nav>