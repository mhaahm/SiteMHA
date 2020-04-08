<?php


//======================MISC SECTION===============================

//------SOCIAL LINKS SETTINGS

//Social links Icons Style
$wp_customize->add_setting('complete[social_button_style]', array(
		'type' => 'option',
        'default' => 'simple',
		'sanitize_callback' => 'complete_sanitize_choices',
		'transport' => 'postMessage',
) );
 
			$wp_customize->add_control( new complete_Control_Radio_Image( $wp_customize, 'social_button_style', array(
					'type' => 'radio-image',
					'label' => __('Social links Icons Style','complete'),
					'section' => 'socialinks_section',
					'settings' => 'complete[social_button_style]',
					'choices' => array(
						'simple' => array( 'url' => get_template_directory_uri().'/assets/images/social/social_simple.png', 'label' => 'Round' ),
					),
			) ));


//Social Icons Position
$wp_customize->add_setting('complete[social_bookmark_pos]', array(
		'type' => 'option',
        'default' => 'footer',
		'sanitize_callback' => 'complete_sanitize_choices',
		'transport' => 'postMessage',
) );
 
			$wp_customize->add_control('social_bookmark_pos', array(
					'type' => 'select',
					'label' => __('Social Icons Position','complete'),
					'section' => 'socialinks_section',
					'settings' => 'complete[social_bookmark_pos]',
					'choices' => array(
							'header' => __( 'Header', 'complete' ),
							'footer' => __( 'Footer', 'complete' ),
					),
			) );

//Social Icons Size
$wp_customize->add_setting('complete[social_bookmark_size]', array(
		'type' => 'option',
        'default' => 'normal',
		'sanitize_callback' => 'complete_sanitize_choices',
		'transport' => 'postMessage',
) );
 
			$wp_customize->add_control('social_bookmark_size', array(
					'type' => 'select',
					'label' => __('Social Icons Size','complete'),
					'section' => 'socialinks_section',
					'settings' => 'complete[social_bookmark_size]',
					'choices' => array(
							'normal' => __( 'Normal', 'complete' ),
							'large' => __( 'Large', 'complete' ),
					),
			) );


//-------------------SOCIAL LINKS----------------------

//Facebook URL
$wp_customize->add_setting('complete[facebook_field_id]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('facebook_field_id', array(
				'type' => 'text',
				'label' => __('Facebook URL','complete'),
				'section' => 'socialinks_section',
				'settings' => 'complete[facebook_field_id]',
			) );


//Twitter URL
$wp_customize->add_setting('complete[twitter_field_id]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('twitter_field_id', array(
				'type' => 'text',
				'label' => __('Twitter URL','complete'),
				'section' => 'socialinks_section',
				'settings' => 'complete[twitter_field_id]',
			) );

//Google Plus URL
$wp_customize->add_setting('complete[gplus_field_id]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('gplus_field_id', array(
				'type' => 'text',
				'label' => __('Google Plus URL','complete'),
				'section' => 'socialinks_section',
				'settings' => 'complete[gplus_field_id]',
			) );

//Youtube  URL
$wp_customize->add_setting('complete[youtube_field_id]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('youtube_field_id', array(
				'type' => 'text',
				'label' => __('Youtube URL','complete'),
				'section' => 'socialinks_section',
				'settings' => 'complete[youtube_field_id]',
			) );


//Flickr URL
$wp_customize->add_setting('complete[flickr_field_id]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('flickr_field_id', array(
				'type' => 'text',
				'label' => __('Flickr URL','complete'),
				'section' => 'socialinks_section',
				'settings' => 'complete[flickr_field_id]',
			) );


//Linkedin URL
$wp_customize->add_setting('complete[linkedin_field_id]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('linkedin_field_id', array(
				'type' => 'text',
				'label' => __('Linkedin URL','complete'),
				'section' => 'socialinks_section',
				'settings' => 'complete[linkedin_field_id]',
			) );

//Pinterest URL
$wp_customize->add_setting('complete[pinterest_field_id]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('pinterest_field_id', array(
				'type' => 'text',
				'label' => __('Pinterest URL','complete'),
				'section' => 'socialinks_section',
				'settings' => 'complete[pinterest_field_id]',
			) );


//Tumblr URL
$wp_customize->add_setting('complete[tumblr_field_id]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('tumblr_field_id', array(
				'type' => 'text',
				'label' => __('Tumblr URL','complete'),
				'section' => 'socialinks_section',
				'settings' => 'complete[tumblr_field_id]',
			) );

//Instagram URL
$wp_customize->add_setting('complete[instagram_field_id]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('instagram_field_id', array(
				'type' => 'text',
				'label' => __('Instagram URL','complete'),
				'section' => 'socialinks_section',
				'settings' => 'complete[instagram_field_id]',
			) );

//Dribble URL
$wp_customize->add_setting('complete[dribble_field_id]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('dribble_field_id', array(
				'type' => 'text',
				'label' => __('Dribbble URL','complete'),
				'section' => 'socialinks_section',
				'settings' => 'complete[dribble_field_id]',
			) );


//Behance URL
$wp_customize->add_setting('complete[behance_field_id]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('behance_field_id', array(
				'type' => 'text',
				'label' => __('Behance URL','complete'),
				'section' => 'socialinks_section',
				'settings' => 'complete[behance_field_id]',
			) );


//RSS FEED URL
$wp_customize->add_setting('complete[rss_field_id]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('rss_field_id', array(
				'type' => 'text',
				'label' => __('RSS FEED URL','complete'),
				'section' => 'socialinks_section',
				'settings' => 'complete[rss_field_id]',
			) );



//----------------------MOBILE LAYOUT SECTION----------------------------------

//Hide Mobile Slider 
$wp_customize->add_setting('complete[hide_mob_slide]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'complete_sanitize_checkbox',
	'transport' => 'postMessage',
) );
 
			$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'hide_mob_slide', array(
				'label' => __('Hide Slider for Mobile','complete'),
				'section' => 'miscmobile_section',
				'settings' => 'complete[hide_mob_slide]',
			)) );
			
			
//Hide Mobile Right Sidebar 
$wp_customize->add_setting('complete[hide_mob_rightsdbr]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'complete_sanitize_checkbox',
	'transport' => 'postMessage',
) );
 
			$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'hide_mob_rightsdbr', array(
				'label' => __('Hide Right Sidebar for Mobile','complete'),
				'section' => 'miscmobile_section',
				'settings' => 'complete[hide_mob_rightsdbr]',
			)) );
			
			
			
//Hide Mobile Page Headers
$wp_customize->add_setting('complete[hide_mob_page_header]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'complete_sanitize_checkbox',
	'transport' => 'postMessage',
) );
 
			$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'hide_mob_page_header', array(
				'label' => __('Hide Page Headers for Mobile','complete'),
				'section' => 'miscmobile_section',
				'settings' => 'complete[hide_mob_page_header]',
			)) );


//---------------------------OTHER MISC SECTION ----------------------------------


//Lightbox Feature
$wp_customize->add_setting('complete[post_lightbox_id]', array(
	'type' => 'option',
	'default' => '1',
	'sanitize_callback' => 'complete_sanitize_checkbox'
) );
			$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'post_lightbox_id', array(
				'label' => __('Lightbox Feature *','complete'),
				'section' => 'miscother_section',
				'settings' => 'complete[post_lightbox_id]',
			)) );

//Enhanced Gallery Feature
$wp_customize->add_setting('complete[post_gallery_id]', array(
	'type' => 'option',
	'default' => '1',
	'sanitize_callback' => 'complete_sanitize_checkbox'
) );
			$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'post_gallery_id', array(
				'label' => __('Enhanced Gallery *','complete'),
				'section' => 'miscother_section',
				'settings' => 'complete[post_gallery_id]',
				'description' => __( 'Replaces your boring WordPress galleries with complete slideshow gallery system.', 'complete' ),
			)) );



//Static Slider Gallery
$wp_customize->add_setting( 'complete[seo_setting]', array(
		'type' => 'option',
        'default' => '',
		'sanitize_callback'    => 'sanitize_key',
) );
 
			$wp_customize->add_control( new complete_Controls_Info_Control( $wp_customize, 'seo_setting', array(
					'type' => 'info',
					'label' => __('SEO Settings are available in the PRO version.','complete'),
					'section' => 'miscseo_section',
					'settings'    => 'complete[seo_setting]',
			)) );