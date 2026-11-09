<?php
/**
 * Service areas section.
 *
 * @package CanadianHomeShield
 */

$service_area_eyebrow = canadian_homeshield_field( 'service_area_eyebrow', 'Service Area' );
$service_area_heading = canadian_homeshield_field( 'service_area_heading', 'Texas Neighborhoods' );
$service_area_intro   = canadian_homeshield_field( 'service_area_intro', 'We Proudly Serve' );
$service_area_map_url = canadian_homeshield_field( 'service_area_map_embed_url', 'https://www.google.com/maps?q=Dallas%2C+TX&output=embed' );
$service_areas        = array(
	canadian_homeshield_field( 'service_area_1', 'Deep Ellum' ),
	canadian_homeshield_field( 'service_area_2', 'Uptown' ),
	canadian_homeshield_field( 'service_area_3', 'Victory Park' ),
	canadian_homeshield_field( 'service_area_4', 'Arts District' ),
	canadian_homeshield_field( 'service_area_5', 'Lake Highlands' ),
);
?>
<section id="service-areas" class="mx-auto mt-4 w-[calc(100%_-_20px)] rounded-[30px] bg-white px-5 py-8 text-hs-navy sm:px-8 sm:py-10 lg:px-12 lg:py-14" aria-labelledby="service-areas-title">
	<div class="grid items-center gap-8 lg:grid-cols-[1.02fr_1fr] lg:gap-12">
		<div class="service-area-map overflow-hidden rounded-[24px] border border-hs-line bg-hs-cream shadow-sm">
			<iframe class="aspect-[1.15] h-full min-h-[320px] w-full border-0 sm:min-h-[380px]" src="<?php echo esc_url( $service_area_map_url ); ?>" title="Map of Canadian HomeShield service areas in Dallas, Texas" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
		</div>

		<div>
			<p class="mb-4 flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.08em] text-hs-muted"><span class="h-px w-5 bg-hs-muted" aria-hidden="true"></span><?php echo esc_html( $service_area_eyebrow ); ?></p>
			<h2 id="service-areas-title" class="font-display text-[clamp(2.2rem,5vw,4.7rem)] font-bold leading-[0.92] tracking-[-0.06em]"><?php echo esc_html( $service_area_heading ); ?></h2>
			<p class="mt-2 font-display text-[clamp(1.8rem,3.5vw,3.2rem)] font-bold leading-[0.95] tracking-[-0.05em]"><?php echo esc_html( $service_area_intro ); ?></p>

			<ul class="mt-8 divide-y divide-hs-line border-y border-hs-line" aria-label="Service areas">
				<?php foreach ( $service_areas as $area ) : ?>
					<li>
						<a class="flex items-center justify-between gap-4 py-3 text-sm font-semibold text-hs-navy transition-colors hover:text-hs-muted focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-navy focus-visible:ring-offset-2" href="<?php echo esc_url( 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode( $area . ', Dallas, TX' ) ); ?>" target="_blank" rel="noopener noreferrer">
							<span class="flex items-center gap-3"><img class="h-4 w-4 shrink-0 object-contain" src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/location_icon.png' ) ); ?>" alt="" aria-hidden="true" loading="lazy"><?php echo esc_html( $area ); ?></span>
							<svg class="h-4 w-4 shrink-0" viewBox="0 0 24 24" fill="none" aria-hidden="true">
								<path d="m9 6 6 6-6 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</section>
