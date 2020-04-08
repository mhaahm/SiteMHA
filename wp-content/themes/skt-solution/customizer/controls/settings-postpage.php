<?php

//----------------------SINGLE POST LAYOUT-----------------------------------
$wp_customize->add_setting('complete[single_post_layout_id]', array(
		'type' => 'option',
		'default'           => 'single_layout1',
		'sanitize_callback' => 'sanitize_key',
	)
);

// Add the heaeder layout control.
$wp_customize->add_control('single_post_layout_id',array(
			'type' => 'select',
			'label'    => esc_html__( 'Single Post Layout *', 'complete' ),
			'section'  => 'singlelayout_section',
			'settings' => 'complete[single_post_layout_id]',
			'choices'  => array(
				'single_layout1' => __('Single Post Right Sidebar', 'complete'), 
				'single_layout2' => __('Single Post Left Sidebar', 'complete'),
				'single_layout3' => __('Single Post Full Width', 'complete'),
				'single_layout4' => __('Single Post No Sidebar', 'complete'),
		  )
  ) );

//----------------------SINGLE POST SECTION----------------------------------


//Single Post Meta
$wp_customize->add_setting('complete[post_info_id]', array(
	'type' => 'option',
	'default' => '1',
	'sanitize_callback' => 'complete_sanitize_checkbox',
	'transport' => 'postMessage',
) );
 
			$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'post_info_id', array(
				'label' => __('Show Post Info','complete'),
				'section' => 'singlepost_section',
				'settings' => 'complete[post_info_id]',
			)) );


//NEXT/PREVIOUS Posts
$wp_customize->add_setting('complete[post_nextprev_id]', array(
	'type' => 'option',
	'default' => '1',
	'sanitize_callback' => 'complete_sanitize_checkbox',
	'transport' => 'postMessage',
) );
 
			$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'post_nextprev_id', array(
				'label' => __('Next and Previous Posts','complete'),
				'description'  => __('Display Next and Previous Posts Under Single Post', 'complete' ),
				'section' => 'singlepost_section',
				'settings' => 'complete[post_nextprev_id]',
			)) );


///Show Comments
$wp_customize->add_setting('complete[post_comments_id]', array(
	'type' => 'option',
	'default' => '1',
	'sanitize_callback' => 'complete_sanitize_checkbox',
	'transport' => 'postMessage',
) );
 
			$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'post_comments_id', array(
				'label' => __('Comments','complete'),
				'description'  => __('Show/Hide Comments in Posts and Pages', 'complete' ),
				'section' => 'singlepost_section',
				'settings' => 'complete[post_comments_id]',
			)) );



//----------------------PAGE HEADER SECTION----------------------------------

//Page Header Default Background color
$wp_customize->add_setting( 'complete[page_header_color]', array(
	'type' => 'option',
	'default' => '#545556',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'page_header_color', array(
				'label' => __('Page Header Background','complete'),
				'section' => 'pageheader_section',
				'settings' => 'complete[page_header_color]',
			) ) );
			
// Page Header Background Image
	$wp_customize->add_setting( 'complete[pageheader_bg_image]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pageheader_bg_image',array(
			'label'       => __( 'Page Header Background Image', 'complete' ),
			'section'     => 'pageheader_section',
			'settings'    => 'complete[pageheader_bg_image]'
				)
			)
	);
	
// Hide Page Header
	$wp_customize->add_setting('complete[hide_pageheader]',array(
			'type' => 'option',
			'default' => '',
			'sanitize_callback' => 'complete_sanitize_checkbox',
			'transport' => 'postMessage',
	));	 

	$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'hide_pageheader', array(
		'label' => __('Hide Page Header','complete'),
		'section' => 'pageheader_section',
		'settings' => 'complete[hide_pageheader]',
	)) );
	
//----------------------POST HEADER SECTION----------------------------------

//Post Header Default Background color
$wp_customize->add_setting( 'complete[post_header_color]', array(
	'type' => 'option',
	'default' => '#545556',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_header_color', array(
				'label' => __('Post Header Background','complete'),
				'section' => 'postheader_section',
				'settings' => 'complete[post_header_color]',
			) ) );
			
// Post Header Background Image
	$wp_customize->add_setting( 'complete[postheader_bg_image]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'postheader_bg_image',array(
			'label'       => __( 'Posts Header Background Image', 'complete' ),
			'section'     => 'postheader_section',
			'settings'    => 'complete[postheader_bg_image]'
				)
			)
	);
	
// Hide Post Header
	$wp_customize->add_setting('complete[hide_postheader]',array(
			'type' => 'option',
			'default' => '',
			'sanitize_callback' => 'complete_sanitize_checkbox',
			'transport' => 'postMessage',
	));	 

	$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'hide_postheader', array(
		'label' => __('Hide Post Header','complete'),
		'section' => 'postheader_section',
		'settings' => 'complete[hide_postheader]',
	)) );					
//----------------------BLOG PAGE SECTION----------------------------------


/*GET LIST OF CATEGORIES*/
$layercats = get_categories(); 
$newList = array();
foreach($layercats as $category) {
	$newList[$category->term_id] = $category->cat_name;
}	
//BLOG CATEGORY SELECT
//Page Header Default Text color
$wp_customize->add_setting( 'complete[blog_cat_id]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'complete_sanitize_multicheck'
) );

$wp_customize->add_control( new complete_Multicheck_Control( $wp_customize, 'blog_cat_id', array(
        'type' => 'multicheck',
        'label' => __('Display Blog Posts from selected Categories *','complete'),
        'section' => 'blogpage_section',
        'choices' =>$newList,
		'settings'    => 'complete[blog_cat_id]'
)) );

//Blog Page Post Count
$wp_customize->add_setting('complete[blog_num_id]', array(
	'type' => 'option',
	'default' => '9',
	'sanitize_callback' => 'complete_sanitize_number',
) );
			$wp_customize->add_control('blog_num_id', array(
				'type' => 'text',
				'label' => __('Blog Page Posts Count *','complete'),
				'section' => 'blogpage_section',
				'settings' => 'complete[blog_num_id]',
							'input_attrs'	=> array(
								'class'	=> 'mini_control',
							)
			) );

///Blog Page Thumbnails
$wp_customize->add_setting('complete[show_blog_thumb]', array(
	'type' => 'option',
	'default' => '1',
	'sanitize_callback' => 'complete_sanitize_checkbox',
) );
 
				$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'show_blog_thumb', array(
					'label' => __('Blog Page Thumbnails *','complete'),
					'section' => 'blogpage_section',
					'settings' => 'complete[show_blog_thumb]',
				)) );