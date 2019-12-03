<?php
// get all files in the includes/functions folder
// for the glob() function to work properly, we give it an absolute path

$files = glob( get_template_directory() . '/includes/theme/*.php' );

foreach ( $files as $file ) {
include $file;

}

add_filter('use_block_editor_for_post', '__return_false', 10);

function get_the_post_thumbnail_src($img)
{
    return (preg_match('~\bsrc="([^"]++)"~', $img, $matches)) ? $matches[1] : '';
}

add_action( 'admin_enqueue_scripts', 'mytheme_backend_scripts');

if ( ! function_exists( 'mytheme_backend_scripts' ) ){
    function mytheme_backend_scripts( $hook ) {
        wp_enqueue_style( 'wp-color-picker');
        wp_enqueue_script( 'wp-color-picker');
    }
}

function add_image_class($class){
    $class .= ' img-fluid';
    return $class;
}
add_filter('get_image_tag_class','add_image_class');

