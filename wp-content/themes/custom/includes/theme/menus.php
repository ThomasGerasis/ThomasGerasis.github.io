<?php

/**
 * Register theme's navigation menus
 */
function froyt_theme_menus() {
	register_nav_menus(
		array(
			'header-menu'  => __( 'Header', 'froy' ),
			'mobile-menu'  => __( 'Mobile Header', 'froy' ),
			'footer-prwto'  => __( 'Footer First', 'froy' ),
			'footer-deutero'  => __( 'Footer Second', 'froy' ),
			'footer-trito'  => __( 'Footer Third', 'froy' ),
			'footer-tetarto'  => __( 'Footer Fourth', 'froy' ),
            'footer-bottom'  => __( 'Footer Bottom', 'froy' ),
		)
	);
}

add_action( 'init', 'froyt_theme_menus' );

class SH_Arrow_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);
        if('header-menu' == $args->theme_location && $depth ==0){
            $output .='<span class="arrow"><i class="fa fa-caret-down"></i></span>';
        }
        $output .= "\n$indent<ul class=\"sub-menu\">\n";
    }
}

