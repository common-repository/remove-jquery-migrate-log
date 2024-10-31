<?php
/**
 * Plugin Name: Remove Jquery Migrate Log
 * Description: Remove Jquery Migrate (JQMIGRATE) is in Console Log
 * Version: 1.0.0
 * Author: Henry Me
 * Author URI: http://henryme.com/
 */
if ( ! function_exists('rid_remove_jqmigrate_console_log') ) {
	function rid_remove_jqmigrate_console_log( $scripts ) {
		if ( ! empty( $scripts->registered['jquery'] ) ) {
	        $scripts->registered['jquery']->deps = array_diff( $scripts->registered['jquery']->deps, array( 'jquery-migrate' ) );
	    }
	}
	add_action( 'wp_default_scripts', 'rid_remove_jqmigrate_console_log' );
}