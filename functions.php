<?php
/**
 * This file adds functions to the WordPress theme.
 *
 * @package bts
 * @author  Amor Kumar
 * @license GNU General Public License v2 or later
 * @link    https://itsamoreh.dev
 */

namespace itsamoreh\BlockThemeStarter;

if ( ! function_exists( 'setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook.
	 */
	function setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'bts', get_template_directory() . '/languages' );

		// Enqueue editor styles.
		add_editor_style( '/style.css' );

		// Disable loading core block inline styles.
		add_filter( 'should_load_separate_core_block_assets', '__return_false' );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

		// Don't install bundled themes when WordPress updates.
		define( 'CORE_UPGRADE_SKIP_NEW_BUNDLED', true );

	}
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\\setup' );

/**
 * Enqueue theme style sheet.
 */
function enqueue_style_sheet() {

	wp_enqueue_style(
		'bts',
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme( 'bts' )->get( 'Version' )
	);

}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_style_sheet' );

/**
 * Add meta tags.
 */
function add_meta_tags() {
	echo '<meta name="description" content="Block Theme Starter.">';
  }
add_action('wp_head', __NAMESPACE__ . '\\add_meta_tags');

/**
 * Enqueue theme scripts.
 */
function enqueue_script() {

	wp_enqueue_script( 'alpinejs', 'https://cdn.jsdelivr.net/npm/alpinejs@3.12.1/dist/cdn.min.js', array(), null, false );
    wp_script_add_data( 'alpinejs', 'defer', true );

}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_script' );

/**
 * Register block pattern categories.
 */
function register_block_pattern_categories() {
	register_block_pattern_category(
		'heros',
		array( 'label' => __( 'Heros', 'bts' ) )
	);
	register_block_pattern_category(
		'quotes',
		array( 'label' => __( 'Quotes', 'bts' ) )
	);
	register_block_pattern_category(
		'ctas',
		array( 'label' => __( 'CTAs', 'bts' ) )
	);
	register_block_pattern_category(
		'combo',
		array( 'label' => __( 'Combination', 'bts' ) )
	);
	register_block_pattern_category(
		'cards',
		array( 'label' => __( 'Cards', 'bts' ) )
	);
	register_block_pattern_category(
		'pages',
		array( 'label' => __( 'Pages', 'bts' ) )
	);
	register_block_pattern_category(
		'other',
		array( 'label' => __( 'Other', 'bts' ) )
	);
}
add_action( 'init', __NAMESPACE__ . '\\register_block_pattern_categories' );

/**
 * Help admin documentation pages.
 */
include get_template_directory() . '/docs/help-admin-pages.php';

/**
 * Hooks and other includes.
 */
// include get_template_directory() . '/inc/example-include.php';

/**
 * Register custom Gutenberg blocks.
 */
// include get_template_directory() . '/blocks-built/example-block/index.php';
