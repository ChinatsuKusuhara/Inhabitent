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
		<h2 class="header">Shop Stuff</h2>
		<div class="shop-section">
			<?php $terms = get_terms( 'product_type' );
				foreach ( $terms as $term ) {
			?>
			<?php 
				$url = get_term_link($term->slug, 'product_type');
			?>
			<div class="shop-stuff-content">
				<img  src="<?php echo get_template_directory_uri(); ?>/asset/product-type-icons/<?php echo $term->slug; ?>.svg">
				<p><?php echo $term->description ?></p>
				<p><a href="<?php echo $url ?>" class="shop-button"><?php echo $term->name.'';?></a></p>
			</div>
					<?php
				}
					?>
		</div>
	</section>

	<section class="journal-home container">
		<h2 class="header">Inhabitent Journal</h2>
			<div class="journal-post-page">
				<?php
				$args = array( 
					'posts_per_page'   => 3,
					'orderby'          => 'date',
					'order'            => 'DESC',
					'post_type'        => 'post',
					'post_status'      => 'publish',
					'suppress_filters' => true 
				);
				?>
				<?php
					$product_posts = get_posts( $args ); // returns an array of posts
				?>

					<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
				
				<div class="journal-content-post">
							<?php the_post_thumbnail( '' ); ?>
						<div class="journal-post-info">
							<p class="commented-dates">
								<?php the_date(); ?>
								<?php $comments_count = wp_count_comments();
								echo $comments_count->approved . "Comments" ?>
							</p>
								<h3><a class="post-title" href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
									<a class="read-more" href="<?php the_permalink(); ?>">Read Entry</a>
						</div>
				</div>
					<?php endforeach; wp_reset_postdata(); ?>
			</div>
	</section>

	<!-- ADVENTURE  -->
	<div class="adventures container">
		<h2>Latest Adventures</h2>

		<section class="latest-adventures">
			<div class="photo-1">
				<h3><a class="adventure-link" href="#">Getting Back to Nature in a Canoe</a></h3>
				<p><a class="read-more" href="#">Read More</a></p>
			</div>
			<div class="photo-right">
				<div class="photo-2">
					<h3><a class="adventure-link" href="#">A night with Friends at the Beach</a></h3>
					<p><a class="read-more" href="#">Read More</a></p>
				</div>
				<div class="photo-bottom">
					<div class="photo-3">
						<h3><a class="adventure-link" href="#">Taking in the View at the Big Mountains</a></h3>
						<p><a class="read-more" href="#">Read More</a></p>
					</div>
					<div class="photo-4">
						<h3 class="adventure-link" href="#">Star-Gazing at the Night Sky</a></h3>
						<p><a class="read-more" href="#">Read More</a></p>
					</div>
				</div>
			</section>
			<p class="more-adventures" href="#">More Adventure</a></p>
	</div>

<?php get_footer(); ?>