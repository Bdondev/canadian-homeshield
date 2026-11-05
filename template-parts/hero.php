<?php
/**
 * Header and hero vertical slice.
 *
 * @package CanadianHomeShield
 */

$hero_title          = canadian_homeshield_field( 'hero_title', 'Innovative and Personalized HVAC Solutions.' );
$hero_title_emphasis = canadian_homeshield_field( 'hero_title_emphasis', 'HVAC' );
$hero_description    = canadian_homeshield_field( 'hero_description' );
$hero_cta_label      = canadian_homeshield_field( 'hero_cta_label', 'Get Free Estimate' );
$hero_cta_url        = canadian_homeshield_field( 'hero_cta_url', '#estimate-form' );
$hero_rating_score   = canadian_homeshield_field( 'hero_rating_score', '5.0' );
$hero_rating_count   = canadian_homeshield_field( 'hero_rating_count', '243 reviews' );
$hero_form_heading   = canadian_homeshield_field( 'hero_form_heading', 'Let Us Help You Today.' );
$hero_form_cta       = canadian_homeshield_field( 'hero_form_cta_label', 'Get Free Estimate' );
$hero_image_id       = canadian_homeshield_image_id( canadian_homeshield_field( 'hero_image' ) );

$hero_title_parts = preg_split( '/(' . preg_quote( $hero_title_emphasis, '/' ) . ')/i', $hero_title, -1, PREG_SPLIT_DELIM_CAPTURE );
?>
<section class="mx-auto w-[calc(100%_-_20px)] max-w-none overflow-hidden rounded-b-[30px] bg-hs-cream" aria-labelledby="hero-title">
	<div class="grid overflow-hidden bg-hs-cream gap-8 px-4 pb-10 pt-8 sm:px-7 sm:pb-14 sm:pt-12 lg:grid-cols-[1.02fr_1fr] lg:gap-10 lg:px-8 lg:pb-16 lg:pt-9">
		<div class="relative flex min-h-0 flex-col justify-between overflow-hidden rounded-[28px] bg-hs-cream px-5 pb-0 pt-8 sm:px-10 lg:min-h-[610px] lg:px-12 lg:pt-12">
			<div class="relative z-10">
				<div class="mb-5 flex items-center gap-2 text-sm font-semibold text-hs-navy sm:mb-6">
					<span class="tracking-tight text-hs-yellow" aria-hidden="true">★★★★★</span>
					<span><?php echo esc_html( $hero_rating_score ); ?> (<?php echo esc_html( $hero_rating_count ); ?>)</span>
					<span class="sr-only"><?php echo esc_html( $hero_rating_score . ' out of 5 stars, ' . $hero_rating_count ); ?></span>
				</div>

				<h1 id="hero-title" class="max-w-[650px] font-display text-[clamp(2.75rem,5.6vw,5.9rem)] font-bold leading-[0.91] tracking-[-0.055em] text-hs-navy">
					<?php foreach ( $hero_title_parts as $part ) : ?>
						<?php if ( 0 === strcasecmp( $part, $hero_title_emphasis ) ) : ?>
							<em class="font-display font-bold"><?php echo esc_html( $part ); ?></em>
						<?php else : ?>
							<?php echo esc_html( $part ); ?>
						<?php endif; ?>
					<?php endforeach; ?>
				</h1>

				<?php if ( $hero_description ) : ?>
					<p class="mt-6 max-w-xl text-base leading-7 text-hs-muted"><?php echo nl2br( esc_html( $hero_description ) ); ?></p>
				<?php endif; ?>
			</div>

			<div class="relative mt-10 h-[250px] sm:h-[315px] lg:mt-6 lg:h-[345px]">
				<div class="absolute -bottom-12 -left-20 h-44 w-[620px] rotate-[8deg] rounded-[50%] border-[7px] border-[#e7e2e0] sm:-left-24 lg:-bottom-10 lg:h-52" aria-hidden="true"></div>
				<div class="absolute -bottom-2 left-0 z-10 h-[250px] w-[72%] overflow-hidden rounded-[26px] sm:h-[315px] lg:h-[345px]">
					<img class="h-full w-full object-cover object-center" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/team_01.png' ) ); ?>" alt="<?php esc_attr_e( 'HVAC technician servicing an outdoor unit', 'canadian-homeshield' ); ?>" fetchpriority="high">
				</div>
				<span class="absolute right-[24%] top-4 z-20 grid h-10 w-10 place-items-center rounded-full bg-white text-lg text-hs-navy shadow-sm" aria-hidden="true">❄</span>
			</div>
		</div>

		<div class="relative min-h-[610px] overflow-hidden rounded-[28px] bg-[#65758a]">
			<?php if ( $hero_image_id ) : ?>
				<?php echo wp_get_attachment_image( $hero_image_id, 'full', false, array( 'class' => 'absolute inset-0 h-full w-full object-cover', 'alt' => get_post_meta( $hero_image_id, '_wp_attachment_image_alt', true ), 'loading' => false ) ); ?>
			<?php else : ?>
				<img class="absolute inset-0 h-full w-full object-cover object-center opacity-90" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/team_04.png' ) ); ?>" alt="<?php esc_attr_e( 'HVAC technicians servicing an outdoor unit', 'canadian-homeshield' ); ?>" loading="eager">
			<?php endif; ?>
			<div class="absolute inset-0 bg-hs-navy/10" aria-hidden="true"></div>
			<div class="absolute -bottom-20 -left-24 h-64 w-[720px] rotate-[8deg] rounded-[50%] border-[7px] border-[#e7e2e0]/80" aria-hidden="true"></div>

			<form id="estimate-form" class="absolute left-1/2 top-1/2 z-10 w-[calc(100%-2rem)] max-w-[520px] -translate-x-1/2 -translate-y-1/2 rounded-[26px] bg-white p-6 shadow-[0_20px_50px_rgba(36,24,107,0.16)] sm:p-8" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
				<h2 class="text-center font-display text-2xl font-bold tracking-[-0.035em] text-hs-navy sm:text-3xl"><?php echo esc_html( $hero_form_heading ); ?></h2>
				<div class="mt-6 space-y-2.5">
					<label class="sr-only" for="estimate-name"><?php esc_html_e( 'Name', 'canadian-homeshield' ); ?></label>
					<input id="estimate-name" name="estimate_name" class="w-full rounded-xl border border-hs-line bg-hs-cream px-4 py-3 text-sm text-hs-navy outline-none placeholder:text-hs-muted focus:border-hs-navy focus:ring-2 focus:ring-hs-navy/20" type="text" placeholder="David Andrew">

					<label class="sr-only" for="estimate-phone"><?php esc_html_e( 'Phone number', 'canadian-homeshield' ); ?></label>
					<div class="relative">
						<input id="estimate-phone" name="estimate_phone" class="w-full rounded-xl border border-hs-line bg-hs-cream px-4 py-3 pr-11 text-sm text-hs-navy outline-none placeholder:text-hs-muted focus:border-hs-navy focus:ring-2 focus:ring-hs-navy/20" type="tel" placeholder="Phone Number*" required>
						<img class="pointer-events-none absolute right-4 top-1/2 h-4 w-4 -translate-y-1/2 object-contain opacity-60" src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/phone_icon.png' ) ); ?>" alt="" aria-hidden="true">
					</div>

					<label class="sr-only" for="estimate-email"><?php esc_html_e( 'Email address', 'canadian-homeshield' ); ?></label>
					<div class="relative">
						<input id="estimate-email" name="estimate_email" class="w-full rounded-xl border border-hs-line bg-hs-cream px-4 py-3 pr-11 text-sm text-hs-navy outline-none placeholder:text-hs-muted focus:border-hs-navy focus:ring-2 focus:ring-hs-navy/20" type="email" placeholder="Email Address*" required>
						<img class="pointer-events-none absolute right-4 top-1/2 h-4 w-4 -translate-y-1/2 object-contain opacity-60" src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/email_icon.png' ) ); ?>" alt="" aria-hidden="true">
					</div>

					<label class="sr-only" for="estimate-postal-code"><?php esc_html_e( 'Postal code', 'canadian-homeshield' ); ?></label>
					<div class="relative">
						<input id="estimate-postal-code" name="estimate_postal_code" class="w-full rounded-xl border border-hs-line bg-hs-cream px-4 py-3 pr-11 text-sm text-hs-navy outline-none placeholder:text-hs-muted focus:border-hs-navy focus:ring-2 focus:ring-hs-navy/20" type="text" placeholder="Select Zip Code *">
						<img class="pointer-events-none absolute right-4 top-1/2 h-4 w-4 -translate-y-1/2 object-contain opacity-60" src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/location_icon.png' ) ); ?>" alt="" aria-hidden="true">
					</div>

					<label class="sr-only" for="estimate-comment"><?php esc_html_e( 'Comment', 'canadian-homeshield' ); ?></label>
					<textarea id="estimate-comment" name="estimate_comment" class="min-h-24 w-full resize-y rounded-xl border border-hs-line bg-hs-cream px-4 py-3 text-sm text-hs-navy outline-none placeholder:text-hs-muted focus:border-hs-navy focus:ring-2 focus:ring-hs-navy/20" placeholder="Write your comment"></textarea>
				</div>
				<button class="mt-5 w-full rounded-xl bg-hs-yellow px-5 py-3.5 text-sm font-bold text-slate-950 transition hover:brightness-95 focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-navy focus-visible:ring-offset-2" type="submit"><?php echo esc_html( $hero_form_cta ); ?></button>
			</form>
		</div>
	</div>
</section>
