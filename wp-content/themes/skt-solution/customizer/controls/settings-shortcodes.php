<?php
//====================== Shortoces ===============================

//Enhanced Gallery Feature
$wp_customize->add_setting('complete[shortcodes_id]', array(
	'default'	=> __('<strong>Shortcodes List Goes Here</strong>','complete'),
	'sanitize_callback' => 'wp_htmledit_pre'
) );

$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'shortcodes_id', array(
	'label' => __('All Shortcodes','complete'),
	'section' => 'shortcodes_section',
	'settings' => 'complete[shortcodes_id]',
	'description' => __( 'Shortcodes List', 'complete' ),
)) );