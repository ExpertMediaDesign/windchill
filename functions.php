<?php
/**
 * Additional functions for the WindChill child theme.
 * 
 * Runs in addition to Frost's functions.php, so might need to look there if having issues.
 *
 */


// Enqueue stylesheet.
add_action( 'wp_enqueue_scripts', 'windchill_enqueue_stylesheet' );
function windchill_enqueue_stylesheet() {

	$theme = wp_get_theme();

	wp_enqueue_style( 'windchill-style', get_stylesheet_directory_uri() . '/build/css/app.css', array(), $theme->get( 'Version' ) );
	wp_enqueue_script( 'windchill-script', get_stylesheet_directory_uri() . '/build/js/app.js', array(), $theme->get( 'Version' ) );

}

/**
 * Register block pattern categories.
 *
 * @since 1.0.4
 */
function windchill_register_block_pattern_categories() {

	register_block_pattern_category(
		'windchill-page',
		array(
			'label'       => __( 'Page', 'windchill' ),
			'description' => __( 'Create a full page with multiple patterns that are grouped together.', 'windchill' ),
		)
	);
	register_block_pattern_category(
		'windchill-pricing',
		array(
			'label'       => __( 'Pricing', 'windchill' ),
			'description' => __( 'Compare features for your digital products or service plans.', 'windchill' ),
		)
	);

}

add_action( 'init', 'windchill_register_block_pattern_categories' );


/**
 * Disable Emojis - causing an import conflict with PostCSS
 */
// function frosttail_smartwp_disable_emojis() {

// 	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
// 	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
// 	remove_action( 'wp_print_styles', 'print_emoji_styles' );
// 	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
// 	remove_action( 'admin_print_styles', 'print_emoji_styles' );
// 	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
// 	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
// 	add_filter( 'tiny_mce_plugins', 'frosttail_disable_emojis_tinymce' );

// }

// function frosttail_disable_emojis_tinymce( $plugins ) {

// 	if ( is_array( $plugins ) ) {
// 		return array_diff( $plugins, array( 'wpemoji' ) );
// 	} else {
// 		return array();
// 	}

// }

// add_action( 'init', 'frosttail_smartwp_disable_emojis' );