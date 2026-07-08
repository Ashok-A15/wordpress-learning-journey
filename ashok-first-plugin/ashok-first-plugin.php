<?php
/**
 * Plugin Name: Ashok First Plugin
 * Plugin URI: https://github.com/Ashok-A15
 * Description: My first WordPress plugin.
 * Version: 1.0.0
 * Author: Ashok
 * License: GPL2+
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function ashok_footer_message() {
	echo '<p style="text-align:center;padding:15px;color:#0073aa;font-weight:bold;">Hello from Ashok First Plugin! 🚀</p>';
}

add_action( 'wp_footer', 'ashok_footer_message' );