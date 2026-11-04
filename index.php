<?php
/**
 * Fallback template.
 *
 * @package CanadianHomeShield
 */
get_header();
?>
<main id="main-content" class="mx-auto max-w-7xl px-5 py-16 sm:px-8 lg:px-10">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class( 'prose prose-slate max-w-none' ); ?>>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
	<?php else : ?>
		<p><?php esc_html_e( 'No content found.', 'canadian-homeshield' ); ?></p>
	<?php endif; ?>
</main>
<?php get_footer(); ?>
