<?php
/**
 * Frontend assets.
 *
 * @package CanadianHomeShield
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function canadian_homeshield_enqueue_assets() {
	$stylesheet_path = get_template_directory() . '/dist/tailwind.css';
	$stylesheet_uri  = get_template_directory_uri() . '/dist/tailwind.css';

	wp_enqueue_style(
		'canadian-homeshield-tailwind',
		$stylesheet_uri,
		array(),
		file_exists( $stylesheet_path ) ? filemtime( $stylesheet_path ) : '0.1.0'
	);

	wp_enqueue_script(
		'canadian-homeshield-services',
		get_template_directory_uri() . '/assets/js/services.js',
		array(),
		filemtime( get_template_directory() . '/assets/js/services.js' ),
		true
	);

	wp_enqueue_script(
		'canadian-homeshield-testimonials',
		get_template_directory_uri() . '/assets/js/testimonials.js',
		array(),
		filemtime( get_template_directory() . '/assets/js/testimonials.js' ),
		true
	);

	wp_enqueue_script(
		'canadian-homeshield-team',
		get_template_directory_uri() . '/assets/js/team.js',
		array(),
		filemtime( get_template_directory() . '/assets/js/team.js' ),
		true
	);

	wp_enqueue_script(
		'canadian-homeshield-partners',
		get_template_directory_uri() . '/assets/js/partners.js',
		array(),
		filemtime( get_template_directory() . '/assets/js/partners.js' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'canadian_homeshield_enqueue_assets' );
