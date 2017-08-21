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
        <h1 class="single-product-title"><?php the_title(); ?></h1>
        <p class="price"><?php echo CFS()->get( 'price' ); ?></p>
        <?php the_content(); ?>
        <div class="social-wrap">
          <button class="white-link"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Like</a></button>
          <button class="white-link"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Tweet</a></button>
          <button class="white-link"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i> Pin</a></button>
        </div><!--.social-wrap-->
      </div><!--.product-desc-->
    <?php endwhile; // End of the loop. ?>
  </article><!--.container-->
</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>