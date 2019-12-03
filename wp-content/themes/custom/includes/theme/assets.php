<?php

/**
 * Load theme's stylesheets and scripts
 */
function froy_assets() {

	$styles_dir = get_template_directory_uri() . '/assets/styles/';
	$scripts_dir = get_template_directory_uri() . '/assets/js/';

	// Enqueue styles
	// --------------

	wp_enqueue_style( 'main', $styles_dir . 'main.css', array(), null, 'all' );
	wp_enqueue_style( 'mainsd', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css', array(), null, 'all' );
	wp_enqueue_style( 'custom', 'https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css', array(), null, 'all' );

	// Enqueue scripts
	// ---------------

	// jquery
	if ( ! is_admin() ) {

//		// deregisters the default WordPress jQuery
//		wp_deregister_script( 'jquery' );

		// the URL to check against
		$cdn_url = 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js';

		// test parameters
		$test_cdn_url = @fopen( $cdn_url, 'r' );

		if ( false !== $test_cdn_url ) {
			// register the cdn file
			//wp_register_script( 'jquery', $cdn_url, array(), null, true );

			// enqueue the cdn file
			//wp_enqueue_script( 'jquery' );
		} else {
			// register the local file
			//wp_register_script( 'jquery', $scripts_dir . 'vendor/jquery/3.2.1/jquery.min.js', array(), null, true );

			// enqueue the local file
		//	wp_enqueue_script( 'jquery' );
		}
	}else{
		//wp_register_script( 'jquery', $cdn_url, array(), null, true );
	}

	// Vendor scripts of theme
	wp_enqueue_script( 'vendor', $scripts_dir . 'vendor.min.js', array( 'jquery' ), null, true );

	// Custom scripts of theme

//    wp_enqueue_script( 'custom4', $scripts_dir. 'scripts.min.js' , array( 'jquery' ), null, true );
}

// Load theme's stylesheets and scripts
add_action( 'wp_enqueue_scripts', 'froy_assets' );

add_filter( 'script_loader_tag', 'wsds_defer_scripts', 10, 3 );

function wsds_defer_scripts( $tag, $handle, $src ) {

	// The handles of the enqueued scripts we want to defer
	$defer_scripts = array(
		'remove-uppercase-accents',
	);

    if ( in_array( $handle, $defer_scripts ) ) {
        return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
    }

    return $tag;
}
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');




function default_js() {
    wp_enqueue_script('scripts', get_template_directory_uri( ) . '/assets/js/scripts.min.js', array(), '1.0' );
}

add_action( 'wp_enqueue_scripts', 'default_js');

function wp_admin_scripts() {
    wp_enqueue_script( 'admin_script', get_template_directory_uri( ) . '/assets/js/admin_scripts.min.js', array(), '5.0' );

}
add_action( 'admin_enqueue_scripts', 'wp_admin_scripts' );

// Add style for Admin Menu Post type and icons, theme settings
function custom_admin_style() {
    wp_enqueue_style('my-admin-style', get_stylesheet_directory_uri() . '/assets/styles/admin-style.css');
}
add_action('admin_enqueue_scripts', 'custom_admin_style');
