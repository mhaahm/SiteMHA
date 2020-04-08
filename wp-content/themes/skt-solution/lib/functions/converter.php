<?php
add_action( 'init', 'complete_convert_redux' );
function complete_convert_redux() {

	
if(isset($_POST['convert']) && check_admin_referer( 'complete_convert', 'complete_convert' ) ) {
	$complete = get_option('complete');
	$active_widgets = get_option( 'sidebars_widgets' );
	$home_blocks = $complete['home_sort_id'];

if ($home_blocks):

foreach ($home_blocks as $key=>$value) {

    switch($key) {
	//About Section
    case 'about':
		if(!empty($home_blocks['about'])){
				//ABOUT SECTION--------------------------------------------
				$active_widgets[ 'front_sidebar' ][] = 'complete_front_about-1';
				// The latest 15 questions from WordPress Stack Exchange.
				$about_content[ 1 ] = array (
					'title' => $complete['about_header_id'],
					'subtitle' => $complete['about_preheader_id'],
					'content' => $complete['about_content_id'],
					'divider' => $complete['divider_icon'],
					'title_color' => $complete['about_header_color'],
					'content_color' => $complete['about_text_color'],
					'content_bg' => $complete['about_bg_color'],
				);
				update_option( 'widget_complete_front_about', $about_content );
		}
	
	break;
    case 'blocks':
		if(!empty($home_blocks['blocks'])){
				//BLOCKS SECTION--------------------------------------------
				$active_widgets[ 'front_sidebar' ][] = 'complete_front_blocks-1';
				// The latest 15 questions from WordPress Stack Exchange.
				$blocks_content[ 1 ] = array (
					'block1title' => $complete['block1_text_id'],
					'block1img' => $complete['block1_image']['url'],
					'block1content' =>  $complete['block1_textarea_id'],
					'block2title' => $complete['block2_text_id'],
					'block2img' => $complete['block2_image']['url'],
					'block2content' =>  $complete['block2_textarea_id'],
					'block3title' => $complete['block3_text_id'],
					'block3img' => $complete['block3_image']['url'],
					'block3content' => $complete['block3_textarea_id'],
					'block4title' => $complete['block4_text_id'],
					'block4img' => $complete['block4_image']['url'],
					'block4content' => $complete['block4_textarea_id'],
					'block5title' => $complete['block5_text_id'],
					'block5img' => $complete['block5_image']['url'],
					'block5content' => $complete['block5_textarea_id'],
					'block6title' => $complete['block6_text_id'],
					'block6img' => $complete['block6_image']['url'],
					'block6content' => $complete['block6_textarea_id'],
					
					'blockstitlecolor' => $complete['blocktitle_color_id'],
					'blockstxtcolor' => $complete['blocktxt_color_id'],
					'blocksbgcolor' => $complete['midrow_color_id'],
				);
				update_option( 'widget_complete_front_blocks', $blocks_content );
				
		}
	break;
	
	
	case 'welcome-text':
		if(!empty($home_blocks['welcome-text'])){
				//WELCOME TEXT SECTION--------------------------------------------
				$active_widgets[ 'front_sidebar' ][] = 'complete_front_text-1';
				// The latest 15 questions from WordPress Stack Exchange.
				$text_content[ 1 ] = array (
					'title' => __('Welcome Text','complete'),
					'content' => $complete['welcm_textarea_id'],
					'padtopbottom' => '2',
					'paddingside' => '2',
					'parallax' => '',
					'content_color' => $complete['welcometxt_color_id'],
					'content_bg' => $complete['welcome_color_id'],
					'content_bgimg' => $complete['welcome_bg_image']['url'],
				);
				//Updated Below --With Newsletter Widget
				if(empty($home_blocks['newsletter'])){
					update_option( 'widget_complete_front_text', $text_content );	
				}
				
		}
	break;
	
	
	case 'posts':
		if(!empty($home_blocks['posts'])){
				//POSTS SECTION--------------------------------------------
				$active_widgets[ 'front_sidebar' ][] = 'complete_front_posts-1';
				// The latest 15 questions from WordPress Stack Exchange.
				$posts_content[ 1 ] = array (
					'title' => $complete['posts_title_id'],
					'subtitle' => $complete['posts_subtitle_id'],
					'layout' => $complete['front_layout_id'],
					'type' => $complete['n_posts_type_id'],
					'count' => $complete['n_posts_field_id'],
					'category' => $complete['posts_cat_id'],
					'divider' => $complete['divider_icon'],
					'navigation' => $complete['navigation_type'],
					'postbgcolor' => $complete['frontposts_color_id'],
					'titlecolor' => $complete['frontposts_title_color'],
					'secbgcolor' => $complete['frontposts_bg_color'],
				);
				update_option( 'widget_complete_front_posts', $posts_content );
		}
	break;
	
	
	
    } //end of SWITCH

} //end of FOREACH

endif;
		
		//Assign Widgets to frontpage sidebar
		update_option( 'sidebars_widgets', $active_widgets );
		//Update convert =1  and Nivo/Accordion Slides
		$complete['converted'] = '1';
		update_option( 'complete', $complete );
	
		//After Conversion Redirect to Customizer
        $redirect = admin_url('/customize.php'); 
		wp_redirect( $redirect);
	}
}