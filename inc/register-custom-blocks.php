<?php
/**
 * Register custom Gutenberg blocks.
 *
 * Automatically register all built blocks via block.json metadata.
 */
function register_custom_blocks() {
	$built_blocks_metadata = glob( get_template_directory() . '/build/blocks/*/block.json' );

	foreach ( $built_blocks_metadata as $block_metadata ) {
		register_block_type( $block_metadata );
	}
}
add_action( 'init', __NAMESPACE__ . '\\register_custom_blocks' );
