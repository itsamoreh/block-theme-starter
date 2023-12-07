<?php
/**
 * Disable Openverse media integration.
 */

namespace bts;

/**
 * Remove Openverse media integration.
 *
 * @param array $editor_settings Default editor settings.
 *
 * @return array Filtered editor settings.
 */
function disable_openverse( $editor_settings ) {
	$editor_settings['enableOpenverseMediaCategory'] = false;

	return $editor_settings;
}
add_filter( 'block_editor_settings_all', __NAMESPACE__ . '\\disable_openverse', 10, 1 );
