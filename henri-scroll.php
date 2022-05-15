<?php
/**
 * @package Henri-Scroll
 */
/*
Plugin Name: Henri Scroll
Plugin URI: https://github.com/
Description: Henri Scroll
Version: 0.1
Author: Henri
Author URI: https://github.com/henrisusanto/
License: GPLv2 or later
Text Domain: henri-scroll
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
*/

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

add_shortcode( 'henri_scroll_shortcode', function () {
	wp_enqueue_style( 'henri_scroll_style', plugin_dir_url(__FILE__) . 'henri-scroll.css', false, '1.0.0', 'all');
	add_action( 'wp_enqueue_scripts', function () {
		wp_enqueue_script( 'henri_scroll_script', plugin_dir_url(__FILE__) . 'henri-scroll.js', array() );
	});
	return "
	<div class=\"henri-progress-box\">
		<div id=\"henri-progress-bar\"></div>
		<p class=\"text-to-scroll\"><b id=\"text\">Scroll to continue</b></p>
	</div>
	";
} );