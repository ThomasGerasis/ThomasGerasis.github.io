<?php
/**
 * Allows templates for Custom Post Type to be in a separate folder
 *
 * @link https://wordpress.org/support/topic/custom-post-type-templates-and-custom-directory-locaiton
 */
//function nba_custom_template_include( $template ) {
//
//    $custom_template_location = '/templates/';
//
//    if ( get_post_type() ) {
//        if (is_archive()) :
//            $page_id = get_queried_object_id();
//            if(in_array($page_id, array('268','267','248'))){
//                if ( file_exists( get_stylesheet_directory() . $custom_template_location . 'archive-' . get_post_type() . '-'.$page_id.'.php' ) ) {
//                    return get_stylesheet_directory() . $custom_template_location . 'archive-' . get_post_type() . '-'.$page_id.'.php';
//                }
//            }else{
//                if (file_exists(get_stylesheet_directory() . $custom_template_location . 'archive-' . get_post_type() . '.php')) {
//                    return get_stylesheet_directory() . $custom_template_location . 'archive-' . get_post_type() . '.php';
//                }
//            }
//        endif;
//        if ( is_single() ) :
//            if ( file_exists( get_stylesheet_directory() . $custom_template_location . 'single-' . get_post_type() . '.php' ) ) {
//                return get_stylesheet_directory() . $custom_template_location . 'single-' . get_post_type() . '.php';
//            }
//        endif;
//    }
//
//    return $template;
//}

//add_filter( 'template_include', 'nba_custom_template_include' );
// Selects Custom Post Type Templates for single and archive pages

add_filter('template_include', 'custom_template_include');
function custom_template_include($template) {
    global $wp_query, $post;
    $custom_template_location = '/templates/';
    if ( get_post_type () ) {
        if ( is_archive() ) :
            if(file_exists(get_stylesheet_directory() . $custom_template_location . 'archive-' . get_post_type() . '.php'))
                return get_stylesheet_directory() . $custom_template_location . 'archive-' . get_post_type() . '.php';
        endif;
        if ( is_single() ) :
            if(file_exists(get_stylesheet_directory() . $custom_template_location . 'single-' . get_post_type() . '.php'))
                return get_stylesheet_directory() . $custom_template_location . 'single-' . get_post_type() . '.php';
        endif;
    }

    foreach((array)get_the_category() as $cat) :

        if(file_exists(get_stylesheet_directory() . $custom_template_location . '/single-category' . $cat->slug . '.php'))
            return get_stylesheet_directory() . $custom_template_location . '/single-' . $cat->slug . '.php';

        elseif(file_exists(get_stylesheet_directory() . $custom_template_location . '/single-category' . $cat->term_id . '.php'))
            return get_stylesheet_directory() . $custom_template_location . '/single-' . $cat->term_id . '.php';
    endforeach;

    foreach(get_terms() as $tax) :

        if(file_exists(get_stylesheet_directory() . $custom_template_location . '/taxonomy-' . $tax->slug . '.php'))
            return get_stylesheet_directory() . $custom_template_location . '/taxonomy-' . $tax->slug . '.php';

        elseif(file_exists(get_stylesheet_directory() . $custom_template_location . '/taxonomy-' . $tax->term_id . '.php'))
            return get_stylesheet_directory() . $custom_template_location . '/taxonomy-' . $tax->term_id . '.php';
    endforeach;

    return $template;
}

