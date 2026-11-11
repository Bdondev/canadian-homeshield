<?php
/**
 * Homepage CTA banner.
 *
 * @package CanadianHomeShield
 */

$cta_heading           = canadian_homeshield_field( 'cta_heading', 'Get The Best Heating & Air Conditioning Services' );
$cta_label             = canadian_homeshield_field( 'cta_label', 'Get Estimate' );
$cta_url               = canadian_homeshield_field( 'cta_url', '#estimate-form' );
$cta_email_placeholder = canadian_homeshield_field( 'cta_email_placeholder', 'Email Address' );
?>

<section id="contact-cta" class="relative mx-auto mt-4 min-h-[230px] w-[calc(100%_-_20px)] overflow-hidden rounded-[30px] bg-hs-navy text-white sm:min-h-[280px] lg:min-h-[330px]" aria-labelledby="contact-cta-title">
	<div class="absolute inset-0 bg-cover bg-center" style="background-image: url('<?php echo esc_url( get_theme_file_uri( 'assets/images/team_03.png' ) ); ?>');" aria-hidden="true"></div>
	<div class="absolute inset-0 bg-gradient-to-r from-hs-navy via-hs-navy/95 to-hs-navy/10" aria-hidden="true"></div>

	<div class="relative flex min-h-[230px] items-center px-5 py-8 sm:min-h-[280px] sm:px-8 lg:min-h-[330px] lg:px-12">
		<div class="max-w-[470px]">
			<h2 id="contact-cta-title" class="max-w-md font-display text-[clamp(2rem,4vw,3.8rem)] font-bold leading-[0.92] tracking-[-0.06em]"><?php echo esc_html( $cta_heading ); ?></h2>

			<form class="mt-6 flex max-w-[390px] flex-col gap-2.5 sm:flex-row sm:items-center" action="<?php echo esc_url( $cta_url ); ?>" method="get">
				<label class="sr-only" for="cta-email"><?php echo esc_html( $cta_email_placeholder ); ?></label>
				<input id="cta-email" name="cta_email" class="min-h-10 min-w-0 flex-1 rounded-full border-0 bg-white px-4 py-2.5 text-xs text-hs-navy outline-none placeholder:text-hs-muted focus:ring-2 focus:ring-hs-yellow" type="email" placeholder="<?php echo esc_attr( $cta_email_placeholder ); ?>" required>
				<button class="inline-flex min-h-10 shrink-0 items-center justify-center rounded-full bg-hs-yellow px-5 py-2.5 text-xs font-bold text-slate-950 transition hover:brightness-95 focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-yellow focus-visible:ring-offset-2 focus-visible:ring-offset-hs-navy" type="submit"><?php echo esc_html( $cta_label ); ?></button>
			</form>
	</div>
	</div>
</section>
