<?php
/* Include CSS */
function load_css()
{
	wp_enqueue_style('style', get_stylesheet_uri() );
	wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min',false);
	wp_enqueue_style('line-icons', get_template_directory_uri() . '/assets/css/LineIcons.3.0',false);
	wp_enqueue_style('tiny-slider', get_template_directory_uri() . '/assets/css/tiny-slider',false);
	wp_enqueue_style('glightbox', get_template_directory_uri() . '/assets/css/glightbox.min',false);
	wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css',false);
}
add_action('wp_enqueue_scripts', 'load_css');

/* Include JS */
function load_js()
{
	wp_enqueue_script('bootstrap-min', get_template_directory_uri() . '/assets/js/bootstrap.min', array(), false, true );
	wp_enqueue_script('tiny-slider', get_template_directory_uri() . '/assets/js/tiny-slider', array(), false, true );
	wp_enqueue_script('glightbox', get_template_directory_uri() . '/assets/js/glightbox.min', array(), false, true );
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main', array(), false, true );
}
add_action('wp_enqueue_scripts', 'load_js');

/* Login */
function login_redirect()
{
    wp_redirect('product');
    exit();
}
add_action('wp_login', 'login_redirect');

/* Logout */
function logout_redirect() 
{
    wp_redirect(site_url());
    exit();
}
add_action('wp_logout', 'logout_redirect');