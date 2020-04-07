<?php 

function enqueue_css() {
  
    wp_enqueue_style( 'about-page', get_template_directory_uri() . '/assets/css/about-page.css' );
    wp_enqueue_style( 'faq', get_template_directory_uri() . '/assets/css/faq.css' );
    wp_enqueue_style( 'footer', get_template_directory_uri() . '/assets/css/footer.css' );
    wp_enqueue_style( 'get-started', get_template_directory_uri() . '/assets/css/get-started.css' );
    wp_enqueue_style( 'header', get_template_directory_uri() . '/assets/css/header.css' );
    wp_enqueue_style( 'home', get_template_directory_uri() . '/assets/css/home.css' );
    wp_enqueue_style( 'members-area', get_template_directory_uri() . '/assets/css/members-area.css' );
    wp_enqueue_style( 'mw', get_template_directory_uri() . '/assets/css/mw.css' );
    
  
}

function enqueue_js() {

    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js' );
    wp_enqueue_script( 'home', get_template_directory_uri() . '/assets/js/home.js', array( 'jquery' ) );
    wp_enqueue_script( 'getstarted', get_template_directory_uri() . '/assets/js/getstarted.js', array( 'jquery' ) );
    wp_enqueue_script( 'findpro', get_template_directory_uri() . '/assets/js/findpro.js', array( 'jquery' ) );
    
}
  
add_action('wp_enqueue_scripts', 'enqueue_css');
add_action('wp_enqueue_scripts', 'enqueue_js');

?>