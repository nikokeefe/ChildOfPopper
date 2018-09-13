<?php

function popper_child_setup() {
  // Prepare theme for translation
  load_child_theme_textdomain( 'popper-child', get_stylesheet_directory() . '/languages' );
}

add_action( 'after_setup_theme', 'popper_child_setup');
