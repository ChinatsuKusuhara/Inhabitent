<?php
/**
 * Template : Single Product
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
<main id="main" class="site-main">
  <article class="one-product">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="product-img">
        <?php the_post_thumbnail( 'large' ); ?>
      </div>
      <div class="product-desc">
        <h1><?php the_title(); ?></h1>
        <h2><?php echo CFS()->get( 'product_price' ); ?></h2>
        <?php the_content(); ?>
        <div class="social-wrap">
          <p class="white-link"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Like</a></p>
          <p class="white-link"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Tweet</a></p>
          <p class="white-link"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i> Pin</a></p>
        </div><!--.social-wrap-->
      </div><!--.product-desc-->
    <?php endwhile; // End of the loop. ?>
  </article><!--.container-->
</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>