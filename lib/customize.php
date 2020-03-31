<?php 


function cl_customize_register( $wp_customize ) {
  
    // home page image
  
    // following line was used to change image, but created error. probably not necessary.
    // $wp_customize->get_setting( '_themename_home_image' )->transport = 'postMessage';
  
    // Add and manipulate theme images to be used.
    $wp_customize->add_section('home', array(
      "title" => 'Home Page',
      "priority" => 28,
      "description" => __( 'Upload image to display on the homepage.')
    ));
  
    $wp_customize->add_setting('home_image', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
    ));
  
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'home_image', array(
      'label' => __( 'Featured Home Page Image'),
      'section' => 'home',
      'settings' => 'home_image',
    )));
  
    $wp_customize->add_setting('banner_image', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
    ));
  
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'banner_image', array(
      'label' => __( 'Featured Home Page Banner Image'),
      'section' => 'home',
      'settings' => 'banner_image',
    )));
  }
  
  add_action('customize_register', 'cl_customize_register');



?>