<?php

    // Option Tree
    add_filter('ot_theme_mode', '__return_true');
    add_filter('ot_show_pages', '__return_false');
    add_filter('ot_show_new_layout', '__return_false');
    //load_template(trailingslashit(get_template_directory()) . 'options/ot-loader.php');
    require_once('options/ot-loader.php');
    require_once('theme-options.php');
    
    // Content With
    if(!isset($content_width)) {
        $content_width = 700;
    }
    
    // Page Title
    function w_title($delimiter) {
        global $post;
        
        if(is_home()) {
            $title = get_bloginfo('name') . ' ' . $delimiter . ' ' . get_bloginfo('description');
        }
        elseif(is_single() || is_page()) {
            $title = get_the_title($post->ID) . ' ' . $delimiter . ' ' . get_bloginfo('name');
        }
        elseif(is_category()) {
            $title = single_cat_title('', false) . ' ' . $delimiter . ' ' . get_bloginfo('name');
        }
        elseif(is_tag()) {
            $title = single_tag_title('', false). ' ' . $delimiter . ' ' . get_bloginfo('name');
        }
        elseif(is_archive()) {
            $title = 'Archive for ' . get_the_date() . ' ' . $delimiter . ' ' . get_bloginfo('name');
        }
        elseif(is_search()) {
            $title = get_search_query() . ' ' . $delimiter . ' ' . get_bloginfo('name');
        }
        else {
            $title = get_bloginfo('name');
        }
        
        return $title;
    }
    
    // Get Avatar
    function w_get_avatar_url($author_id, $size) {
        $get_avatar = get_avatar($author_id, $size);
        
        preg_match("/src='(.*?)'/i", $get_avatar, $matches);
        
        return ($matches[1]);
    }
    
    // Get Post Thumbnail URL
    function w_get_thumbnail_url($size = 'large') {
        global $post;
        
        $featured_image = get_post_thumbnail_id($post->ID);
        $featured_image = wp_get_attachment_image_src($featured_image, $size, true);
        $featured_image = $featured_image[0];
        
        return $featured_image;
    }
    
    // Check Post Thumbnail
    function w_check_thumbnail() {
        global $post;
        
        if(has_post_thumbnail($post->ID)) {
            $thumbnail = w_get_thumbnail_url('large');
        }
        else {
            if(ot_get_option('site_coverphoto')) {
                $thumbnail = ot_get_option('site_coverphoto');
            }
            else {
                $thumbnail = get_stylesheet_directory_uri() . '/assets/img/santiagum-cover.jpg';
            }
        }
        
        return $thumbnail;
    }
    
    // Support
    if(function_exists('add_theme_support')) {
        add_theme_support('post-thumbnails', array('post', 'page'));
        
        add_theme_support('automatic-feed-links');
        
        add_theme_support('html5', array('search-form'));
    }
    
    // Custom Filters, Hooks and Actions
    add_filter('next_posts_link_attributes', 'next_posts_link_custom_attr');
    add_filter('previous_posts_link_attributes', 'previous_posts_link_custom_attr');
    function next_posts_link_custom_attr() {
        return 'class="older-posts"';
    }
    function previous_posts_link_custom_attr() {
        return 'class="newer-posts"';
    }
    
    add_filter('wp_list_categories', 'cat_count_span');
    function cat_count_span($links) {
        $links = str_replace('</a> (', '</a> <span>', $links);
        $links = str_replace(')', '</span>', $links);
        
        return $links;
}
    
    add_action('admin_menu', 'remove_menus');
    function remove_menus() {
        //remove_menu_page('ot-settings');
    }
    
    add_action('admin_head', 'custom_admin_styles');
    function custom_admin_styles() {
        echo '<style>
            li.toplevel_page_ot-settings,
            .option-tree-save-layout,
            #option-tree-sub-header {
                display: none;
            }
        </style>';
    }
    
    add_action('init', 'register_menus');
    function register_menus() {
        register_nav_menus(array(
            'home-nav' => 'Home Nav'
        ));
    }

?>