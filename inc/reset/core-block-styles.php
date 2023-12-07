<?php
/**
 * Remove all core block styles.
 *
 * Start from scratch for full control of block style options.
 */

namespace bts;

/**
 * Reset all core block styles.
 *
 * @param array $settings Array of block settings.
 *
 * @return array Settings after modifications.
 */
function reset_core_block_styles( $settings ) {
	if ( empty( $settings['styles'] ) ) {
		return $settings;
	}

	// Reset all block styles.
	$settings['styles'] = [];

	return $settings;
}

add_filter( 'block_type_metadata_settings', __NAMESPACE__ . '\\reset_core_block_styles', 10, 1 );
