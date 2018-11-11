<?php
	if(!isset($content_width)){
		$content_width = 660;
	}

	function tierraztecawp_setup(){
		add_theme_support('post-thumbnails');
		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');
		
		require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
		
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'THEMENAME' ),
		) );
	}

	add_action('after_setup_theme', 'tierraztecawp_setup');

	function tierrazteca_scripts(){
		wp_enqueue_style('tierrazteca', get_template_directory_uri() . '/style.css');
		wp_enqueue_script('tierrazteca', get_template_directory_uri() . '/js/app.js');
	}

	add_action('wp_enqueue_scripts', 'tierrazteca_scripts');
?>