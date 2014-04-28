<?php
/**
 * Initialize the custom theme options.
 */
add_action( 'admin_init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'sidebar'       => ''
    ),
    'sections'        => array( 
      array(
        'id'          => 'site_general',
        'title'       => 'General'
      ),
      array(
        'id'          => 'site_social_networks',
        'title'       => 'Social Networks'
      )
    ),
    'settings'        => array( 
      array(
        'id'          => 'site_logo',
        'label'       => 'Logo',
        'desc'        => 'This logo will appear in the center of home page just bellow cover photo. Note that this logo will be displayed as circle image.',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'site_general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'site_isotype',
        'label'       => 'Isotype',
        'desc'        => 'This is the isotype image that appears in the upper left corner of website. Upload a square image (i.e: 90x90 px).',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'site_general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'site_favicon',
        'label'       => 'Favicon',
        'desc'        => '16x16 px PNG or ICO file.',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'site_general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'site_coverphoto',
        'label'       => 'Cover Photo',
        'desc'        => 'This is the main big picture that appears at the top of the home page.',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'site_general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'site_google_analytics',
        'label'       => 'Google Analytics ID',
        'desc'        => 'i.e: UA-183476423-0',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'site_general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'site_fb_url',
        'label'       => 'Facebook Profile URL',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'site_social_networks',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'site_tw_url',
        'label'       => 'Twitter Profile URL',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'site_social_networks',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'site_gg_url',
        'label'       => 'Google+ Profile URL',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'site_social_networks',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'site_tb_url',
        'label'       => 'Tumblr URL',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'site_social_networks',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'site_in_url',
        'label'       => 'Linkedin Profile URL',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'site_social_networks',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'site_4s_url',
        'label'       => 'Foursquare Profile URL',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'site_social_networks',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'site_ig_url',
        'label'       => 'Instagram Profile URL',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'site_social_networks',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'site_fr_url',
        'label'       => 'Flickr URL',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'site_social_networks',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'site_yt_url',
        'label'       => 'YouTube Channel URL',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'site_social_networks',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'site_fm_url',
        'label'       => 'Last.fm Profile URL',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'site_social_networks',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'site_sc_url',
        'label'       => 'SoundCloud Profile URL',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'site_social_networks',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'site_pr_url',
        'label'       => 'Pinterest Profile URL',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'site_social_networks',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'site_db_url',
        'label'       => 'Dribbble Profile URL',
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'site_social_networks',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      )
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
}