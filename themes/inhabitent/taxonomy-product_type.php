<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>

			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>

            <section class="flex-container">
			<?php while ( have_posts() ) : the_post(); ?>

        <div class="flex-product-item">
          <?php if ( has_post_thumbnail() ) : ?>
					<a href=<?php echo get_post_permalink() ?>>
					
					<div class="product-thumbnail"><?php the_post_thumbnail( 'large' ); ?></div></a>
					<?php endif; ?>
					
					<div class="product-title-section">
						<h2 class="entry-title">
							<p><?php the_title(); ?></p> 
							<p><?php echo CFS()->get( 'price' ); ?></p>
						</h2>
					</div>
				</div>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>
        </section>
		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>