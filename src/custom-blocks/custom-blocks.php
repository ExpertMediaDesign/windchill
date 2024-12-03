<?php
/**
 * Plugin Name:       First Theme Block
 * Plugin URI:        https://expertmedia.design
 * Description:       Trying out a new config for blocks in theme
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Expert Media Design
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       custom-blocks
 *
 * @package EmdBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function emd_blocks_custom_blocks_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'emd_blocks_custom_blocks_block_init' );
