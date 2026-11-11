<?php
/**
 * Front page template.
 *
 * @package CanadianHomeShield
 */
get_header();
?>
<main id="main-content">
	<?php get_template_part( 'template-parts/sections/hero' ); ?>
	<?php get_template_part( 'template-parts/about' ); ?>
	<?php get_template_part( 'template-parts/sections/services' ); ?>
	<?php get_template_part( 'template-parts/sections/service-areas' ); ?>
	<?php get_template_part( 'template-parts/sections/testimonials' ); ?>
	<?php get_template_part( 'template-parts/sections/team' ); ?>
	<?php get_template_part( 'template-parts/sections/partners' ); ?>
	<?php get_template_part( 'template-parts/sections/cta-banner' ); ?>
</main>
<?php get_footer(); ?>
