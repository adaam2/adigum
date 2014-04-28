<?php

    // Option Tree
    add_filter( 'ot_theme_mode', '__return_true' );
    load_template( trailingslashit( get_template_directory() ) . 'options/ot-loader.php' );
    
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
        else {
            $title = get_bloginfo('name');
        }
        
        return $title;
    }
    
    // Get avatar
    function get_avatar_url($author_id, $size) {
        $get_avatar = get_avatar($author_id, $size);
        
        preg_match("/src='(.*?)'/i", $get_avatar, $matches);
        
        return ($matches[1]);
    }
    
    // Support
    if(function_exists('add_theme_support')) {
        add_theme_support('post-thumbnails', array('post', 'page'));
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

?>