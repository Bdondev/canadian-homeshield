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
</main>
<?php get_footer(); ?>
