<?php
/**
 * Team section.
 *
 * @package CanadianHomeShield
 */

$team_eyebrow = canadian_homeshield_field( 'team_eyebrow', 'Our Team' );
$team_heading = canadian_homeshield_field( 'team_heading', 'Meet Our Dedicated Team' );
$team_members = array(
	array(
		'image' => 'team_01.png',
		'alt'   => canadian_homeshield_field( 'team_member_1_alt', 'Canadian HomeShield team member' ),
	),
	array(
		'image' => 'team_02.png',
		'alt'   => canadian_homeshield_field( 'team_member_2_alt', 'Canadian HomeShield team member' ),
	),
	array(
		'image' => 'team_03.png',
		'alt'   => canadian_homeshield_field( 'team_member_3_alt', 'Canadian HomeShield team member' ),
	),
	array(
		'image' => 'team_04.png',
		'alt'   => canadian_homeshield_field( 'team_member_4_alt', 'Canadian HomeShield team member' ),
	),
);
?>
<section id="team" class="mx-auto mt-4 w-[calc(100%_-_20px)] rounded-[30px] bg-white px-5 py-8 text-hs-navy sm:px-8 sm:py-10 lg:px-12 lg:py-14" aria-labelledby="team-title">
	<div class="flex flex-col items-center text-center">
		<p class="mb-3 text-xs font-semibold uppercase tracking-[0.08em] text-hs-muted"><?php echo esc_html( $team_eyebrow ); ?></p>
		<h2 id="team-title" class="font-display text-[clamp(2.2rem,5vw,4.7rem)] font-bold leading-[0.92] tracking-[-0.06em]"><?php echo esc_html( $team_heading ); ?></h2>
	</div>

	<div class="relative mt-8 sm:mt-10">
		<button class="team-carousel-button absolute left-0 top-1/2 z-10 -translate-x-1/2 -translate-y-1/2 rounded-full bg-white p-2 text-hs-navy shadow-sm transition hover:bg-hs-cream focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-navy sm:p-3" type="button" data-team-direction="previous" aria-label="Previous team member">
			<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="m14 6-6 6 6 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" /></svg>
		</button>

		<div class="team-track flex snap-x snap-mandatory gap-4 overflow-x-auto px-2 pb-2 sm:px-3" tabindex="0" aria-label="Canadian HomeShield team members">
			<?php foreach ( $team_members as $member ) : ?>
				<div class="team-card w-[calc(100%-1rem)] shrink-0 snap-start overflow-hidden rounded-[24px] bg-hs-cream sm:w-[calc(50%-0.5rem)] lg:w-[calc(28%-0.75rem)]">
					<img class="aspect-[0.88] h-auto w-full object-contain object-bottom" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $member['image'] ) ); ?>" alt="<?php echo esc_attr( $member['alt'] ); ?>" loading="lazy">
				</div>
			<?php endforeach; ?>
		</div>

		<button class="team-carousel-button absolute right-0 top-1/2 z-10 translate-x-1/2 -translate-y-1/2 rounded-full bg-white p-2 text-hs-navy shadow-sm transition hover:bg-hs-cream focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-navy sm:p-3" type="button" data-team-direction="next" aria-label="Next team member">
			<svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="m10 6 6 6-6 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" /></svg>
		</button>
	</div>
</section>
