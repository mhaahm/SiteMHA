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
		  )
  ) );

//----------------------SINGLE POST SECTION----------------------------------
  
//============================ Contact Page =================================
     	