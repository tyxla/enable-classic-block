<?php
/**
 * Plugin Name:       Enable Classic Block
 * Description:       Makes the Classic block available in the inserter.
 * Version:           1.0.0
 * Requires at least: 6.9
 * Requires PHP:      7.4
 * Author:            tyxla
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package enable-classic-block
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit( 0 );
}

add_filter( 'gutenberg_classic_block_supports_inserter', '__return_true' );
