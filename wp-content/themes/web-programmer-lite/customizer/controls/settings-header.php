<?php
//----------------------Header LAYOUT SECTION----------------------------------

// Add the heder layout setting.
$wp_customize->add_setting('complete[header_layout_id]', array(
		'type' => 'option',
		'default'           => 'header_layout2',
		'sanitize_callback' => 'sanitize_key',
	)
);

// Add the heaeder layout control.
$wp_customize->add_control('header_layout_id',array(
			'type' => 'select',
			'label'    => esc_html__( 'Header Layout *', 'complete' ),
			'section'  => 'headlayout_section',
			'settings' => 'complete[header_layout_id]',
			'choices'  => array(
				'header_layout2' => __('Header Layout 2', 'complete'), 
		  )
  ) );
 
//============================HEADER - LOGO SECTION=================================
 

//Site Title Font Size
$wp_customize->add_setting('complete[logo_font_id][font-size]', array(
	'type' => 'option',
	'default' => '30px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('logo_font_size', array(
				'type' => 'text',
				'label' => __('Site Title Font Size','complete'),
				'section' => 'headlogo_section',
				'settings' => 'complete[logo_font_id][font-size]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );

			
//LOGO UPLOAD FIELD
$wp_customize->add_setting( 'complete[logo_image_id][url]',array( 
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'esc_url_raw',
	)
);

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_image_id',array(
				'label'       => __( 'Logo Image *', 'complete' ),
				'section'     => 'headlogo_section',
				'settings'    => 'complete[logo_image_id][url]',
				//'description' => __('This image will replace the text logo.','complete'),
					)
				)
		);			 
			
//============================HEADER - MENU SECTION================================

//MENU TEXT COLOR
$wp_customize->add_setting( 'complete[menutxt_color_id]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menutxt_color_id', array(
				'label' => __('Menu Text Color','complete'),
				'section' => 'headheader_section',
				'settings' => 'complete[menutxt_color_id]',
			) ) );
	