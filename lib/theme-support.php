<?php

function _themename_theme_support() {
  add_theme_support('title-tag');
  add_theme_support('custom-logo', array(
    'height' => 42,
    'width' => 120,
    'flex-height' => true,
    'flex-width' => true
  ));
}

add_action('after_setup_theme', '_themename_theme_support');