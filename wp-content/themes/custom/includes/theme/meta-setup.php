<?php
include_once WP_CONTENT_DIR . '/themes/custom/includes/plugins/wpalchemy/MetaBox.php';
require_once WP_CONTENT_DIR . '/themes/custom/includes/plugins/wpalchemy/MediaAccess.php';


// global styles for the meta boxes
if (is_admin()) add_action('admin_enqueue_scripts', 'metabox_style');

if (!function_exists('metabox_style')) {
    function metabox_style() {
        if ( is_admin() )
        {
            wp_enqueue_style( 'wpalchemy-metabox', WP_CONTENT_DIR.'/themes/custom/includes/plugins/wpalchemy/meta.css' );
        }
    }
}
$wpalchemy_media_access = new WPAlchemy_MediaAccess;



