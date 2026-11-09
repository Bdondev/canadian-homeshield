<?php
/**
 * Services section.
 *
 * @package CanadianHomeShield
 */

$services_eyebrow   = canadian_homeshield_field( 'services_eyebrow', 'Our Services' );
$services_heading  = canadian_homeshield_field( 'services_heading', 'Top HVAC Services In Lancaster CA' );
$services_cta_label = canadian_homeshield_field( 'services_cta_label', 'Explore Services' );
$services_cta_url   = canadian_homeshield_field( 'services_cta_url', '#services' );
$services           = array(
	array(
		'title'       => canadian_homeshield_field( 'service_1_title', 'Gas/Furnace Heating' ),
		'description' => canadian_homeshield_field( 'service_1_description' ),
		'icon'        => 'gas_furnace_icon.png',
	),
	array(
		'title'       => canadian_homeshield_field( 'service_2_title', 'Heater Installation' ),
		'description' => canadian_homeshield_field( 'service_2_description' ),
		'icon'        => 'heater_installation_icon.png',
	),
	array(
		'title'       => canadian_homeshield_field( 'service_3_title', 'Refrigeration Install' ),
		'description' => canadian_homeshield_field( 'service_3_description', 'He came out to my home on three occasions and each time he provided excellent and prompt service.' ),
		'icon'        => 'refrigeration_icon.png',
	),
);
?>
<section id="services" class="mx-auto mt-4 w-[calc(100%_-_20px)] overflow-hidden rounded-[30px] bg-hs-navy px-5 py-8 text-white sm:px-8 sm:py-10 lg:px-12 lg:py-14" aria-labelledby="services-title">
	<div class="relative z-10 flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between">
		<div>
			<p class="mb-3 text-xs font-semibold uppercase tracking-[0.08em] text-hs-yellow"><?php echo esc_html( $services_eyebrow ); ?></p>
			<h2 id="services-title" class="max-w-xl font-display text-[clamp(2.2rem,5vw,4.7rem)] font-bold leading-[0.92] tracking-[-0.06em]"><?php echo nl2br( esc_html( $services_heading ) ); ?></h2>
		</div>
		<a class="inline-flex shrink-0 items-center justify-between gap-4 self-start rounded-full bg-hs-yellow py-1.5 pl-5 pr-1.5 text-sm font-bold text-slate-950 transition hover:brightness-95 focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-yellow focus-visible:ring-offset-2 focus-visible:ring-offset-hs-navy sm:self-end" href="<?php echo esc_url( $services_cta_url ); ?>">
			<?php echo esc_html( $services_cta_label ); ?>
			<span class="grid h-9 w-9 place-items-center rounded-full bg-white text-hs-navy" aria-hidden="true">
				<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" aria-hidden="true">
					<path d="M6 18 18 6M10 6h8v8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</span>
		</a>
	</div>

	<div class="relative mt-8 lg:mt-12">
		<div class="pointer-events-none absolute -bottom-28 -left-24 h-64 w-[720px] rotate-[8deg] rounded-[50%] border-[7px] border-white/30" aria-hidden="true"></div>
		<div class="services-track relative z-10 flex snap-x snap-mandatory gap-4 overflow-x-auto pb-2" tabindex="0" aria-label="HVAC services">
			<?php foreach ( $services as $service ) : ?>
				<article class="services-card flex min-h-[330px] min-w-[calc(100%-2rem)] snap-start flex-1 flex-col rounded-[24px] bg-white p-6 text-hs-navy sm:min-w-[320px] sm:p-7 lg:min-w-0">
					<img class="h-12 w-12 object-contain object-left" src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/' . $service['icon'] ) ); ?>" alt="" aria-hidden="true" loading="lazy">
					<h3 class="mt-8 max-w-[230px] font-display text-2xl font-bold leading-none tracking-[-0.04em]"><?php echo esc_html( $service['title'] ); ?></h3>
					<?php if ( $service['description'] ) : ?>
						<p class="mt-4 max-w-sm text-sm leading-6 text-hs-muted"><?php echo esc_html( $service['description'] ); ?></p>
					<?php endif; ?>
					<a class="mt-auto inline-flex items-center gap-3 pt-8 text-sm font-bold text-hs-navy focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-navy focus-visible:ring-offset-2" href="<?php echo esc_url( $services_cta_url ); ?>">
						<?php esc_html_e( 'Learn More', 'canadian-homeshield' ); ?>
						<span class="grid h-10 w-10 place-items-center rounded-full bg-hs-cream" aria-hidden="true">
							<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" aria-hidden="true">
								<path d="M6 18 18 6M10 6h8v8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</span>
					</a>
				</article>
			<?php endforeach; ?>
		</div>

		<div class="mt-5 flex items-center justify-between sm:mt-6">
			<button class="services-carousel-button rounded-full p-2 text-white transition hover:bg-white/10 focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-yellow" type="button" data-services-direction="previous" aria-label="Previous services">
				<svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" aria-hidden="true">
					<path d="m14 6-6 6 6 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</button>
			<button class="services-carousel-button rounded-full p-2 text-white transition hover:bg-white/10 focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-yellow" type="button" data-services-direction="next" aria-label="Next services">
				<svg class="h-8 w-8" viewBox="0 0 24 24" fill="none" aria-hidden="true">
					<path d="m10 6 6 6-6 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</button>
		</div>
	</div>
</section>
