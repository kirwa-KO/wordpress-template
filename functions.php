<?php

	function add_style_file() {
		wp_enqueue_style('my-bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
		wp_enqueue_style('my-font-awesome', get_template_directory_uri() . '/css/font-awesome.css');
		wp_enqueue_style('my-main', get_template_directory_uri() . '/css/main.css');
	}

	function add_scripts_file() {
		// wp_enqueue_script("jquery-js", get_template_directory_uri() . '/js/jquery-3.2.1.slim.min.js', array(), false, true);
		wp_enqueue_script("popper-js", get_template_directory_uri() . '/js/popper.min.js', array(), false, true);
		// wp_enqueue_script("jquery");
		// wp_enqueue_script("bootstrap-js", get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true);
		wp_enqueue_script("main-js", get_template_directory_uri() . '/js/main.js', array(), false, true);
		
		wp_deregister_script("jquery"); // remove registration for old jquery
		wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, '', true); // register the new jquery
		wp_enqueue_script('jquery'); 

		wp_enqueue_script("bootstrap-js", get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true);
	}

	add_action('wp_enqueue_scripts', 'add_style_file');
	add_action('wp_enqueue_scripts', 'add_scripts_file');

	function add_custom_menu() {
		register_nav_menu('bootstrap-meun', __('Bootstrap Navigation Bar'));
	}

	add_action('init', 'add_custom_menu');