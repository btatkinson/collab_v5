<?php

function register_menus(){
  register_nav_menus(array(
    'header-menu' => esc_html__('Header Menu'),
    'page-menu' => esc_html__('Page Menu'),
    'footer-menu' => esc_html__('Footer Menu')
  ));
}

add_action('init', 'register_menus')

?>