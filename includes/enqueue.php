<?php
/**
 * config/enqueue.php
 *
 * Enqueues scripts and styles.
 *
 * @package gramophone
 **/

function gramophone_styles() {

	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/static/css/bootstrap.min.css' );
	wp_enqueue_style( 'demo_theme_css', get_template_directory_uri() . '/static/css/app.css' );

	// Add more...
}
add_action( 'wp_enqueue_scripts', 'gramophone_styles' );

function gramophone_js() {

	global $wp_scripts;

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', false, '3.2.1' );

	wp_enqueue_script( 'tether_js', get_template_directory_uri() . '/static/js/tether.min.js', array(), '1.3.7', true );
	wp_enqueue_script( 'popper_js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js' );
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/static/js/bootstrap.min.js', array( 'jquery', 'tether_js' ), '', true );
	wp_enqueue_script( 'app_js', get_template_directory_uri() . '/static/js/app.js', array( 'jquery' ), '', true );

	// Add more...
}
add_action( 'wp_enqueue_scripts', 'gramophone_js' );
