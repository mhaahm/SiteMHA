<?php

//----------------------HELP SECTION----------------------------------

$wp_customize->add_setting('optimizer[help-doc]', array(
	'type' => 'option',
	'default' => '',
	'transport' => 'postMessage',
	'sanitize_callback' => 'wp_filter_nohtml_kses',
) );
				$wp_customize->add_control( new complete_Controls_Info_Control( $wp_customize, 'help-doc', array(
					'description' => __('<a target="_blank" href="http://optimizerwp.com/optimizer-documentation/">Official Documentation</a>','complete'),
					'section' => 'otherhelp_section',
					'settings' => 'optimizer[help-doc]',
				) ) );