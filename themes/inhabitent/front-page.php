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

<!-- add comments -->

<h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>

<?php endforeach; wp_reset_postdata(); ?>

<?php get_footer(); ?>
