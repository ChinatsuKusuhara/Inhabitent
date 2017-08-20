<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */

function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );


//customized WP logo to Inhabitent logo on login page 
//changed link of the login
function inhabitent_login_logo() { ?>
	 <style type="text/css">
		#login h1 a, .login h1 a {
			background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/asset/logos/inhabitent-logo-text-dark.svg);
			padding-bottom: 30px;
			background-size: 310px !important;
			width: 310px !important;
			background-position: bottom !important;
		}
	</style> 
<?php }

add_filter('login_enqueue_scripts', 'inhabitent_login_logo');
add_filter( 'logo_headertitle', 'inhabitent_login_title');

/**
 * Make hero image customizable through CFS field or featured image.
 */
 function inhabitent_dynamic_css() {
	if ( ! is_page_template( 'page-templates/about.php' ) ) {
			return;
	}
	
	$image = CFS()->get( 'about_header_image' );
	if ( ! $image ) {
			return;
	}
	$hero_css = ".page-template-about .entry-header {
			background:
					linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
					url({$image}) no-repeat center bottom;
			background-size: cover, cover;
	}";
	wp_add_inline_style( 'tent-style', $hero_css );
}
add_action( 'wp_enqueue_scripts', 'inhabitent_dynamic_css' );

/* ARCHIVE for DO EAT SLEEP and WEAR */ 
function archive_product_title( $title ) {  //change to inhabitent_archive_product_title on Line 66&75
	if(is_post_type_archive('product_type')) {
		$title = 'Shop Stuff';
	} 
	elseif(is_tax('')){  //make sure this 'product-type' and not 'product'
		$title = single_term_title('', false);
	}
	return $title;
}
add_filter('get_the_archive_title', 'archive_product_title');

/* this will take in 16 and 4  images of the shop stuff*/ 

function get_product_posts($query) {
	if(is_post_type_archive('product') && !is_admin() && $query->is_main_query()) {
		$query->set( 'posts_per_page', 16);
		$query->set( 'orderby', 'title');
		$query->set( 'order', 'ASC' );
	}
}
add_action('pre_get_posts', 'get_product_posts');

function product_archive_title($title) {
	if( is_post_type_archive('product')) {
		$title = "Shop Stuff";
	} elseif( is_tax() ){
		$title = single_term_title('', false);
	}
		return $title;
}
add_filter('get_the_archive_title', 'product_archive_title');

/* Get the Archive title for DO EAT SLEEP and WEAR */ 
function inhabitent_archive_title($title) {
	if(is_category() ) {
		$title = single_cat_title('', false);
	} elseif (is_tag() ) {
		$title = single_tag_title('', false);
	} elseif (is_tax() ) {
		$title = single_term_title('', false);
	}
	return $title;
}
add_filter ('get_the_archive_title', 'inhabitent_archive_title');

function red_wp_trim_excerpt( $text ) {
		$raw_excerpt = $text;
		if ( '' == $text ) {

			//for grabbing the post content
			$text = get_the_content('');

			//delete all shortcode tags from the content 
			$text = strip_shortcodes( $text );
			$text = apply_filters( 'the_content', $text );
			$text = str_replace( ']]>', ']]&gt;', $text );

			//indicate allowable tags
			$allowed_tags == '<p>,<a>,<em>,<strong>,<blockquote>,<cite>';
			$text = strip_tags( $text, $allowed_tags );

			//change to desired word count 
			$excerpt_word_count = 50;
			$excerpt_length = apply_filters( 'excerpt_length', $excerpt_word_count ); 

			//create custom "more" page 
			$excerpt_end = '<span>[...]</span><p><a href="' . get_permalink() .' " class="read-more">Read More &rarr;</a></p>';
			$excerpt_more = apply_filters( 'excerpt_more', ' ' . $excerpt_end);

			//add the elipisis + link end if word count is over the limit 
			$word = preg_split( "/[ \n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY );
			if ( count( $words ) > $excerpt_length ) {
				array_pop( $words );
				$text = implode( ' ', $words );
				$text = $text . $excerpt_more;
			} else {
				$text = implode( ' ', $words );
			}
			}
			return apply_filters( 'wp_trim_excerpt', $text, $raw_excerpt );		
		}
remove_filter( 'get_the_excerpt', 'wp_trim_excerpt');
add_filter( 'get_the_excerpt', 'red_wp_trim_excerpt'); 