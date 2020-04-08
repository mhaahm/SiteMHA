<?php
function complete_option_defaults() {
	$defaults = array(
		'converted' => '',
		'site_layout_id' => 'site_full',
		'single_post_layout_id' => 'single_layout1',
		'header_layout_id' => 'header_layout2',
		'center_width' => 83.50,
		'divider_icon' => 'fa-stop',
		'footer_text_id' => __('&copy; Copyright 2017 All Rights Reserved. SKT Web Programmer Lite', 'complete'),
		'slider_type_id' => 'static',
 
		 

		'blog_cat_id' => '',
		'blog_num_id' => '9',
		'blog_layout_id' => '',
		 
		'content_font_id' =>  array('font-family' => 'Assistant', 'font-size' => '15px'),
		
		'primtxt_color_id' => '#282828',
		'sec_color_id' => '#fdd912',
		
		'logo_image_id' => array(  'url'=> '' ),
		'logo_font_id' => array('font-size' => '30px'),
 
 		'menutxt_color_id' => '#ffffff',  

		'page-setting1' => '0',
		'page-setting2' => '0',
		
		//Home Section1
		'section1_bgcolor_id' => '',
		'section1_bg_image' => ''.get_template_directory_uri().'/images/section-1-bg.png',
		'section1_bg_video' => '',
		//Home Section1
		
		//Home Section2
		'section2_bgcolor_id' => '#f4f4f4',
		'section2_bg_image' => '',
		'section2_bg_video' => '',
		//Home Section2	
		
		//Footer Column 1
		'foot_cols1_title' => __('CONTACT US', 'complete'),
		'foot_cols1_content' => '
		<p>Street 238,52 tempor <br>Donec ultricies mattis nulla, suscipit <br>risus tristique ut.</p>
		[space height="10"]
		<p><span>Phone:</span> 1.800.555.6789</p>
		<p><span>E-mail:</span> <a href="mailto:support@sitename.com">support@sitename.com</a></p> 
		<p><span>Website:</span> <a href="https://www.sktthemes.org">sktthemes.org</a></p>
		',
		//Footer Column 1	
		
		//Footer Column 2
		'foot_cols2_title' => __('OUR SERVICES', 'complete'),
		'foot_cols2_content' => '[footermenu menu="services"]',
		//Footer Column 2	
		
		//Footer Column 3
		'foot_cols3_title' => __('QUICK LINKS', 'complete'),
		'foot_cols3_content' => '[footermenu menu="footer"]',
		//Footer Column 3
		
		//Footer Column 4
		'foot_cols4_title' => __('NEWSLETTER', 'complete'),
		'foot_cols4_content' => '<form class="newsletter-form"><input placeholder="Enter your email" type="email"><i class="fa fa-paper-plane" aria-hidden="true"><input value="" type="submit"></i></form>
		[social_area]
			[social icon="facebook" link="#"]
			[social icon="twitter" link="#"]
			[social icon="google-plus" link="#"]
			[social icon="linkedin" link="#"]
			[social icon="pinterest" link="#"]
			[social icon="skype" link="#"]
		[/social_area]
',
		//Footer Column 4																
		'social_button_style' => 'simple',
		'social_show_color' => '',
		'social_bookmark_pos' => 'footer',
		'social_bookmark_size' => 'normal',
		'social_single_id' => '1',
		'social_page_id' => '',
		 
		'post_lightbox_id' => '1',
		'post_gallery_id' => '1',
		'cat_layout_id' => '4',
		'hide_mob_slide' => '',
		'hide_mob_rightsdbr' => '',
		'hide_mob_page_header' => '1',
		'custom-css' => '',
	);
	
      $options = get_option('complete',$defaults);

      //Parse defaults again - see comments
      $options = wp_parse_args( $options, $defaults );

	return $options;
}?>