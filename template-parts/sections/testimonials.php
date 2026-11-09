<?php
/**
 * Testimonials section.
 *
 * @package CanadianHomeShield
 */

$testimonials_eyebrow = canadian_homeshield_field( 'testimonials_eyebrow', 'Customer Reviews' );
$testimonials_heading = canadian_homeshield_field( 'testimonials_heading', 'What Our Customer Say About Us' );
$testimonials_rating  = canadian_homeshield_field( 'testimonials_rating', '5.0 (243 reviews)' );
$testimonials         = array(
	array(
		'quote' => canadian_homeshield_field( 'testimonial_1_quote', 'Francisco is a great young man! Excellent service, prompt, professional and trustworthy.' ),
		'name'  => canadian_homeshield_field( 'testimonial_1_name', 'Pat Cohn' ),
		'role'  => canadian_homeshield_field( 'testimonial_1_role', 'Homeowner' ),
		'image' => 'testimonial_avatar_01.png',
	),
	array(
		'quote' => canadian_homeshield_field( 'testimonial_2_quote', 'Highly recommend USA Air Conditioning. Professional service, clear communication, and a team that truly cares.' ),
		'name'  => canadian_homeshield_field( 'testimonial_2_name', 'Matt Gale' ),
		'role'  => canadian_homeshield_field( 'testimonial_2_role', 'USA Air Conditioning' ),
		'image' => 'testimonial_avatar_02.png',
	),
	array(
		'quote' => canadian_homeshield_field( 'testimonial_3_quote', 'People go to Google reviews so they can see something about a person. This team is worth recommending.' ),
		'name'  => canadian_homeshield_field( 'testimonial_3_name', 'Azadeh Vincent' ),
		'role'  => canadian_homeshield_field( 'testimonial_3_role', 'Happy customer' ),
		'image' => 'testimonial_avatar_03.png',
	),
);
$testimonial_count = count( $testimonials );
?>
<section id="testimonials" class="mx-auto mt-4 w-[calc(100%_-_20px)] rounded-[30px] bg-hs-cream px-5 py-8 text-hs-navy sm:px-8 sm:py-10 lg:px-12 lg:py-14" aria-labelledby="testimonials-title">
	<div class="text-center">
		<p class="mb-3 text-sm font-semibold text-hs-navy"><span class="tracking-tight text-hs-yellow" aria-hidden="true">★★★★★</span> <?php echo esc_html( $testimonials_rating ); ?></p>
		<p class="mb-3 text-xs font-semibold uppercase tracking-[0.08em] text-hs-muted"><?php echo esc_html( $testimonials_eyebrow ); ?></p>
		<h2 id="testimonials-title" class="mx-auto max-w-3xl font-display text-[clamp(2rem,4vw,3.8rem)] font-bold leading-[0.95] tracking-[-0.055em]"><?php echo esc_html( $testimonials_heading ); ?></h2>
	</div>

	<div class="mt-8 sm:mt-10">
		<div class="testimonials-track flex snap-x snap-mandatory gap-4 overflow-x-auto pb-2" tabindex="0" aria-label="Customer testimonials">
			<?php foreach ( $testimonials as $index => $testimonial ) : ?>
				<article class="testimonials-card flex min-h-[270px] w-[calc(100%-1rem)] shrink-0 snap-start flex-col rounded-[20px] bg-white p-5 shadow-[0_1px_0_rgba(36,24,107,0.03)] sm:w-[calc(50%-0.5rem)] lg:w-[calc((100%-2rem)/3)] lg:p-6">
					<p class="text-xs font-semibold text-hs-muted"><?php echo esc_html( 'Google review ' . ( $index + 1 ) ); ?></p>
					<blockquote class="mt-5 text-sm leading-6 text-hs-navy">“<?php echo esc_html( $testimonial['quote'] ); ?>”</blockquote>
					<footer class="mt-auto flex items-center gap-3 pt-7">
						<img class="h-10 w-10 rounded-full object-cover" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $testimonial['image'] ) ); ?>" alt="" loading="lazy">
						<div>
							<cite class="block text-sm font-bold not-italic"><?php echo esc_html( $testimonial['name'] ); ?></cite>
							<span class="block text-xs text-hs-muted"><?php echo esc_html( $testimonial['role'] ); ?></span>
						</div>
					</footer>
				</article>
			<?php endforeach; ?>
		</div>

		<nav class="mt-6 flex items-center justify-center gap-5" aria-label="Testimonial carousel controls">
			<button class="testimonials-carousel-button rounded-full p-2 text-hs-navy transition hover:bg-white focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-navy" type="button" data-testimonials-direction="previous" aria-label="Previous testimonial">
				<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="m14 6-6 6 6 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" /></svg>
			</button>
			<span class="flex min-w-28 items-center gap-3 text-xs font-semibold text-hs-muted" aria-live="polite">
				<span data-testimonials-current>01</span>
				<span class="h-px flex-1 bg-hs-navy/30"><span class="testimonials-progress block h-px origin-left bg-hs-navy transition-transform" style="transform: scaleX(0.3333)"></span></span>
				<span><?php echo esc_html( str_pad( (string) $testimonial_count, 2, '0', STR_PAD_LEFT ) ); ?></span>
			</span>
			<button class="testimonials-carousel-button rounded-full p-2 text-hs-navy transition hover:bg-white focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-navy" type="button" data-testimonials-direction="next" aria-label="Next testimonial">
				<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="m10 6 6 6-6 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" /></svg>
			</button>
		</nav>
	</div>
</section>
