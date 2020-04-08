<?php
//----------------------Featured Block Button----------------------------------

/*	$wp_customize->add_setting('complete[featured_block_button]', array(
		'type' => 'option',
		'default'	=> __('Read More','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'featured_block_button', array( 
		'type' => 'text',
		'label'	=> __('Featured Block Button Text','complete'),
		'section' => 'buttons_section',
		'settings' => 'complete[featured_block_button]',
	)) );	*/
	
//----------------------Recent Posts Block Button Text----------------------------

	$wp_customize->add_setting('complete[recentpost_block_button]', array(
		'type' => 'option',
		'default'	=> __('Read More','complete'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'recentpost_block_button', array( 
		'type' => 'text',
		'label'	=> __('Recent Post Block Button Text','complete'),
		'section' => 'buttons_section',
		'settings' => 'complete[recentpost_block_button]',
	)) );	
 
// All Buttons Background Color
$wp_customize->add_setting( 'complete[featured_block_button_bg]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_block_button_bg', array(
	'label' => __('Button Background Color','complete'),
	'section' => 'buttons_section',
	'settings' => 'complete[featured_block_button_bg]',
) ) );
 
// All Buttons Hover Background Color
$wp_customize->add_setting( 'complete[featured_block_hover_button_bg]', array(
	'type' => 'option',
	'default' => '#3dbad5',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_block_hover_button_bg', array(
	'label' => __('Button Hover Background Color','complete'),
	'section' => 'buttons_section',
	'settings' => 'complete[featured_block_hover_button_bg]',
) ) );