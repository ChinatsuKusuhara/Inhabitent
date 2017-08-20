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
        <div class="boxes" id="post-<?php the_ID(); ?>" <?php post_classes(); ?>>
          <?php while (have_posts() ) : the_post(); ?>
          <div class="product-post">
            <div class="product-thumbnail">
              <div class="product-grid">
                <a href="<?php the_permalink(); ?>">
                         <?php the_post_thumbnail( 'large' ); ?>
                </a>
              </div>
            </div>
          </div>
        </div>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
