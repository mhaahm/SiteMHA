<?php
	
	// Register the radio image control class as a JS control type.
	$wp_customize->register_control_type( 'complete_Control_Radio_Image' );


//----------------------SITE LAYOUT SECTION----------------------------------

//DROP SHADOW FIELD
$wp_customize->add_setting('complete[converted]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'complete_sanitize_checkbox',
	//'transport' => 'postMessage',
) );

			$wp_customize->add_control( 'converted', array(
				'type' => 'text',
				'label' => __('Converted to Latest Version','complete'),
				'section' => 'layout_section',
				'settings' => 'complete[converted]',
			) );
			



// Add the layout setting.
$wp_customize->add_setting('complete[site_layout_id]', array(
		'type' => 'option',
		'default'           => 'site_full',
		'sanitize_callback' => 'sanitize_key',
	)
);

		  // Add the layout control.
		  $wp_customize->add_control('site_layout_id',array(
						'type' => 'select',
						'label'    => esc_html__( 'Site Layout *', 'complete' ),
						'section'  => 'layout_section',
						'settings' => 'complete[site_layout_id]',
						'choices'  => array(
							'site_full' => __('Full Width', 'complete'), 
					  )
			  ) );
			  
//CONTENT BACKGOURND WIDTH
$wp_customize->add_setting( 'complete[center_width]', array(
		'type' => 'option',
        'default' => '85',
		'sanitize_callback' => 'complete_sanitize_number',
		//'transport' => 'postMessage',
) );
 
			$wp_customize->add_control('center_width', array(
					'type' => 'range',
					'label' => __('Box Width *','complete'),
					'section' => 'layout_section',
					'input_attrs' => array(
						'min' => 30,
						'max' => 100,
						'step' => 10,
						'class' => 'range-textbox_width',
						'style' => 'color: #0a0',
					),
					'settings'    => 'complete[center_width]',
					'active_callback' => 'complete_layout_callback',
			) );
 
//---------General Color SETTINGS---------------------	

//Fixed Background Image
$wp_customize->add_setting('complete[background_fixed]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'complete_sanitize_checkbox',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'background_fixed', array(
				'label' => __('Fixed Background Image','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[background_fixed]',
			)) );



//Site content Text Color
$wp_customize->add_setting( 'complete[primtxt_color_id]', array(
	'type' => 'option',
	'default' => '#282828',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primtxt_color_id', array(
				'label' => __('Site content Text Color','complete'),
				'section' => 'general_color_section',
				'settings' => 'complete[primtxt_color_id]',
			) ) );

//BASE COLOR
$wp_customize->add_setting( 'complete[sec_color_id]', array(
	'type' => 'option',
	'default' => '#fdd912',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sec_color_id', array(
				'label' => __('Other Elements Background','complete'),
				'description' => __( 'Affects Posts hover color, Search button background Color, Widget Title border color, Comments Submit button color.', 'complete' ),
				'section' => 'general_color_section',
				'settings' => 'complete[sec_color_id]',
			) ) );



//---------TYPOGRAPHY SETTINGS---------------------	

// Site Content Font Family
$wp_customize->add_setting( 'complete[content_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Assistant',
	'transport' => 'postMessage',
	'sanitize_callback' => 'esc_attr',
	
) );
		$wp_customize->add_control('content_font_family', array(
				'type' => 'select',
				'label' => __('Family','complete'),
				'section' => 'basic_typography',
				'settings' => 'complete[content_font_id][font-family]',
				'choices' => customizer_library_get_font_choices(),
		) );

// Site Content Font Subsets
$wp_customize->add_setting( 'complete[content_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
		$wp_customize->add_control('content_font_subsets', array(
				'type' => 'select',
				'label' => __('Subsets','complete'),
				'section' => 'basic_typography',
				'settings' => 'complete[content_font_id][subsets]',
				'choices' => customizer_library_get_google_font_subsets(),
		) );


//Site Content Font Size
$wp_customize->add_setting('complete[content_font_id][font-size]', array(
	'type' => 'option',
	'default' => '15px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
		$wp_customize->add_control('content_font_size', array(
			'type' => 'text',
			'label' => __('Font Size','complete'),
			'section' => 'basic_typography',
			'settings' => 'complete[content_font_id][font-size]',
			'input_attrs'	=> array(
				'class'	=> 'mini_control',
			)
		) );	

//---------------LAYOUT CALLBACK-------------------//
function complete_layout_callback( $control ) {
    $layout_setting = $control->manager->get_setting('complete[site_layout_id]')->value();
     
    if ( $layout_setting == 'site_boxed' ) return true;
     
    return false;
}


//---------------HEADER CALLBACK-------------------//
function complete_transparent_header_callback( $control ) {
    $header_setting = $control->manager->get_setting('complete[head_transparent]')->value();
     
    if ( $header_setting == 1 ) return true;
     
    return false;
}
