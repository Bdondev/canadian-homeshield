<?php
/**
 * Site header.
 *
 * @package CanadianHomeShield
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-white text-slate-950 antialiased' ); ?>>
<?php wp_body_open(); ?>
<a class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-50 focus:bg-white focus:px-4 focus:py-3 focus:text-slate-950" href="#main-content">
	<?php esc_html_e( 'Skip to content', 'canadian-homeshield' ); ?>
</a>

<header class="border-b border-slate-200 bg-white">
	<div class="mx-auto flex max-w-7xl items-center justify-between gap-6 px-5 py-5 sm:px-8 lg:px-10">
		<div class="shrink-0">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a class="text-xl font-bold tracking-tight text-slate-950" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
				</a>
			<?php endif; ?>
		</div>

		<nav class="hidden items-center gap-8 lg:flex" aria-label="<?php esc_attr_e( 'Primary navigation', 'canadian-homeshield' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => false,
					'fallback_cb'    => false,
					'menu_class'     => 'flex items-center gap-8 text-sm font-medium text-slate-700',
				)
			);
			?>
		</nav>

		<details class="relative lg:hidden">
			<summary class="cursor-pointer list-none rounded-md border border-slate-300 px-4 py-2 text-sm font-semibold text-slate-900 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:ring-offset-2">
				<?php esc_html_e( 'Menu', 'canadian-homeshield' ); ?>
			</summary>
			<div class="absolute right-0 top-12 z-20 min-w-56 rounded-lg border border-slate-200 bg-white p-4 shadow-xl">
				<nav aria-label="<?php esc_attr_e( 'Mobile primary navigation', 'canadian-homeshield' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'container'      => false,
							'fallback_cb'    => false,
							'menu_class'     => 'space-y-3 text-sm font-medium text-slate-700',
						)
					);
					?>
				</nav>
			</div>
		</details>
	</div>
</header>
