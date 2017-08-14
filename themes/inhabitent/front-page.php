<?php
/**
 * Template Name: Front Page 
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
		<div class="hero-banner">
			<img class="logo-circle" src=" <?php echo get_template_directory_uri(); ?>/asset/logos/inhabitent-logo-full.svg" alt="Inhabitent Camping Supply Co.">
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>
