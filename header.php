<?php
/**
 * Site header.
 *
 * @package CanadianHomeShield
 */

$header_phone     = canadian_homeshield_field( 'header_phone', '1-800-858-1922' );
$header_cta_label = canadian_homeshield_field( 'header_cta_label', 'Get Free Estimate' );
$header_cta_url   = canadian_homeshield_field( 'header_cta_url', '#estimate-form' );
$custom_logo_id   = get_theme_mod( 'custom_logo' );
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-white text-hs-navy antialiased' ); ?>>
<?php wp_body_open(); ?>
<a class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-50 focus:bg-white focus:px-4 focus:py-3 focus:text-hs-navy" href="#main-content">
	<?php esc_html_e( 'Skip to content', 'canadian-homeshield' ); ?>
</a>

<header class="mx-auto w-[calc(100%_-_20px)] max-w-none rounded-t-[30px] bg-hs-cream px-2 pb-2 pt-4 sm:px-3 lg:px-4 lg:pt-5">
	<div class="rounded-full bg-white px-5 py-3 shadow-[0_1px_0_rgba(36,24,107,0.03)] sm:px-8 lg:px-10">
		<div class="flex items-center justify-between gap-5">
			<nav class="hidden min-w-0 flex-1 items-center gap-7 lg:flex" aria-label="<?php esc_attr_e( 'Primary navigation', 'canadian-homeshield' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container'      => false,
						'fallback_cb'    => 'canadian_homeshield_primary_menu_fallback',
						'menu_class'     => 'flex items-center gap-7 text-[13px] font-semibold text-hs-navy',
					)
				);
				?>
			</nav>

			<a class="shrink-0" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
				<?php if ( $custom_logo_id ) : ?>
					<?php echo wp_get_attachment_image( $custom_logo_id, 'full', false, array( 'class' => 'h-auto w-[150px] lg:w-[166px]', 'alt' => get_bloginfo( 'name' ) ) ); ?>
				<?php else : ?>
					<img class="h-auto w-[150px] lg:w-[166px]" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/american_home_shield_logo.png' ) ); ?>" alt="<?php esc_attr_e( 'American Home Shield', 'canadian-homeshield' ); ?>">
				<?php endif; ?>
			</a>

			<div class="hidden flex-1 items-center justify-end gap-3 lg:flex">
				<a class="inline-flex items-center gap-2 whitespace-nowrap text-[15px] font-semibold text-hs-navy focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-navy focus-visible:ring-offset-2" href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $header_phone ) ); ?>">
					<img class="h-4 w-4 object-contain" src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/phone_icon.png' ) ); ?>" alt="" aria-hidden="true">
					<?php echo esc_html( $header_phone ); ?>
				</a>
				<a class="inline-flex items-center gap-3 rounded-full bg-hs-yellow px-5 py-3 text-[13px] font-bold text-slate-950 transition hover:brightness-95 focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-navy focus-visible:ring-offset-2" href="<?php echo esc_url( $header_cta_url ); ?>">
					<?php echo esc_html( $header_cta_label ); ?>
					<span class="grid h-7 w-7 place-items-center rounded-full bg-hs-navy leading-none text-white" aria-hidden="true">
						<svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" aria-hidden="true">
							<path d="M6 18 18 6M10 6h8v8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</span>
				</a>
			</div>

			<details class="mobile-menu relative lg:hidden">
				<summary class="mobile-menu-summary cursor-pointer list-none text-hs-navy focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-navy focus-visible:ring-offset-2" aria-label="<?php esc_attr_e( 'Navigation menu', 'canadian-homeshield' ); ?>">
					<span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'canadian-homeshield' ); ?></span>
					<span class="mobile-menu-bars" aria-hidden="true"><span></span><span></span><span></span></span>
				</summary>
				<div class="mobile-menu-panel absolute z-30 rounded-2xl border border-hs-line bg-white shadow-xl">
					<nav aria-label="<?php esc_attr_e( 'Mobile primary navigation', 'canadian-homeshield' ); ?>">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary',
								'container'      => false,
								'fallback_cb'    => 'canadian_homeshield_primary_menu_fallback',
								'menu_class'     => 'space-y-4 text-sm font-semibold text-hs-navy',
							)
						);
						?>
					</nav>
					<a class="mt-5 flex items-center justify-center rounded-full bg-hs-yellow px-4 py-3 text-sm font-bold text-slate-950 focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-navy focus-visible:ring-offset-2" href="<?php echo esc_url( $header_cta_url ); ?>">
						<?php echo esc_html( $header_cta_label ); ?>
					</a>
				</div>
			</details>
		</div>
	</div>
</header>
