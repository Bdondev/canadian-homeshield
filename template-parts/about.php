<?php
/**
 * About section.
 *
 * @package CanadianHomeShield
 */

$about_eyebrow    = canadian_homeshield_field( 'about_eyebrow', 'About Us' );
$about_heading    = canadian_homeshield_field( 'about_heading', 'Providing Charlotte, NC With AC Repair & Installation Services Since 1975' );
$about_cta_label  = canadian_homeshield_field( 'about_cta_label', 'Learn More' );
$about_cta_url    = canadian_homeshield_field( 'about_cta_url', '#about' );
$about_image_id   = canadian_homeshield_image_id( canadian_homeshield_field( 'about_image' ) );
$about_items      = array(
	array(
		'title'       => canadian_homeshield_field( 'about_item_1_title', 'Family-Owned Excellence' ),
		'description' => canadian_homeshield_field( 'about_item_1_description', 'When an AC repair technician shows up at your door, are you filled with dread?' ),
	),
	array(
		'title'       => canadian_homeshield_field( 'about_item_2_title', 'Best Price Assurance' ),
		'description' => canadian_homeshield_field( 'about_item_2_description', 'We provide honest, upfront pricing so you know exactly what to expect before work begins.' ),
	),
	array(
		'title'       => canadian_homeshield_field( 'about_item_3_title', 'Top Rated Expertise' ),
		'description' => canadian_homeshield_field( 'about_item_3_description', 'Our skilled technicians deliver dependable HVAC service backed by years of hands-on experience.' ),
	),
	array(
		'title'       => canadian_homeshield_field( 'about_item_4_title', 'Best Price Assurance' ),
		'description' => canadian_homeshield_field( 'about_item_4_description', 'From routine maintenance to urgent repairs, we help keep your home comfortable year-round.' ),
	),
);
?>
<section id="about" class="mx-auto mt-4 w-[calc(100%_-_20px)] max-w-none rounded-[30px] bg-white px-5 py-8 text-hs-navy sm:px-8 sm:py-10 lg:px-12 lg:py-14" aria-labelledby="about-title">
	<div class="flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between">
		<div>
			<p class="mb-4 flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.08em] text-hs-muted"><span class="h-px w-5 bg-hs-muted" aria-hidden="true"></span><?php echo esc_html( $about_eyebrow ); ?></p>
			<h2 id="about-title" class="max-w-4xl font-display text-[clamp(2.2rem,5vw,4.7rem)] font-bold leading-[0.92] tracking-[-0.06em]"><?php echo esc_html( $about_heading ); ?></h2>
		</div>
		<a class="inline-flex shrink-0 items-center justify-between gap-4 self-start rounded-full border border-hs-navy py-1.5 pl-5 pr-1.5 text-sm font-bold text-hs-navy transition hover:bg-hs-navy hover:text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-navy focus-visible:ring-offset-2 sm:self-end" href="<?php echo esc_url( $about_cta_url ); ?>">
			<?php echo esc_html( $about_cta_label ); ?>
			<span class="grid h-9 w-9 place-items-center rounded-full border border-hs-navy leading-none" aria-hidden="true">
				<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" aria-hidden="true">
					<path d="M6 18 18 6M10 6h8v8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</span>
		</a>
	</div>

	<div class="mt-10 grid items-start gap-8 lg:mt-16 lg:grid-cols-[1fr_1.02fr] lg:gap-12">
		<div class="overflow-hidden rounded-[24px]">
			<?php if ( $about_image_id ) : ?>
				<?php echo wp_get_attachment_image( $about_image_id, 'full', false, array( 'class' => 'aspect-[1.35] h-full w-full object-cover', 'alt' => get_post_meta( $about_image_id, '_wp_attachment_image_alt', true ), 'loading' => 'lazy' ) ); ?>
			<?php else : ?>
				<img class="aspect-[1.35] h-full w-full object-cover" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/team_04.png' ) ); ?>" alt="<?php esc_attr_e( 'HVAC technicians servicing an outdoor unit', 'canadian-homeshield' ); ?>" loading="lazy">
			<?php endif; ?>
		</div>

		<div class="divide-y divide-hs-line">
			<?php foreach ( $about_items as $index => $item ) : ?>
				<details class="group py-5 first:pt-0 last:pb-0" <?php echo 0 === $index ? 'open' : ''; ?>>
					<summary class="flex cursor-pointer list-none items-center gap-4 focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-navy focus-visible:ring-offset-2">
						<span class="w-8 shrink-0 text-2xl font-light text-hs-muted sm:w-10 sm:text-3xl"><?php echo esc_html( str_pad( (string) ( $index + 1 ), 2, '0', STR_PAD_LEFT ) ); ?></span>
						<span class="flex-1 font-display text-xl font-bold leading-none tracking-[-0.04em] sm:text-2xl"><?php echo esc_html( $item['title'] ); ?></span>
						<span class="grid h-10 w-10 shrink-0 place-items-center rounded-full border border-hs-navy leading-none text-hs-navy transition group-open:rotate-90 group-open:bg-hs-navy group-open:text-hs-yellow" aria-hidden="true">
							<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" aria-hidden="true">
								<path d="M6 18 18 6M10 6h8v8" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</span>
					</summary>
					<?php if ( $item['description'] ) : ?>
						<p class="ml-12 mt-4 max-w-xl text-sm leading-6 text-hs-muted sm:ml-14"><?php echo esc_html( $item['description'] ); ?></p>
					<?php endif; ?>
				</details>
			<?php endforeach; ?>
		</div>
	</div>
</section>
