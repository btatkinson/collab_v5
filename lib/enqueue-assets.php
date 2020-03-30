<?php 

function enqueue_assets() {
  
    wp_enqueue_style( 'header', get_template_directory_uri() . '/assets/css/header.css' );
  
}
  
add_action('wp_enqueue_scripts', 'enqueue_assets');
  

?>