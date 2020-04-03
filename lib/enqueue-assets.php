<?php 

function enqueue_css() {
  
    wp_enqueue_style( 'about', get_template_directory_uri() . '/assets/css/about.css' );
    wp_enqueue_style( 'header', get_template_directory_uri() . '/assets/css/header.css' );
    wp_enqueue_style( 'home', get_template_directory_uri() . '/assets/css/home.css' );
    wp_enqueue_style( 'footer', get_template_directory_uri() . '/assets/css/footer.css' );
  
}

function enqueue_js() {

    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js' );
    wp_enqueue_script( 'home', get_template_directory_uri() . '/assets/js/home.js', array( 'jquery' ) );
  
}
  
add_action('wp_enqueue_scripts', 'enqueue_css');
add_action('wp_enqueue_scripts', 'enqueue_js');

?>