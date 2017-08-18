<?php
/**
 * Template Name: Front Page 
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<section class="hero-banner">
			<img class="logo-circle" src=" <?php echo get_template_directory_uri(); ?>/asset/logos/inhabitent-logo-full.svg" alt="Inhabitent Camping Supply Co.">
		</section>
			<?php while ( have_posts() ) : the_post(); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->

	</div><!-- #primary -->

	<section class="shop-stuff-home container">
		<h2>Shop Stuff</h2>
		<div class="shop-section">
			<?php $terms = get_terms( 'product' );
				foreach ( $terms as $term ) {
			?>
			<?php 
				$url = get_term_link($term->slug, 'product');
			?>
			<div class="shop-stuff-content">
				<img src="<?php echo get_template_directory_uri(); ?>/asset/product-type-icons/<?php echo $term->slug; ?>.svg">
				<p><?php echo $term->description ?></p>
			</div>
					<?php
				}
					?>
		</div>
	</section>

	<section class="journal-home">
			<?php
			$args = array( 
				'posts_per_page'   => 3,
				'orderby'          => 'date',
				'order'            => 'DESC',
				'post_type'        => 'post',
				'post_status'      => 'publish',
				'suppress_filters' => true 
			);
			$product_posts = get_posts( $args ); // returns an array of posts
		?>

		<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>

		<?php if (has_post_thumbnail() ) : ?>	
			<?php the_post_thumbnail( 'medium' ); ?>
		<?php endif; ?>
		</section>

<!-- add comments -->

<h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>

<?php endforeach; wp_reset_postdata(); ?>

<?php get_footer(); ?>