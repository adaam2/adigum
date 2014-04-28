<?php
    if(ot_get_option('site_isotype')) {
        $isotype = ot_get_option('site_isotype');
    }
    else {
        $isotype = get_stylesheet_directory_uri() . '/assets/img/santiagum-isotype.png';
    }
    
    if(ot_get_option('site_favicon')) {
        $favicon = ot_get_option('site_favicon');
    }
    else {
        $favicon = get_stylesheet_directory_uri() . '/assets/img/santiagum-favicon.png';
    }
    
    if(ot_get_option('site_tw_url')) {
        $twitter_username = parse_url(ot_get_option('site_tw_url'));
        $twitter_username = $twitter_username['path'];
    }
    else {
        $twitter_username = false;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <title><?php echo w_title('—'); ?></title>
        
        <!-- meta -->
        <meta name="description" content="<?php bloginfo('description'); ?>" />
        <meta name="HandheldFriendly" content="True" />
        <meta name="MobileOptimized" content="320" />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="<?php bloginfo('name'); ?>">
        <meta name="twitter:description" content="<?php bloginfo('description'); ?>">
        <meta name="twitter:site" content="<?php bloginfo('url'); ?>">
        <?php if($twitter_username) : ?>
        <meta name="twitter:creator" content="<?php echo str_replace('/', '@', $twitter_username); ?>">
        <?php endif; ?>
        <meta name="google-site-verification" content="">
        
        <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
        <meta property="og:type" content="blog">
        <?php if(is_single() OR is_page()) : ?>
        <meta property="og:title" content="<?php the_title(); ?>">
        <meta property="og:description" content="<?php echo get_the_excerpt(); ?>">
        <meta property="og:url" content="<?php the_permalink(); ?>">
        <?php else : ?>
        <meta property="og:title" content="<?php bloginfo('name'); ?>">
        <meta property="og:description" content="<?php bloginfo('description'); ?>">
        <meta property="og:url" content="<?php bloginfo('url'); ?>">
        <?php endif; ?>
        <meta property="og:image" content="<?php echo w_check_thumbnail(); ?>">
        <!-- /meta -->
        
        <!-- styles -->
        <link href="<?php echo $favicon; ?>" rel="shortcut icon">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/main.css" rel="stylesheet">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/styles/github.css" rel="stylesheet">
        <link href="//brick.a.ssl.fastly.net/Linux+Libertine:400,400i,700,700i/Open+Sans:400,400i,700,700i" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
        <!-- /styles -->
        
        <!-- scripts -->
        <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <!-- /scripts -->
    </head>
    
    <body <?php body_class(); ?>>
        <a href="<?php bloginfo('url'); ?>" class="logo-santiagum"><span class="logo" style="background-image: url(<?php echo $isotype; ?>);"></span></a>