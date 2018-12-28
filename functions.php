<?php

function gym_theme_setup() {
	add_theme_support('post-thumbnails');
	add_image_size('class_horizontal', 605, 340, true);
	add_image_size('class_vertical', 315, 550, true);
}
add_action('after_setup_theme', 'gym_theme_setup');

function gym_theme_styles() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.6.1/css/all.css');
	wp_enqueue_style( 'main-css', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'gym_theme_styles');

function gym_post_types() {
	//Class Post Type
	register_post_type('class', array(
		'rewrite' => array('slug' => 'classes'),
		'has_archive' => true,
		'public' => true,
		'labels' => array(
			'name' => 'Classes',
			'add_new_item' => 'Add New Class',
			'edit_item' => 'Edit Class',
			'all_items' => 'All Classes',
			'singular_name' => 'Class'
		),
		'menu_icon' => 'dashicons-universal-access',
		'supports' => array( 
			'title',
			'editor',
			'thumbnail' 
		),
		'taxonomies' => array( 'category' )
	));

	//Program Post Type
	register_post_type('programs', array(
		'has_archive' => true,
		'public' => true,
		'labels' => array(
			'name' => 'Programs',
			'add_new_item' => 'Add New Program',
			'edit_item' => 'Edit Program',
			'all_items' => 'All Programs',
			'singular_name' => 'Program'
		),
		'menu_icon' => 'dashicons-clipboard',
		'supports' => array( 
			'title',
			'editor',
			'thumbnail' 
		)
	));

	//Feature Post Type
	register_post_type('feature', array(
		'rewrite' => array('slug' => 'features'),
		'has_archive' => true,
		'public' => true,
		'labels' => array(
			'name' => 'Features',
			'add_new_item' => 'Add New Feature',
			'edit_item' => 'Edit Feature',
			'all_items' => 'All Features',
			'singular_name' => 'Feature'
		),
		'menu_icon' => 'dashicons-universal-access'
	));
}
add_action('init', 'gym_post_types');

//Customizer File
require get_template_directory() . '/inc/customizer.php';