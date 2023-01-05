<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SMNTCS VT100
 * @since 1.0
 */

// Load the TGMPA library.
require_once get_template_directory() . '/assets/tgm/class-tgm-plugin-activation.php';

/**
 * Enqueue the style.css file.
 *
 * @since 1.0
 */
function smntcs_vt100_styles() {
	wp_enqueue_style( 'smntcs-vt100-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'smntcs_vt100_styles' );

/**
 * Suggestions for plugin(s) to install.
 */
function smntcs_vt100_register_suggested_plugins() {
	$plugins = array(
		array(
			'name'     => 'Code Syntax Block',
			'slug'     => 'code-syntax-block',
			'required' => false,
		),
	);

	$config = array(
		'id'           => 'my-theme',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'parent_slug'  => 'themes.php',
		'capability'   => 'edit_theme_options',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => false,
		'message'      => '',
	);

	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'smntcs_vt100_register_suggested_plugins' );
