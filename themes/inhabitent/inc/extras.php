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