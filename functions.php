<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function pebenergy_setup()
{

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-main' => esc_html__('Primary', 'pebenergy'),
			'footer-menu-left' => __('Footer Links')
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'pebenergy_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'pebenergy_setup');

/**
 * Enqueue scripts and styles.
 */
function pebenergy_scripts()
{
	if ( ! defined( '_S_VERSION' ) ) {
		define( '_S_VERSION', '1.0.0' );
	}
	wp_enqueue_style('pebenergy-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_enqueue_script('pebenergy-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), _S_VERSION, true);
	wp_localize_script('pebenergy-scripts', 'WPURLS', array( 'siteurl' => get_option('siteurl') ));
	wp_enqueue_script('pebenergy-navigation-script', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true);
	wp_localize_script('pebenergy-navigation-script', 'pebenergy_scripts', array('templateUrl' => get_stylesheet_directory_uri()));
	wp_enqueue_script('pebenergy-circle-animation-script', get_template_directory_uri() . '/assets/js/circle-animation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'pebenergy_scripts');

/**
 * Customizer Code HERE
 */

add_action('customize_register', 'theme_footer_customizer');
function theme_footer_customizer($wp_customize)
{
	//adding section in wordpress customizer   
	$wp_customize->add_section('footer_settings_section', array(
		'title'          => 'Footer Information'
	));
	//adding settings for footer text area
	$wp_customize->add_setting('footer_settings_text', array(
		'default'        => 'Footer Text',
	));
	$wp_customize->add_control('footer_settings_text', array(
		'label'   => 'Footer Text',
		'section' => 'footer_settings_section',
		'type'    => 'textarea',
	));
}

function filter_site_upload_size_limit( $size ) {
return 1024 * 1024 * 32;
}
add_filter( 'upload_size_limit', 'filter_site_upload_size_limit', 20 );