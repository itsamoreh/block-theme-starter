<?php
/**
 * This file adds functions to the WordPress theme.
 *
 * @package bts
 * @author  Amor Kumar
 * @license GNU General Public License v2 or later
 * @link    https://itsamoreh.dev
 */

namespace bts;

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

		// Disable loading core block inline styles.
		add_filter( 'should_load_separate_core_block_assets', '__return_true' );

		// Remove the block directory.
		remove_action( 'enqueue_block_editor_assets', 'wp_enqueue_editor_block_directory_assets' );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

		// Don't install bundled themes when WordPress updates.
		define( 'CORE_UPGRADE_SKIP_NEW_BUNDLED', true );

	}
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\\setup' );

/**
 * Enqueue theme frontend scripts and styles.
 */
function enqueue_frontend_scripts() {

	$dir = dirname( __FILE__ );

	// Register and enqueue frontend scripts.
    $frontend_script_asset_path = "$dir/build/assets/frontend.asset.php";

	if ( ! file_exists( $frontend_script_asset_path ) ) {
        throw new \Error(
            'Missing frontend script assets! Please follow the setup instructions in the theme README.md.'
        );
    }

	$frontend_script_asset = require( $frontend_script_asset_path );

	wp_register_script(
		'bts-frontend-js',
		get_template_directory_uri() . '/build/assets/frontend.js',
		$frontend_script_asset['dependencies'],
		$frontend_script_asset['version'],
	);

	wp_register_style(
		'bts-frontend-css',
		get_template_directory_uri() . '/build/assets/frontend.css',
		[],
		$frontend_script_asset['version'],
	);

	wp_enqueue_script( 'bts-frontend-js' );
	wp_enqueue_style( 'bts-frontend-css' );

}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_frontend_scripts' );

/**
 * Enqueue theme editor scripts and styles.
 */
function enqueue_editor_scripts() {

	$dir = dirname( __FILE__ );
    $editor_script_asset_path = "$dir/build/assets/editor.asset.php";

	if ( ! file_exists( $editor_script_asset_path ) ) {
        throw new \Error(
            'You need to build the theme\'s assets by running `npm build`!'
        );
    }

	$editor_script_asset = require( $editor_script_asset_path );

	wp_register_script(
		'bts-editor-js',
		get_template_directory_uri() . '/build/assets/editor.js',
		$editor_script_asset['dependencies'],
		$editor_script_asset['version'],
	);

	wp_enqueue_script( 'bts-editor-js' );
	add_editor_style( '/build/assets/editor.css' );
}
add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\\enqueue_editor_scripts' );

/**
 * Help admin documentation pages.
 */
include get_template_directory() . '/docs/help-admin-pages.php';

/**
 * Hooks and other includes.
 *
 * include get_template_directory() . '/inc/example-include.php';
 */
include get_template_directory() . '/inc/reset/core-block-styles.php';
include get_template_directory() . '/inc/reset/openverse.php';
include get_template_directory() . '/inc/register-custom-blocks.php';
