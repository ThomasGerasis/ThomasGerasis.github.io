<!DOCTYPE html>
<html lang="el">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style><?php include('assets/styles/core.css'); ?></style>
    <link rel="shortcut icon" type="image/png" href="/wp-content/themes/nbaholics/assets/images/favicon.png"/>

    <title><?php echo get_post_meta(get_the_ID(), '_yoast_wpseo_title', true) ? get_post_meta(get_the_ID(), '_yoast_wpseo_title', true) : get_the_title();?></title>
    <meta name="description" content="<?php echo get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true) ? get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true) : get_the_excerpt( $post->ID );?>" />
    <meta property="og:locale" content="el_GR" />
    <meta property="og:type" content="website" />
    <link rel="canonical" href="<?php echo wp_get_canonical_url($post->ID); ?>">
    <meta property="og:title" content="<?php echo get_post_meta(get_the_ID(), '_yoast_wpseo_title', true) ? get_post_meta(get_the_ID(), '_yoast_wpseo_title', true) : get_the_title();?>" />
    <meta property="og:description" content="<?php echo get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true) ? get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true) : get_the_excerpt( $post->ID );?>" />
    <meta property="og:site_name" content="NbaHolics.gr" />
    <meta property="og:image" content="<?php echo get_the_post_thumbnail_url($post->ID,'thumb-876') ;?>" />
    <meta property="og:image:secure_url" content="<?php echo get_the_post_thumbnail_url($post->ID,'thumb-876'); ?>" />
    <meta property="og:url" content="<?php echo get_the_permalink($post->ID); ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="<?php echo get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true);?>" />
    <meta name="twitter:title" content="<?php echo get_post_meta(get_the_ID(), '_yoast_wpseo_title', true) ? get_post_meta(get_the_ID(), '_yoast_wpseo_title', true) : get_the_title( $post->ID );?>" />
    <meta name="twitter:image" content="<?php echo get_the_post_thumbnail_url();?>" />
    <meta property="fb:admins" content="{100000267006931}"/>
    <meta property="fb:app_id" content="{362531171320569}" />
</head>


<script type="text/javascript"> (function() { var css = document.createElement('link'); css.href = 'https://use.fontawesome.com/releases/v5.8.1/css/all.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>
<script>
    window.FontAwesomeConfig = {
        searchPseudoElements: true
    }
</script>
<?php get_template_part("menus/main-menu") ?>
<body class=" page-id<?= $post->ID;?>">



