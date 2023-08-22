<?php

// Enqueue Styles and Scripts
add_action('wp_enqueue_scripts', 'tto_child_enqueue_styles');
function tto_child_enqueue_styles() {
	wp_enqueue_style( 'tto_child-style', get_theme_file_uri('/css/style.css'), ['twenty-twenty-one-style'] );
	wp_enqueue_style( 'tto_child-responsive', get_theme_file_uri('/css/responsive.css'), ['tto_child-style'] );

	wp_enqueue_style( 'tto_child-custom-dev-style', get_theme_file_uri('/css/custom-dev-style.css'), ['tto_child-style'] );	
}