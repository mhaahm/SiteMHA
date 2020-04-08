<?php
function complete_option_defaults() {
	$defaults = array(
		'converted' => '',
		'site_layout_id' => 'site_full',
		'single_post_layout_id' => 'single_layout1',
		'header_layout_id' => 'header_layout1',
		'center_width' => 83.50,
		'content_bg_color' => '#ffffff',
		'divider_icon' => 'fa-stop',
		'head_transparent' => '',
		'trans_header_color' => '#fff',
		'totop_id' => '1',
		'footer_text_id' => __('&copy; Copyright 2019. <a href="#">SKT Solution.</a> All Rights Reserved by SKT Themes', 'complete'),
		'phntp_text_id' => __('<i class="fa fa-map-marker"></i> 34 Veniam Street, Eiusmod tempor, FL 95403', 'complete'),
		'emltp_text' => __('<a href="mailto:info@sitename.com"><i class="fa fa-envelope"></i>info@sitename.com </a>', 'complete'),
		'suptp_text' => __('<span class="sintp"><i class="fa fa-phone"></i><strong><a href="tel:800 2345 6789">800 2345 6789</a></strong></span>', 'complete'),
		'sintp_text' => __('[social_area][social icon="facebook" link="#"][social icon="twitter" link="#"][social icon="instagram " link="#"][social icon="medium" link="#"][social icon="behance" link="#"][social icon="google-plus" link="#"][/social_area]', 'complete'),
		
		'search_box_hide' => '',
		
		'footmenu_id' => '1',
		'copyright_center' => '',
		
		'custom_slider' => '',
		
		'slider_type_id' => 'static',
		
		'slideefect' => 'fade',
		'slideanim' => '500',
		'slidepause' => '4000',
		'slidenav' => 'true',
		'slidepage' => 'true',
 
 		'slide_image1' => ''.get_template_directory_uri().'/images/slides/slider1.jpg',
        'slide_title1' => 'WE´LL <span style="color:#3dbad5;">DIAGNOSE</span><br /><span class="titlesmall">AND REPAIR ANY PROBLEM</span>',
        'slide_desc1' => 'Vestibulum mimperdiet lorem. Pellentesque quam arcu, dignissim sem gravida, faucibus pharetra nisi. Curabitur vehicula',
        'slide_link1' => '#link1',
        'slide_btn1' => 'READ MORE',
        
        'slide_image2' => ''.get_template_directory_uri().'/images/slides/slider2.jpg',
        'slide_title2' => 'WE´LL <span style="color:#3dbad5;">DIAGNOSE</span><br /><span class="titlesmall">AND REPAIR ANY PROBLEM</span>',
        'slide_desc2' => 'Vestibulum mimperdiet lorem. Pellentesque quam arcu, dignissim sem gravida, faucibus pharetra nisi. Curabitur vehicula',
        'slide_link2' => '#link2',
        'slide_btn2' => 'READ MORE',
        
        'slide_image3' => ''.get_template_directory_uri().'/images/slides/slider3.jpg',
        'slide_title3' => 'WE´LL <span style="color:#3dbad5;">DIAGNOSE</span><br /><span class="titlesmall">AND REPAIR ANY PROBLEM</span>',
        'slide_desc3' => 'Vestibulum mimperdiet lorem. Pellentesque quam arcu, dignissim sem gravida, faucibus pharetra nisi. Curabitur vehicula',
        'slide_link3' => '#link3',
        'slide_btn3' => 'READ MORE',

		'post_info_id' => '1',
		'post_nextprev_id' => '1',
		'post_comments_id' => '1',
		'page_header_color' => '#545556',
		'pageheader_bg_image' => '',
		'hide_pageheader' => '',
		'page_header_txtcolor' => '#555555',
		
		'post_header_color' => '#545556',
		'postheader_bg_image' => '',
		'hide_postheader' => '',		

		'blog_cat_id' => '',
		'blog_num_id' => '9',
		'blog_layout_id' => '',
		'show_blog_thumb' => '1',
		
		'sec_color_id' => '#3dbad5',
		'submnu_textcolor_id' => '#000000',
		'submnbg_color_id' => '#ffffff',
		'mnshvr_color_id' => '#f0f0f0',
		'mobbg_color_id' => '#383939',
		'mobbgtop_color_id' => '#3dbad5',
		'mobmenutxt_color_id' => '#FFFFFF',
		
		'mobtoggle_color_id' => '#282828',
		'mobtoggleinner_color_id' => '#ffffff',
		
		'sectxt_color_id' => '#FFFFFF',
		'content_font_id' =>  array('font-family' => 'Roboto', 'font-size' => '15px'),
		'primtxt_color_id' => '#484747',
		'logo_image_id' => array(  'url'=>''.get_template_directory_uri().'/images/logo.png'),
		'logo_font_id' => array('font-family' => 'Montserrat', 'font-size' => '30px'),
		'logo_color_id' => '#2f2f2f',
		
		'logo_image_height' => '24px;',
		'logo_image_width' => '135px;',
		'logo_margin_top' => '20px;',
		
		'tpbt_font_id' => array('font-family' => 'Roboto', 'font-size' => '13px'),
		'tpbt_color_id' => '#939393',
		'tpbt_hvcolor_id' => '#3dbad5',	
		
		'sldtitle_font_id' => array('font-family' => 'Roboto', 'font-size' => '68px'),
		'slddesc_font_id' => array('font-family' => 'Roboto', 'font-size' => '16px'),
		'sldbtn_font_id' => array('font-family' => 'Roboto', 'font-size' => '14px'),
		
		'slidetitle_color_id' => '#ffffff',	
		'slddesc_color_id' => '#ffffff',	
		'sldbtntext_color_id' => '#ffffff',
		'sldbtn_color_id' => '#3dbad5',
		'sldbtn_hvcolor_id' => '#282828',	
		
		'slide_pager_color_id' => '#ffffff',	
		'slide_active_pager_color_id' => '#3dbad5',	
		
		'slide_navigation_background_color' => '#ffffff',	
		'slide_navigation_color' => '#ffffff',	
		'slide_navigation_hover_background_color' => '',	
		'slide_navigation_hover_color' => '#ffffff',	
		
			
		'global_link_color_id' => '#3dbad5',
		'global_link_hvcolor_id' => '#ff8800',		
		
		'global_h1_color_id' => '#282828',
		'global_h1_hvcolor_id' => '#3dbad5',	
		'global_h2_color_id' => '#282828',
		'global_h2_hvcolor_id' => '#3dbad5',
		'global_h3_color_id' => '#282828',
		'global_h3_hvcolor_id' => '#3dbad5',
		'global_h4_color_id' => '#282828',
		'global_h4_hvcolor_id' => '#3dbad5',
		'global_h5_color_id' => '#282828',
		'global_h5_hvcolor_id' => '#3dbad5',
		'global_h6_color_id' => '#282828',
		'global_h6_hvcolor_id' => '#3dbad5',	
		
		'post_meta_color_id' => '#282828',

		'team_box_color_id' => '#ffffff',
		'team_title_border_color' => '#3dbad5',

		'social_text_color_id' => '#ffffff',
		'social_icon_color_id' => '#1c1c1c',
		'social_hover_icon_color_id' => '#3dbad5',
		
		
		'gallery_filter_color_id' => '#3dbad5',
		'gallery_filtertxt_color_id' => '#000000',
		'gallery_activefiltertxt_color_id' => '#ffffff',
		'skillsbar_bgcolor_id' => '#f8f8f8',
		'skillsbar_text_color_id' => '#ffffff',								
		'global_h1_font_id' => array('font-family' => 'Roboto Condensed', 'font-size' => '32px'),
		'global_h2_font_id' => array('font-family' => 'Roboto', 'font-size' => '28px'),
		'global_h3_font_id' => array('font-family' => 'Roboto', 'font-size' => '22px'),
		'global_h4_font_id' => array('font-family' => 'Roboto', 'font-size' => '20px'),
		'global_h5_font_id' => array('font-family' => 'Roboto', 'font-size' => '18px'),
		'global_h6_font_id' => array('font-family' => 'Roboto Condensed', 'font-size' => '17px'),
		
		'contact_title' => 'Contact Info',
		'contact_address' => 'Donec ultricies mattis nulla Australia',
		'contact_phone' => '0789 256 321',
		'contact_email' => 'info@companyname.com',
		'contact_company_url' => 'http://demo.com',

		'head_bg_trans' => '1',
		'head_color_id' => '#ffffff',
		'head_info_color_id' => '#2c2c2c',
		'header_border_color' => '#dddddd',
		'menutxt_color_id' => '#434242',
		'menutxt_color_hover' => '#3dbad5',
		'menutxt_color_active' => '#3dbad5',
		'menu_size_id' => '13px',
		'sidebar_color_id' => '#FFFFFF',
		'sidebarborder_color_id' => '#eeeff5',
		'sidebar_tt_color_id' => '#666666',
		'sidebartxt_color_id' => '#999999',
		'sidebarlink_color_id' => '#3dbad5',
		'sidebarlink_hover_color_id' => '#999999',
		'flipbg_front_color_id' => '#ffffff',
		'flipbg_back_color_id' => '#f7f7f7',
		'flipborder_front_color_id' => '#e0e0e0',
		'flipborder_back_color_id' => '#000000',
		'divider_color_id' => '#8c8b8b',
		'wgttitle_size_id' => '16px',
		'timebox_color_id' => '#ffffff',
		'timeboxborder_color_id' => '#dedede',
		'gridbox_color_id' => '#ffffff',
		'gridboxborder_color_id' => '#cccccc',
		
		'service_box_bg' => '#0a7ad8',
		'service_box_bg_hover' => '#ff8800',
		'box_color_text' => '#ffffff',
		'go_bg_color' => '#ffffff',
		'box_right_border' => '#30a0fd',
		
		'expand_bg_color' => '#3dbad5',
		'expand_text_color' => '#000000',
		
		'h_seprator_color' => '#3dbad5',
		'h_seprator_text_color' => '#000000',
		
		'square_bg_color' => '#ffffff',
		'square_bg_hover_color' => '#79ab9f',
		'square_title_color' => '#000000',
		
		
		'style3_bg_color' => '#ffffff',
		'style3_hover_bg_color' => '#9f9f9f',
		'style3_border_color' => '#eaeaea',
		
		'style4_bg_color' => '#f9f9f9',
		'style4_color' => '#444343',
		
		'perfect_bg_color' => '#ffffff',
		'perfect_border_color' => '#eaeaea',
		'perfect_hover_border_color' => '#3dbad5',
 
		'foot_layout_id' => '4',
		'footer_color_id' => '#191919',
		'footer_bg_image' => '',
		
		'footwdgtxt_color_id' => '#999999',
		'footwdgtxtactive_color_id' => '#ffffff',
		'footer_title_color' => '#ffffff',
		'ptitle_font_id' =>  array('font-family' => 'Lato', 'subsets'=>'latin'),
		'mnutitle_font_id' =>  array('font-family' => 'Roboto', 'subsets'=>'latin'),
		'title_txt_color_id' => '#666666',
		'link_color_id' => '#3590ea',
		'link_color_hover' => '#1e73be',
		'txt_upcase_id' => '',
		'mnutxt_upcase_id' => '1',
		'copyright_bg_color' => '#191919',
		'copyright_txt_color' => '#f8f8f8',
		
		//Footer Info Box
		'footer_info_bgcolor' => '#161616',
		'footer_info_iconcolor' => '#ffffff',
		'footer_info_titlecolor' => '#ffffff',
		'footer_info_desccolor' => '#757575',
		'footer_info_shrtcolor' => '#3dbad5',
		'footer_info_dividercolor' => '#1f1f1f',		
		
		//Featured Box
		'featured_section_title' => __('Featured Boxes', 'complete'),
		'homeblock_bg_setting' => '',
		'ftd_bg_video' => '',
		'homeblock_title_color' => '#000000',
		'homeblock_color_id' => '#f2f2f2',
		'featured_image_height' => '70px;',
		'featured_image_width' => '70px;',
		'featured_excerpt' => '35',
		'featured_block_bg' => '#ffffff',
		'featured_block_button' => __('Read More', 'complete'),
		'recentpost_block_button' => __('Read More', 'complete'),
		
		'featured_block_button_bg' => '#ffffff',
		'featured_block_hover_button_bg' => '#3dbad5',
		
		//Footer Column 1
		'foot_cols1_title' => __('SKT Solution', 'complete'),
		'foot_cols1_content' => '<p>Street 238,52 tempor <br>Donec ultricies mattis nulla, suscipit <br>risus tristique ut.</p>
		<p> <span>Phone:</span> 1.800.555.6789 <br>
		<span>Email:</span> <a href="mailto:support@sitename.com">support@sitename.com</a> <br>
		<span>Web:</span> <a href="https://www.sktthemes.net">sktthemes.net</a></p>',
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
		'foot_cols4_content' => '<form class="newsletter-form"><input placeholder="Enter your email" type="email"><input value="GO" type="submit"></i></form>
[social_area][social icon="facebook-official" link="#"][social icon="twitter" link="#"][social icon="instagram " link="#"][social icon="medium" link="#"][social icon="behance" link="#"][social icon="google-plus" link="#"][/social_area]',
		//Footer Column 4																
		'social_button_style' => 'simple',
		'social_show_color' => '',
		'social_bookmark_pos' => 'footer',
		'social_bookmark_size' => 'normal',
		'social_single_id' => '1',
		'social_page_id' => '',
		
		//Footer Info Box 1
		'foot_infobox1_heading' => __('VISIT US', 'complete'),
		'foot_infobox1_icon' => '<i class="fa fa-map-o" aria-hidden="true"></i>',
		'foot_infobox1_description' => 'Aliquam porta tincidunt enim.',
		
		//Footer Info Box 2
		'foot_infobox2_heading' => __('EMAIL US', 'complete'),
		'foot_infobox2_icon' => '<i class="fa fa-envelope-o" aria-hidden="true"></i>',
		'foot_infobox2_description' => 'info@sitename.com',
		
		//Footer Info Box 3
		'foot_infobox3_heading' => __('CALL US', 'complete'),
		'foot_infobox3_icon' => '<i class="fa fa-phone" aria-hidden="true"></i>',
		'foot_infobox3_description' => '987 685 4528',
		
		'hide_foot_infobox' => '1',
		
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