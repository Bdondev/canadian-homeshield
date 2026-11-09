<?php
/**
 * ACF compatibility helpers.
 *
 * @package CanadianHomeShield
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

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
