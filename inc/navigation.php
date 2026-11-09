<?php
/**
 * Navigation helpers.
 *
 * @package CanadianHomeShield
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Render the reference navigation until a custom WordPress menu is assigned.
 *
 * @param object $args Menu arguments.
 */
function canadian_homeshield_primary_menu_fallback( $args ) {
	$menu_class = is_object( $args ) ? $args->menu_class : ( $args['menu_class'] ?? '' );
	$items = array(
		array( 'label' => __( 'Home', 'canadian-homeshield' ), 'url' => home_url( '/' ), 'arrow' => false ),
		array( 'label' => __( 'Services', 'canadian-homeshield' ), 'url' => home_url( '/#services' ), 'arrow' => true ),
		array( 'label' => __( 'Service Areas', 'canadian-homeshield' ), 'url' => home_url( '/#service-areas' ), 'arrow' => true ),
		array( 'label' => __( 'Contact', 'canadian-homeshield' ), 'url' => home_url( '/#contact' ), 'arrow' => false ),
	);

	echo '<ul class="' . esc_attr( $menu_class ) . '">';
	foreach ( $items as $item ) {
		echo '<li class="menu-item">';
		echo '<a class="inline-flex items-center gap-1 transition-colors hover:text-hs-navy focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-navy focus-visible:ring-offset-2" href="' . esc_url( $item['url'] ) . '">';
		echo esc_html( $item['label'] );
		if ( $item['arrow'] ) {
			echo '<span aria-hidden="true" class="text-xs">⌄</span>';
		}
		echo '</a></li>';
	}
	echo '</ul>';
}
