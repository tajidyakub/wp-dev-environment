<?php
declare(strict_types=1);
/**
 * _s functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _replace_this
 */

if ( ! function_exists( '_replace_this_setup' ) ) :
	function _replace_this_setup() {
		load_theme_textdomain( '_replace_this', get_template_directory() . '/languages' );
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		// Enable title-tag
		add_theme_support( 'title-tag' );
		// Enable post-thumbnails
		add_theme_support( 'post-thumbnails' );
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-main-nav' => esc_html__( 'Primary', '_replace_this' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( '_replace_this_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', '_replace_this_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function _replace_this_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', '_replace_this' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', '_replace_this' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', '_replace_this_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function _replace_this_scripts() {
	wp_enqueue_style( '_replace_this-style', get_stylesheet_uri() );
	wp_enqueue_script( '_replace_this-navigation', get_template_directory_uri() . '/scripts/app.js', array(), '20180208', true );
}
add_action( 'wp_enqueue_scripts', '_replace_this_scripts' );

