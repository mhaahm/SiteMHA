<?php
/*ADD EDITOR TO CUSTOMIZER*/
function complete_customizer_editor() {
		?>
		<div id="wp-editor-widget-container" style="display: none;">
			<a class="close" href="javascript:WPEditorWidget.hideEditor();" title="<?php esc_attr_e( 'Close', 'complete' ); ?>"><span class="icon"></span></a>
			<div class="editor">
				<?php
				$settings = array('textarea_rows' => 55, 'editor_height' => 260);  
				//print_r($settings);
				wp_editor( '', 'wpeditorwidget', $settings );
				
				?>
 <script>
  jQuery( document ).ready(function() {
    var active_tab_class = jQuery('#wp-wpeditorwidget-wrap').attr('class');
	
	if(active_tab_class=='wp-core-ui wp-editor-wrap html-active'){
		jQuery("#save_btn").hide();
		jQuery("#show_msg").show();
	}
	
	if(active_tab_class=='wp-core-ui wp-editor-wrap tmce-active'){
		jQuery("#show_msg").hide();
	}	
	
	jQuery( "#wpeditorwidget-tmce" ).click(function() {
	 jQuery("#save_btn").show();
	 jQuery("#show_msg").hide();
	});
	
	jQuery( "#wpeditorwidget-html" ).click(function() {
	 jQuery("#save_btn").hide();
	 jQuery("#show_msg").show();
	});

  });
  </script>
				<p><a href="javascript:WPEditorWidget.updateWidgetAndCloseEditor(true);" id="save_btn" class="button button-primary"><?php _e( 'Save and close', 'complete' ); ?></a></p>
                <p id="show_msg"><strong style="color:#F00;"><?php _e('Click On "Visual" Tab To Save Content.', 'complete');?></strong></p>
			</div>
		</div>
		<div id="wp-editor-widget-backdrop" style="display: none;"></div>

		<?php
		
	} // END output_wp_editor_widget_html*/
	
add_action( 'widgets_admin_page', 'complete_customizer_editor', 100 );
add_action( 'customize_controls_print_footer_scripts', 'complete_customizer_editor', 1 );



/* Add Filters for the Customizer wp_editor */
add_filter( 'wp_editor_widget_content', 'wptexturize' );
add_filter( 'wp_editor_widget_content', 'convert_smilies' );
add_filter( 'wp_editor_widget_content', 'convert_chars' );
add_filter( 'wp_editor_widget_content', 'wpautop' );
add_filter( 'wp_editor_widget_content', 'shortcode_unautop' );
add_filter( 'wp_editor_widget_content', 'do_shortcode', 11 );




function complete_customizer_stuff() {
		?>
        <div id="complete_settings">
        	<a class="optim_settings_close"><i class="fa fa-times"></i></a>
        	<h3><?php _e('SETTINGS', 'complete'); ?></h3>
            
            <!--RESET OPTIONS-->
            <div id="reset_options" class="setting_option">
            	<h4><?php _e('Reset Options', 'complete'); ?></h4>
                <div class="settings_toggle_inner">
                	<p><?php _e('Reset Options to default theme settings. All your current theme settings will be lost except the page selection & widgets settings.', 'complete'); ?></p>
                    <form id="complete_reset" method="post" action="" onsubmit="return confirm('<?php _e('Do you really want to Reset? All your Theme Settings will be lost.', 'complete'); ?>')">
                        <?php wp_nonce_field( 'complete_reset_nonce', 'reset_themeoptions' ); ?>
                        <input type="submit" name="reset" value="Reset" />
                    </form>
                </div>
            </div>
        </div>
 
            <!--FOOTER LINKS-->
            <div id="footlinks">
            	<a class="optim_dashboard" href="<?php echo admin_url(); ?>" title="<?php _e('Close', 'complete'); ?>"><i class="fa fa-times"></i></a>
            	<a class="optim_docs" target="_blank" href="<?php echo esc_url(SKT_THEME_DOC);?>" title="<?php _e('Documentation', 'complete'); ?>"><i class="fa fa-book"></i></a>
                <a class="optim_settings" title="<?php _e('Settings', 'complete'); ?>"><i class="fa fa-cog"></i></a>
            </div>
 
<?php } 

add_action( 'customize_controls_print_footer_scripts', 'complete_customizer_stuff', 1 );


/*CUSTOMIZER GOODIES IN THEME FOOTER*/
function complete_customizer_footer() {
	?>

<?php if(is_customize_preview()) { ?>
		
        <div id="customizer_topbar">
        	<!--Show/Hide Topbar-->
            <span class="hidetop"><i class="fa fa-arrow-up"></i></span>

        	<!--Customizer Page Navigation-->
            <div id="customizer_nav">
            <label class="current_edit"><?php _e('View', 'complete'); ?> 
            	<?php if (is_front_page() ) { ?><a><?php _e('Front Page', 'complete'); ?> <i></i></a><?php } ?>
            	<?php if(is_page()){ ?><a><?php echo get_the_title(get_the_ID()); ?> <i></i></a><?php } ?>
                <?php if(is_single()){ ?><a><?php _e('Single Post', 'complete'); ?> <i></i></a><?php } ?>
                <?php if(is_category()){ ?><a><?php _e('Category Page', 'complete'); ?> <i></i></a><?php } ?>
                <?php if(is_tag()){ ?><a><?php _e('Tag Page', 'complete'); ?> <i></i></a><?php } ?>
                <?php if(is_date()){ ?><a><?php _e('Archive Page', 'complete'); ?> <i></i></a><?php } ?>
                <?php if(is_author()){ ?><a><?php _e('Author Page', 'complete'); ?> <i></i></a><?php } ?>
                <?php if(is_search()){ ?><a><?php _e('Search Page', 'complete'); ?> <i></i></a><?php } ?>
                <?php if(is_404()){ ?><a><?php _e('404 Page', 'complete'); ?> <i></i></a><?php } ?>
            </label>
                    <ul>
                    	<!--PAGES-->
                    	<li><strong><?php _e('Pages:', 'complete'); ?></strong></li>
                        <li><a href="<?php echo home_url('/'); ?>"><?php _e('Front Page', 'complete'); ?></a></li>
                        <?php $pageids = get_all_page_ids(); foreach($pageids as $page) {?>
							<?php if(get_post_status($page) =='publish') { ?>
                            	<li><a href="<?php echo get_the_permalink($page); ?>"><?php echo get_the_title($page); ?></a></li>
                            <?php } ?>
                        <?php } ?>
                        <!--POSTS-->
                        <?php $postid =''; $postq= get_posts("post_type=post&numberposts=1&post_status=publish"); $postid =$postq[0]->ID; ?>
                        <?php $catid =''; $categories = get_categories(array('orderby' => 'count','number' => '1')); $catid = $categories[0]->term_id; ?>
                        <?php $tagid =''; $tags = get_tags(array('orderby' => 'count','number' => '1')); if(!empty($tagid)){ $tagid = $tags[0]->name;} ?>
                        <?php $dateid =''; ?>
                        <li><strong><?php _e('Posts:', 'complete'); ?></strong></li>
                        <li><a href="<?php echo get_permalink($postid); ?>"><?php _e('Single Post', 'complete'); ?></a></li>
                        <li><a href="<?php echo home_url('/?cat=').$catid; ?>"><?php _e('Category Page', 'complete'); ?></a></li>
                        <li><a href="<?php echo home_url('/?tag=').$tagid; ?>"><?php _e('Tag Page', 'complete'); ?></a></li>
<!--                        <li><a href="<?php echo home_url('/?s=the'); ?>"><?php _e('Archive Page', 'complete'); ?></a></li>-->
                        <li><a href="<?php echo home_url('/?author=1'); ?>"><?php _e('Author Page', 'complete'); ?></a></li>
                        <!--MISC-->
                        <li><strong><?php _e('Other:', 'complete'); ?></strong></li>
                        <li><a href="<?php echo home_url('/?s=the'); ?>"><?php _e('Search Page', 'complete'); ?></a></li>
                        <li><a href="<?php echo home_url('/nn49721667/'); ?>"><?php _e('404 Page', 'complete'); ?></a></li>
                    </ul>
            </div>
        </div>
		<!--CUSTOMIZER LOADER-->
		<div class="customizer_spinner"><div class="loader" title="0">
			  <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               width="40px" height="40px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
              <path opacity="0.2" fill="#000" d="M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946
                s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634
                c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z"/>
              <path fill="#000" d="M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0
                C22.32,8.481,24.301,9.057,26.013,10.047z">
                <animateTransform attributeType="xml"
                  attributeName="transform"
                  type="rotate"
                  from="0 20 20"
                  to="360 20 20"
                  dur="0.5s"
                  repeatCount="indefinite"/>
                </path>
              </svg>
        </div></div>
        <?php /*WIDGET ID TOOLTIP */?>
        <div id="tooltipWindow"><div></div></div>

        <?php /* Add Widget Button for Single Pages & Posts*/?>
            <?php if(is_singular()){ ?>
				<?php if(!is_active_sidebar('sidebar')){ $has_sidebar = 'has_no_sidebar';}else{ $has_sidebar = 'has_sidebar';}?>
                    <div class="customizer_sidebar_holder <?php echo $has_sidebar; ?>" data-sidebar-id="sidebar">
                        <a class="add_widget_topage" title="<?php _e('Add Widgets Here','complete'); ?>"><i class="fa fa-plus"></i></a>
                    </div>
                <?php } ?>
<?php } ?>


<?php }
add_action('wp_footer', 'complete_customizer_footer');

//RESET FUNCTION
add_action( 'init', 'complete_reset' );
function complete_reset() {
    if(isset($_POST['reset']) && check_admin_referer( 'complete_reset_nonce', 'reset_themeoptions' ) ) {
        delete_option('complete');
        $redirect = admin_url('/customize.php'); 
		wp_redirect( $redirect);
    }
}	


//IMPORT FUNCTION
add_action( 'init', 'complete_backup_import' );
function complete_backup_import() {
	if (isset($_POST['complete_import']) && check_admin_referer( 'complete_restoreOptions', 'complete_restoreOptions' ) ) {

		global $wp_filesystem;
		if (empty($wp_filesystem)) {
			require_once (ABSPATH . '/wp-admin/includes/file.php');
			WP_Filesystem();
		}
		$filecontent = trim($wp_filesystem->get_contents($_FILES["file"]["tmp_name"]));
		$string = str_replace("\n","",$filecontent); 
		$options = json_decode($string, true);
		//print_r($options);
		
		update_option('complete', $options);
		$redirect = admin_url('/customize.php'); 
		wp_redirect( $redirect);
	}
}	

/*EXPORT FUNCTION*/
add_action('wp_ajax_nopriv_complete_get_options', 'complete_get_options');
add_action('wp_ajax_complete_get_options', 'complete_get_options');
function complete_get_options() {

			header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
			header('Content-Description: File Transfer');
			header("Pragma: public");
			header("Expires: 0");
			header("Content-Type: text/plain");
			header('Content-Disposition: attachment; filename="theme-options-'.date("dMy").'.json"');
			echo json_encode(get_option('complete'));
			die();
}



/**
 * Build the HTTP request URL for Google Fonts.
 *
 * @since  1.1.0.
 *
 * @return string The URL for including Google Fonts.
 */
function complete_google_fonts() {
	global $complete;
	if(!empty($complete['content_font_id']['font-family'])) { $content_font_id = $complete['content_font_id']['font-family']; }else{ $content_font_id = '';}
	if(!empty($complete['logo_font_id']['font-family'])) { $logo_font_id = $complete['logo_font_id']['font-family']; }else{ $logo_font_id = '';}
	if(!empty($complete['tpbt_font_id']['font-family'])) { $tpbt_font_id = $complete['tpbt_font_id']['font-family']; }else{ $tpbt_font_id = '';}	
	if(!empty($complete['sldtitle_font_id']['font-family'])) { $sldtitle_font_id = $complete['sldtitle_font_id']['font-family']; }else{ $sldtitle_font_id = '';}
	if(!empty($complete['slddesc_font_id']['font-family'])) { $slddesc_font_id = $complete['slddesc_font_id']['font-family']; }else{ $slddesc_font_id = '';}
	if(!empty($complete['sldbtn_font_id']['font-family'])) { $sldbtn_font_id = $complete['sldbtn_font_id']['font-family']; }else{ $sldbtn_font_id = '';}	
	if(!empty($complete['global_h1_font_id']['font-family'])) { $global_h1_font_id = $complete['global_h1_font_id']['font-family']; }else{ $global_h1_font_id = '';}	
	if(!empty($complete['global_h2_font_id']['font-family'])) { $global_h2_font_id = $complete['global_h2_font_id']['font-family']; }else{ $global_h2_font_id = '';}	
	if(!empty($complete['global_h3_font_id']['font-family'])) { $global_h3_font_id = $complete['global_h3_font_id']['font-family']; }else{ $global_h3_font_id = '';}	
	if(!empty($complete['global_h4_font_id']['font-family'])) { $global_h4_font_id = $complete['global_h4_font_id']['font-family']; }else{ $global_h4_font_id = '';}	
	if(!empty($complete['global_h5_font_id']['font-family'])) { $global_h5_font_id = $complete['global_h5_font_id']['font-family']; }else{ $global_h5_font_id = '';}	
	if(!empty($complete['global_h6_font_id']['font-family'])) { $global_h6_font_id = $complete['global_h6_font_id']['font-family']; }else{ $global_h6_font_id = '';}			
	if(!empty($complete['ptitle_font_id']['font-family'])) { $ptitle_font_id = $complete['ptitle_font_id']['font-family']; }else{ $ptitle_font_id = '';}
	if(!empty($complete['mnutitle_font_id']['font-family'])) { $mnutitle_font_id = $complete['mnutitle_font_id']['font-family']; }else{ $mnutitle_font_id = '';}	
	
    // Font options
    $fonts = array(
		$content_font_id,
		$logo_font_id,
		$tpbt_font_id,
		$sldtitle_font_id,
		$slddesc_font_id,
		$sldbtn_font_id,
		$global_h1_font_id,
		$global_h2_font_id,
		$global_h3_font_id,
		$global_h4_font_id,
		$global_h5_font_id,
		$global_h6_font_id,
		$ptitle_font_id,
		$mnutitle_font_id,
    );

    $font_uri = customizer_library_get_google_font_uri( $fonts );

    // Load Google Fonts
    wp_enqueue_style( 'complete_google_fonts', $font_uri, array(), null, 'screen' );

}
add_action( 'wp_enqueue_scripts', 'complete_google_fonts' );
//add_action( 'admin_enqueue_scripts', 'complete_google_fonts' );