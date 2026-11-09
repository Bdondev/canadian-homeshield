<?php
/**
 * Partners section.
 *
 * @package CanadianHomeShield
 */

$partners_eyebrow = canadian_homeshield_field( 'partners_eyebrow', 'Our Partners' );
$partners_heading = canadian_homeshield_field( 'partners_heading', "We're Proud To Partner With The Best" );
$partner_logos    = array(
	array( 'file' => 'amazon_logo.png', 'alt' => canadian_homeshield_field( 'partner_1_alt', 'Amazon' ) ),
	array( 'file' => 'garrett_logo.png', 'alt' => canadian_homeshield_field( 'partner_2_alt', 'Garrett' ) ),
	array( 'file' => 'bassett_logo.png', 'alt' => canadian_homeshield_field( 'partner_3_alt', 'Bassett' ) ),
	array( 'file' => 'delta_logo.png', 'alt' => canadian_homeshield_field( 'partner_4_alt', 'Delta' ) ),
	array( 'file' => 'caixa_logo.png', 'alt' => canadian_homeshield_field( 'partner_5_alt', 'Caixa' ) ),
	array( 'file' => 'ascii_logo.png', 'alt' => canadian_homeshield_field( 'partner_6_alt', 'Ascii' ) ),
);
?>
<section id="partners" class="mx-auto mt-4 w-[calc(100%_-_20px)] rounded-[30px] bg-white px-5 py-8 text-hs-navy sm:px-8 sm:py-10 lg:px-12 lg:py-14" aria-labelledby="partners-title">
	<div class="flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between">
		<div>
			<p class="mb-3 text-xs font-semibold uppercase tracking-[0.08em] text-hs-muted"><?php echo esc_html( $partners_eyebrow ); ?></p>
			<h2 id="partners-title" class="max-w-2xl font-display text-[clamp(2.2rem,5vw,4.7rem)] font-bold leading-[0.92] tracking-[-0.06em]"><?php echo esc_html( $partners_heading ); ?></h2>
		</div>

		<nav class="flex shrink-0 items-center gap-2" aria-label="Partner logos carousel controls">
			<button class="partners-carousel-button rounded-full transition hover:bg-hs-cream focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-navy" type="button" data-partners-direction="previous" aria-label="Previous partners">
				<img class="h-9 w-9" src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/arrow_left_circle_icon.png' ) ); ?>" alt="" aria-hidden="true">
			</button>
			<button class="partners-carousel-button rounded-full transition hover:bg-hs-cream focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-navy" type="button" data-partners-direction="next" aria-label="Next partners">
				<img class="h-9 w-9" src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/arrow_right_circle_icon.png' ) ); ?>" alt="" aria-hidden="true">
			</button>
		</nav>
	</div>

	<div class="partners-track mt-8 flex snap-x snap-mandatory overflow-x-auto border-y border-hs-line" tabindex="0" aria-label="Canadian HomeShield partners">
		<?php foreach ( $partner_logos as $partner ) : ?>
			<div class="flex h-24 min-w-[50%] snap-start items-center justify-center border-r border-hs-line px-5 sm:min-w-[33.333%] lg:min-w-0 lg:flex-1 lg:px-6">
				<img class="max-h-10 w-auto max-w-full object-contain" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $partner['file'] ) ); ?>" alt="<?php echo esc_attr( $partner['alt'] ); ?>" loading="lazy">
			</div>
		<?php endforeach; ?>
	</div>
</section>
