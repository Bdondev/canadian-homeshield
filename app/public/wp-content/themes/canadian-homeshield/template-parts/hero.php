<?php
/**
 * Header and hero vertical slice.
 *
 * @package CanadianHomeShield
 */

$hero_eyebrow     = canadian_homeshield_field( 'hero_eyebrow' );
$hero_title       = canadian_homeshield_field( 'hero_title', get_the_title() ?: get_bloginfo( 'name' ) );
$hero_description = canadian_homeshield_field( 'hero_description' );
$hero_cta_label   = canadian_homeshield_field( 'hero_cta_label' );
$hero_cta_url     = canadian_homeshield_field( 'hero_cta_url' );
$hero_image_id    = canadian_homeshield_image_id( canadian_homeshield_field( 'hero_image' ) );
?>
<section class="relative overflow-hidden bg-slate-100" aria-labelledby="hero-title">
	<div class="mx-auto grid max-w-7xl items-center gap-12 px-5 py-16 sm:px-8 sm:py-20 lg:grid-cols-2 lg:gap-16 lg:px-10 lg:py-28">
		<div class="max-w-2xl">
			<?php if ( $hero_eyebrow ) : ?>
				<p class="mb-5 text-sm font-bold uppercase tracking-[0.18em] text-slate-600">
					<?php echo esc_html( $hero_eyebrow ); ?>
				</p>
			<?php endif; ?>

			<h1 id="hero-title" class="max-w-3xl text-4xl font-bold tracking-tight text-slate-950 sm:text-5xl lg:text-6xl">
				<?php echo esc_html( $hero_title ); ?>
			</h1>

			<?php if ( $hero_description ) : ?>
				<p class="mt-6 max-w-xl text-lg leading-8 text-slate-700">
					<?php echo nl2br( esc_html( $hero_description ) ); ?>
				</p>
			<?php endif; ?>

			<?php if ( $hero_cta_label && $hero_cta_url ) : ?>
				<a class="mt-8 inline-flex items-center justify-center rounded-md bg-slate-950 px-6 py-3 text-sm font-semibold text-white transition hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-slate-950 focus:ring-offset-2" href="<?php echo esc_url( $hero_cta_url ); ?>">
					<?php echo esc_html( $hero_cta_label ); ?>
				</a>
			<?php endif; ?>
		</div>

		<div class="min-h-72 overflow-hidden rounded-2xl bg-slate-300 lg:min-h-[32rem]">
			<?php if ( $hero_image_id ) : ?>
				<?php
				echo wp_get_attachment_image(
					$hero_image_id,
					'full',
					false,
					array(
						'class'         => 'h-full w-full object-cover',
						'alt'           => get_post_meta( $hero_image_id, '_wp_attachment_image_alt', true ),
						'fetchpriority' => 'high',
						'loading'       => false,
					)
				);
				?>
			<?php else : ?>
				<div class="flex h-full min-h-72 items-center justify-center p-8 text-center text-sm text-slate-600 lg:min-h-[32rem]">
					<?php esc_html_e( 'Add the approved hero image in the Home page fields.', 'canadian-homeshield' ); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
