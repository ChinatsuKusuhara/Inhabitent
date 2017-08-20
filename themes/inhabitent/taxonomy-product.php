<?php
/**
 * Template Name: Archive Product
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

				$term = get_term( 'product_type' ); ?>
					<ul class="shop-stuff-items">
						<?php foreach ($terms as $term): ?>
						<?php $url = get_term_links($term->slug, 'product_type'); ?>

						<a href="<?php echo $url ?>"><?php echo $term->name ?></a>
						<?php endforeach; ?>
					</ul>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
				<div class="product-types">
					<?php while (have_posts() ) : the_post(); ?>
						<div class="product-details">
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<header class="entry-header">
									<?php if ( has_post_thumbnail() ) : ?>
										<a href="<?php permalink(); ?>">
											<?php get_post_thumbnail('large'); ?> 
										</a>

									<?php endif; ?>
									<div class="product-type-details">
										<?php the_title(sprintf ('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( (get_pramalink() ) )), '</a></h2>'); ?>

											<p><?php echo CFS()->get('price'); ?></p>
									</div>
						</div>
				</div>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
