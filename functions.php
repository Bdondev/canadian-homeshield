<?php
/**
 * Canadian HomeShield theme bootstrap.
 *
 * @package CanadianHomeShield
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$canadian_homeshield_modules = array(
	'/inc/setup.php',
	'/inc/enqueue.php',
	'/inc/navigation.php',
	'/inc/acf-helpers.php',
);

foreach ( $canadian_homeshield_modules as $canadian_homeshield_module ) {
	require_once get_template_directory() . $canadian_homeshield_module;
}
