<?php
/**
 * Template Name: About Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
				<header class="entry-header custom-hero">
						<h2>About</h2>
				</header>
				<div class="container about-content">
							<h2 class="story-header">Our Story</h2>
							<?php echo CFS()->get( 'about_our_story' ); ?>	
							<h2 class="story-header">Our Team</h2>
							<?php echo CFS()->get( 'about_our_team' ); ?>
				</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
