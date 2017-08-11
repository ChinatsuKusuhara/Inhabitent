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
function inhabitent_logo() {
     echo '<style type="text/css">                                                                   
         h1 a { background-image:url('.get_stylesheet_directory_uri().'/asset/logos/inhabitent-logo-text-dark.svg) !important; 
         height: 65px !important; width: 410px !important; margin-left: -40px;}                            
     </style>';
}
add_action('login_head', 'inhabitent_logo');


//changed link of the login
function inhabitent_login_logo() {
	return home_url();
}
add_filter('login_headerurl', 'inhabitent_login_logo');



//customized the title attribute for the login logo link 
function inhabitent_login_title() {
	return 'Inhabitent';
}
add_filter( 'logo_headertitle', 'inhabitent_login_title');