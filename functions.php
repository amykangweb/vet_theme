<?php

  function theme_styles() {

    wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
  }

  add_action('wp_enqueue_scripts', 'theme_styles');

  function theme_js() {

    wp_register_script('main_js', get_template_directory_uri() . '/app.js');
  }

  add_action('wp_enqueque_scripts', 'theme_js');

?>
