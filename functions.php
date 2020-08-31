<?php
/**
 * CommunityConf2020 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CommunityConf2020
 */

if ( ! defined( 'COMMCONF_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'COMMCONF_VERSION', '1.1' );
}

if ( ! function_exists( 'communityconf2020_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function communityconf2020_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on CommunityConf2020, use a find and replace
		 * to change 'communityconf2020' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'communityconf2020', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'communityconf2020' ),
				'footer-1' => esc_html__( 'Footer 1', 'communityconf2020' ),
				'footer-2' => esc_html__( 'Footer 2', 'communityconf2020' ),
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
				'communityconf2020_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 360,
				'width'       => 60,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		/**
		 * Add support for Default block Styles
		 * 
		 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#default-block-styles
		 */

		add_theme_support( 'wp-block-styles' );

		/**
		 * Add support for wide alignment
		 * 
		 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#wide-alignment
		 */
			
		add_theme_support( 'align-wide' );

	}
endif;
add_action( 'after_setup_theme', 'communityconf2020_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function communityconf2020_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'communityconf2020_content_width', 640 );
}
add_action( 'after_setup_theme', 'communityconf2020_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function communityconf2020_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'communityconf2020' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add sidebar widgets here.', 'communityconf2020' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 1', 'communityconf2020' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add footer widgets here.', 'communityconf2020' ),
			'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="footer-widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 2', 'communityconf2020' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add footer widgets here.', 'communityconf2020' ),
			'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="footer-widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 3', 'communityconf2020' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add footer widgets here.', 'communityconf2020' ),
			'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="footer-widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'communityconf2020_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function communityconf2020_scripts() {
	wp_enqueue_style( 'communityconf2020-fonts', "https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Saira:wght@400;600;800&display=swap", array(), '001', 'all' );
	wp_enqueue_style( 'communityconf2020-style', get_stylesheet_uri(), array(), '04' );
	wp_style_add_data( 'communityconf2020-style', 'rtl', 'replace' );

	wp_enqueue_script( 'communityconf2020-navigation', get_template_directory_uri() . '/js/navigation.js', array(), COMMCONF_VERSION, true );
	
	if ( is_page( 69 ) ) {
		wp_enqueue_script( 'communityconf2020-agenda', get_template_directory_uri() . '/js/agenda.js', array(), COMMCONF_VERSION, true );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
		wpcf7_enqueue_scripts();
	}
}
add_action( 'wp_enqueue_scripts', 'communityconf2020_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Custom Post Types (CPT)
 */
require get_template_directory() . '/inc/cpt/comunidades.php';

/**
 * CommunityConf Agenda
 */
require get_template_directory() . '/inc/agenda.php';

/**
 * Editor Styles
 */
add_theme_support( 'editor-styles' );
add_editor_style( 'style-editor.css' );

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Load ACF files
 */
if( class_exists('ACF') ) {
	require get_template_directory() . '/inc/acf.php';
}

/**
 * Change placehoder for Custom Post Type Title
 */
function comconf_change_title_text( $title ){
	$screen = get_current_screen();

	if  ( 'comunidades' == $screen->post_type ) {
			 $title = 'Nombre de Comunidad';
	}

	return $title;
}

add_filter( 'enter_title_here', 'comconf_change_title_text' );

/**
 * Loading JavaScript and stylesheet only when it is necessary
 */

add_filter( 'wpcf7_load_js', '__return_false' );

add_filter( 'wpcf7_load_css', '__return_false' );
