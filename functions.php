<?php
/**
 * Canadian HomeShield theme setup and frontend assets.
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

function canadian_homeshield_enqueue_assets() {
	$stylesheet_path = get_template_directory() . '/dist/tailwind.css';
	$stylesheet_uri  = get_template_directory_uri() . '/dist/tailwind.css';

	wp_enqueue_style(
		'canadian-homeshield-tailwind',
		$stylesheet_uri,
		array(),
		file_exists( $stylesheet_path ) ? filemtime( $stylesheet_path ) : '0.1.0'
	);
}
add_action( 'wp_enqueue_scripts', 'canadian_homeshield_enqueue_assets' );

/**
 * Read an ACF field without requiring ACF to be active.
 *
 * @param string $selector Field name.
 * @param mixed  $default  Fallback value.
 * @return mixed
 */
function canadian_homeshield_field( $selector, $default = '' ) {
	if ( ! function_exists( 'get_field' ) ) {
		return $default;
	}

	$value = get_field( $selector );

	return ( false === $value || null === $value || '' === $value ) ? $default : $value;
}

/**
 * Normalize an ACF image field to an attachment ID.
 *
 * @param mixed $image ACF image value.
 * @return int
 */
function canadian_homeshield_image_id( $image ) {
	if ( is_numeric( $image ) ) {
		return absint( $image );
	}

	if ( is_array( $image ) && ! empty( $image['ID'] ) ) {
		return absint( $image['ID'] );
	}

	return 0;
}
