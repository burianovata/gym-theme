<?php

function gym_customize_register($wp_customize) {

	/****HEADER SECTION****/
	$wp_customize -> add_section('header', array(
		'title' => __('Header', 'gym-theme'),
		'desctiption' => sprintf(__('Options for header', 'gym-theme')),
		'priority' => 130
	));

	//Header Image
	$wp_customize -> add_setting('header_image', array(
		'default' => get_theme_file_uri('/img/top-banner.jpg'),
		'type' => 'theme_mod'
	));

	$wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'header_image', array(
		'label' => __('Header Image', 'gym-theme'),
		'section' => 'header',
		'settings' => 'header_image'
	)));

	//Header Heading
	$wp_customize -> add_setting('header_heading', array(
		'default' => _x('Build your body strong', 'gym-theme'),
		'type' => 'theme_mod'
	));

	$wp_customize -> add_control('header_heading', array(
		'label' => __('Heading', 'gym-theme'),
		'section' => 'header'
	));

	//Header Description
	$wp_customize -> add_setting('header_descr', array(
		'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					  tempor incididunt ut labore et dolore magna aliqua.',
		'type' => 'theme_mod'
	));

	$wp_customize -> add_control('header_descr', array(
		'label' => __('Description', 'gym-theme'),
		'section' => 'header'
	));

	/****FEATURES SECTION****/
	$wp_customize -> add_section('features', array(
		'title' => __('Features', 'gym-theme'),
		'description' => sprintf(__('Options for Features section', 'gym-theme')),
		'priority' => 131
	));

	//Features image
	$wp_customize -> add_setting('features_image', array(
		'default' => get_theme_file_uri('/img/img-3.jpg'),
		'type' => 'theme_mod'
	));

	$wp_customize -> add_control(new WP_Customize_Image_Control( 
		$wp_customize, 'features_imge', array(
			'label' => __('Features background image', 'gym-theme'),
			'section' => 'features',
			'settings' => 'features_image'
		)));

	//Features Heading
	$wp_customize -> add_setting('features_heading', array(
		'default' => 'Our features',
		'type' => 'theme_mod'
	));

	$wp_customize -> add_control('features_heading', array(
		'label' => __('Heading', 'gym-theme'),
		'section' => 'features'
	));

	//Features description
	$wp_customize -> add_setting('features_descr', array(
		'default' => 'Checkout our fitness classes',
		'type' => 'theme_mod'
	));

	$wp_customize -> add_control('features_descr', array(
		'label' => __('Features description', 'gym-theme'),
		'section' => 'features'
	));

	/****PROGRAMS SECTION****/
	$wp_customize -> add_section('programs', array(
		'title' => __('Programs', 'gym-theme'),
		'desctiption' => sprintf(__('Options for programs', 'gym-theme')),
		'priority' => 132
	)); 

	//Programs Heading
	$wp_customize -> add_setting('programs_heading', array(
		'default' => _x('Our programs', 'gym-theme'),
		'type' => 'theme_mod'
	));
	$wp_customize -> add_control('programs_heading', array(
		'label' => __('Heading', 'gym-theme'),
		'section' => 'programs'
	));

	/****FOOTER SECTION****/
	$wp_customize -> add_section('footer', array(
		'title' => __('Footer', 'gym-theme'),
		'desctiption' => sprintf(__('Options for footer', 'gym-theme')),
		'priority' => 140
	)); 

	//Footer Image
	$wp_customize -> add_setting('footer_image', array(
		'default' => get_theme_file_uri('/img/img-2.png'),
		'type' => 'theme_mod'
	));

	$wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'footer_image', array(
		'label' => __('Footer Image', 'gym-theme'),
		'section' => 'footer',
		'settings' => 'footer_image'
	)));

	//Footer Logo
	$wp_customize -> add_setting('footer_logo', array(
		'default' => get_theme_file_uri('/img/logo.png'),
		'type' => 'theme_mod'
	));

	$wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
		'label' => __('Logo', 'gym-theme'),
		'section' => 'footer',
		'settings' => 'footer_logo'
	)));

	//Footer Description
	$wp_customize -> add_setting('footer_descr', array(
		'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					  tempor incididunt ut labore et dolore magna aliqua.',
		'type' => 'theme_mod'
	));

	$wp_customize -> add_control('footer_descr', array(
		'label' => __('Description', 'gym-theme'),
		'section' => 'footer'
	));

	

}
add_action('customize_register', 'gym_customize_register');