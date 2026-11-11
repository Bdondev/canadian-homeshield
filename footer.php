<?php
/**
 * Site footer.
 *
 * @package CanadianHomeShield
 */

$footer_page_id     = (int) get_option( 'page_on_front' );
$footer_description = canadian_homeshield_field( 'footer_description', get_bloginfo( 'description' ), $footer_page_id );
$footer_email       = canadian_homeshield_field( 'footer_email', get_option( 'admin_email' ), $footer_page_id );
$footer_phone       = canadian_homeshield_field( 'header_phone', '1-800-858-1922', $footer_page_id );
$footer_socials     = array(
	'facebook'  => canadian_homeshield_field( 'footer_facebook_url', '', $footer_page_id ),
	'instagram' => canadian_homeshield_field( 'footer_instagram_url', '', $footer_page_id ),
	'linkedin'  => canadian_homeshield_field( 'footer_linkedin_url', '', $footer_page_id ),
);
$footer_social_icons = array(
	'facebook'  => 'facebook_icon.png',
	'instagram' => 'instagram_icon.png',
	'linkedin'  => 'linkedin_icon.png',
);
$blog_url = get_post_type_archive_link( 'post' );
$blog_url = $blog_url ? $blog_url : home_url( '/blog/' );
?>
<footer class="mx-auto mt-4 w-[calc(100%_-_20px)] rounded-[30px] bg-hs-cream px-5 pb-5 pt-8 text-hs-navy sm:px-8 sm:pb-8 sm:pt-10 lg:px-12 lg:pb-10 lg:pt-12" aria-labelledby="footer-title">
	<h2 id="footer-title" class="sr-only"><?php esc_html_e( 'Site footer', 'canadian-homeshield' ); ?></h2>
	<div class="grid gap-10 border-b border-hs-line pb-10 lg:grid-cols-[minmax(0,1.7fr)_minmax(0,0.8fr)_minmax(0,1fr)_minmax(0,1.2fr)] lg:gap-12">
		<div class="max-w-xs">
			<a class="inline-block focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-navy focus-visible:ring-offset-2" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
				<?php if ( get_theme_mod( 'custom_logo' ) ) : ?>
					<?php echo wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'full', false, array( 'class' => 'h-auto w-[170px]', 'alt' => get_bloginfo( 'name' ) ) ); ?>
				<?php else : ?>
					<img class="h-auto w-[170px]" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/american_home_shield_logo.png' ) ); ?>" alt="<?php esc_attr_e( 'American Home Shield', 'canadian-homeshield' ); ?>">
				<?php endif; ?>
			</a>
			<?php if ( $footer_description ) : ?>
				<p class="mt-5 max-w-[280px] text-xs leading-5 text-hs-muted"><?php echo esc_html( $footer_description ); ?></p>
			<?php endif; ?>
			<div class="mt-5 flex items-center gap-2" aria-label="<?php esc_attr_e( 'Social links', 'canadian-homeshield' ); ?>">
				<?php foreach ( $footer_socials as $network => $url ) : ?>
					<?php if ( $url ) : ?>
						<a class="grid h-8 w-8 place-items-center rounded-full border border-hs-line bg-white transition hover:border-hs-navy focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-navy focus-visible:ring-offset-2" href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php echo esc_attr( ucfirst( $network ) ); ?>">
							<img class="h-4 w-4 object-contain" src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/' . $footer_social_icons[ $network ] ) ); ?>" alt="" aria-hidden="true">
						</a>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
		</div>

		<div>
			<h3 class="text-sm font-bold"><?php esc_html_e( 'Company', 'canadian-homeshield' ); ?></h3>
			<ul class="mt-4 grid gap-3 text-xs text-hs-muted">
				<li><a class="transition hover:text-hs-navy focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-navy" href="<?php echo esc_url( home_url( '/#about' ) ); ?>"><?php esc_html_e( 'About Us', 'canadian-homeshield' ); ?></a></li>
				<li><a class="transition hover:text-hs-navy focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-navy" href="<?php echo esc_url( $blog_url ); ?>"><?php esc_html_e( 'Blog', 'canadian-homeshield' ); ?></a></li>
				<li><a class="transition hover:text-hs-navy focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-navy" href="<?php echo esc_url( home_url( '/#contact-cta' ) ); ?>"><?php esc_html_e( 'Contact Us', 'canadian-homeshield' ); ?></a></li>
			</ul>
		</div>

		<div>
			<h3 class="text-sm font-bold"><?php esc_html_e( 'Services', 'canadian-homeshield' ); ?></h3>
			<ul class="mt-4 grid gap-3 text-xs text-hs-muted">
				<li><a class="transition hover:text-hs-navy focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-navy" href="<?php echo esc_url( home_url( '/#services' ) ); ?>"><?php esc_html_e( 'Heating Services', 'canadian-homeshield' ); ?></a></li>
				<li><a class="transition hover:text-hs-navy focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-navy" href="<?php echo esc_url( home_url( '/#services' ) ); ?>"><?php esc_html_e( 'Air Conditioning', 'canadian-homeshield' ); ?></a></li>
				<li><a class="transition hover:text-hs-navy focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-navy" href="<?php echo esc_url( home_url( '/#services' ) ); ?>"><?php esc_html_e( 'Indoor Air Quality', 'canadian-homeshield' ); ?></a></li>
				<li><a class="transition hover:text-hs-navy focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-navy" href="<?php echo esc_url( home_url( '/#services' ) ); ?>"><?php esc_html_e( 'Gas/Furnace Heating', 'canadian-homeshield' ); ?></a></li>
				<li><a class="transition hover:text-hs-navy focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-navy" href="<?php echo esc_url( home_url( '/#services' ) ); ?>"><?php esc_html_e( 'Refrigeration Installation', 'canadian-homeshield' ); ?></a></li>
			</ul>
		</div>

		<div>
			<h3 class="text-sm font-bold"><?php esc_html_e( 'Contact Us', 'canadian-homeshield' ); ?></h3>
			<ul class="mt-4 grid gap-4 text-xs text-hs-muted">
				<li class="flex items-start gap-2"><img class="mt-0.5 h-4 w-4 object-contain" src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/phone_icon.png' ) ); ?>" alt="" aria-hidden="true"><a class="transition hover:text-hs-navy focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-navy" href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $footer_phone ) ); ?>"><?php echo esc_html( $footer_phone ); ?></a></li>
				<li class="flex items-start gap-2"><img class="mt-0.5 h-4 w-4 object-contain" src="<?php echo esc_url( get_theme_file_uri( 'assets/icons/email_icon.png' ) ); ?>" alt="" aria-hidden="true"><a class="break-all transition hover:text-hs-navy focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-navy" href="mailto:<?php echo esc_attr( $footer_email ); ?>"><?php echo esc_html( $footer_email ); ?></a></li>
			</ul>
		</div>
	</div>

	<div class="flex flex-col gap-3 pt-5 text-[10px] text-hs-muted sm:flex-row sm:items-center sm:justify-between">
		<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>. <?php esc_html_e( 'All rights reserved.', 'canadian-homeshield' ); ?></p>
		<div class="flex gap-4">
			<a class="transition hover:text-hs-navy focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-navy" href="<?php echo esc_url( home_url( '/terms-and-conditions/' ) ); ?>"><?php esc_html_e( 'Terms and Conditions', 'canadian-homeshield' ); ?></a>
			<a class="transition hover:text-hs-navy focus:outline-none focus-visible:ring-2 focus-visible:ring-hs-navy" href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>"><?php esc_html_e( 'Privacy Policy', 'canadian-homeshield' ); ?></a>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
