<?php
/**
 * Functions.php
 *
 * @package  Theme_Customisations
 * @author   WooThemes
 * @since    1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * functions.php
 * Add PHP snippets here
 */

// WordPress Core - Unauthenticated Blind SSRF
// Use of the vulnerable construct in the pingback feature
// https://www.sonarsource.com/blog/wordpress-core-unauthenticated-blind-ssrf/

add_filter('xmlrpc_methods', function($methods) {
  unset($methods['pingback.ping']); 
  return $methods; 
});
