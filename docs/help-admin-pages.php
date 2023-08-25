<?php
/**
 * Add documentation admin pages.
 * New markdown files in /docs will be automatically added.
 */
namespace bts\docs;

// Include the Parsedown library
require_once get_template_directory() . '/lib/Parsedown.php';
use Parsedown;

/**
 * Add documentation admin pages.
 */
function add_admin_page() {
	$docs_dir = get_template_directory() . '/docs';

	// Add the top-level documentation page
	add_menu_page(
		'BTS Documentation',
		'Theme Help',
		'edit_posts',
		'bts-docs-home',
		function() use ( $docs_dir ) {
			$index_file = "$docs_dir/_index.md";
			markdown_to_html( $index_file );
		},
		'dashicons-editor-help',
		null // No position specified
	);

	// Add editor submenu page with rendered documentation
	add_docs_submenu_page( 'bts-docs-home', $docs_dir . "/editors", 'edit_posts' );

	// Add admin submenu page with rendered documentation
	add_docs_submenu_page( 'bts-docs-home', $docs_dir . "/admins", 'switch_themes' );
}
add_action( 'admin_menu', __NAMESPACE__ . '\\add_admin_page' );

/**
 * Adds a submenu page for a given directory.
 *
 * @param string $parent_slug The slug of the parent menu item.
 * @param string $subdir The path to the subdirectory containing the documentation files.
 * @param string $capability The capability required to view the submenu page.
 */
function add_docs_submenu_page( $parent_slug, $subdir, $capability ) {
	// Get the name of the subdirectory
	$subdir_name = basename( $subdir );

	// Add a submenu page for the subdirectory
	add_submenu_page(
		$parent_slug,
		ucwords( str_replace( '-', ' ', $subdir_name ) ),
		ucwords( str_replace( '-', ' ', $subdir_name ) ),
		$capability,
		"bts-docs-$subdir_name",
		function() use ( $subdir ) {
			$index_file = "$subdir/_index.md";
			markdown_to_html( $index_file );
		},
		null // No position specified
	);
}

/**
 * Convert all Markdown files in the same directory as the given index file to HTML and output the HTML.
 *
 * @param string $index_file The path to the _index.md file.
 */
function markdown_to_html( $index_file ) {
	// Get the directory path for the _index.md file
	$dir_path = dirname( $index_file );
	$img_path = get_template_directory_uri() . str_replace( get_template_directory(), '', $dir_path ) . '/img';
	$markdown_files = glob( "$dir_path/*.md" );

	natsort( $markdown_files );

	// Loop through all files in the same directory as the _index.md file
	foreach ( $markdown_files as $file ) {
		// Parse the file and output the HTML
		$file_contents = file_get_contents( $file );
		$file_contents = str_replace( './img/', $img_path . '/', $file_contents );
		$parser = new Parsedown();
		$html = $parser->text( $file_contents );
		$html = str_replace( '<img', '<img loading="lazy"', $html );
		echo wp_kses_post( $html );
	}
}

/**
 * Enqueue docs admin styles.
 */
function add_admin_styles() {
    wp_enqueue_style( 'bts-help-admin-styles', get_template_directory_uri() . '/docs/help-style.css' );
}
add_action( 'admin_enqueue_scripts', __NAMESPACE__ . '\\add_admin_styles' );
