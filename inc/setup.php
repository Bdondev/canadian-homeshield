<?php
/**
 * Theme setup and WordPress supports.
 *
 * @package CanadianHomeShield
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function canadian_homeshield_setup() {
	load_theme_textdomain( 'canadian-homeshield', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array(
		'height'      => 80,
		'width'       => 320,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

	register_nav_menus( array(
		'primary' => __( 'Primary navigation', 'canadian-homeshield' ),
	) );
}
add_action( 'after_setup_theme', 'canadian_homeshield_setup' );
