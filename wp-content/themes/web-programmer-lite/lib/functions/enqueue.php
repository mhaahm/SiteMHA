<?php
/**
 * The CSS/JS ENQUEUE functions for Web Programmer Lite
 *
 * Stores all the ENQUEUE Functions of the template.
 *
 * @package Web Programmer Lite
 * 
 * @since Web Programmer Lite 1.0
 */
 
/****************** LOAD THEME CSS & JS (FRONT-END) ******************/
function complete_css_js() { 
	if ( !is_admin() ) {
		//**********LOAD THEME CSS**********
		if ( is_child_theme() ) {
			wp_enqueue_style( 'complete-core-style', trailingslashit( get_template_directory_uri() ) . 'style_core.css' );
		}		
		wp_enqueue_style( 'complete-style', get_stylesheet_uri());
		wp_enqueue_style( 'complete-style-core', get_template_directory_uri().'/style_core.css', 'style_core');
		wp_enqueue_style('complete-animated_css',get_template_directory_uri().'/assets/css/animate.min.css', 'animated_css' );
		wp_enqueue_style('complete-static_css',get_template_directory_uri().'/assets/css/nivo-slider.css', 'static_css' );
		wp_enqueue_style('complete-awesome_css',get_template_directory_uri().'/assets/fonts/font-awesome.css', 'awesome_css' );
		
		if ( is_rtl() ) { 
			wp_enqueue_style('complete-rtl_css',get_template_directory_uri().'/assets/css/rtl.css', 'rtl_css' ); 
		}
		//**********LOAD THEME JS**********
		wp_enqueue_script('hoverIntent');
		wp_enqueue_script('complete_js',get_template_directory_uri().'/assets/js/complete.js', array('jquery'), true);
		wp_enqueue_script('complete_vidbgjs',get_template_directory_uri().'/assets/js/vidbg.js', array('jquery'), true);
		wp_enqueue_script('complete_otherjs',get_template_directory_uri().'/assets/js/other.js', array('jquery'), true);
		wp_enqueue_script('complete_index',get_template_directory_uri().'/assets/js/index.js', array('jquery'), true);
		
		 if ( is_home() || is_front_page() ) {
			wp_enqueue_style('complete-cusanimated',get_template_directory_uri().'/assets/css/custom-animation.css', 'cusanimated_css' );
			wp_enqueue_style('complete-animation',get_template_directory_uri().'/assets/css/animation.css', 'animated_css' );
			wp_enqueue_script('animation_js',get_template_directory_uri().'/assets/js/animation.js', array('jquery'), true);	
		 }
		 
		 
		 
		//Load Coment Reply Javascript
		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
		
		if ( is_page() || is_single() ) {
			//Load Gallery Javascript
			global $complete; global $post; $content = $post->post_content; 
			if (!empty( $complete['post_gallery_id'] ) && has_shortcode( $content, 'gallery' ) ) {
				wp_enqueue_script('complete_gallery',get_template_directory_uri().'/assets/js/gallery.js', array('jquery'), true);
			}
		}
		
	}
}	
add_action('wp_enqueue_scripts', 'complete_css_js');


/****************** DYNAMIC CSS & JS ******************/
//Include Dynamic Stylesheet 
if ( !is_admin() ) {
	require(get_template_directory() . '/templates/custom-style.php');
}

//Load RAW Java Scripts 
add_action('wp_footer', 'complete_load_js');
function complete_load_js() {
if ( !is_admin() ) {
	require(get_template_directory() . '/templates/custom-javascript.php');
}
}

/****************** ADMIN CSS & JS ******************/
//Load ADMIN CSS & JS SCRIPTS
function complete_admin_cssjs($hook) {
		wp_enqueue_style('adminFontAwesome',get_template_directory_uri().'/assets/fonts/font-awesome.css');
		wp_enqueue_style( 'complete_backend', get_template_directory_uri() . '/assets/css/backend.css' );
		
		//WIDGETS
		if( 'widgets.php' == $hook ){
			wp_enqueue_style( 'wp-color-picker' );        
			wp_enqueue_script( 'wp-color-picker' );
			wp_enqueue_script( 'complete_widgets', get_template_directory_uri() . '/assets/js/widgets.js' );
		}
}
add_action( 'admin_enqueue_scripts', 'complete_admin_cssjs' );

//Enqueue REDUX CUSTOM Admin CSS & JS
function complete_admin() { 
	wp_enqueue_style('complete-adminFontAwesome',get_template_directory_uri().'/assets/fonts/font-awesome.css');
	wp_enqueue_style('complete-redux-custom-css', get_template_directory_uri() . '/assets/css/admin.css', array( 'redux-admin-css' ),  time(), 'all');  
	wp_enqueue_script('jquery-ui-datepicker');
	wp_enqueue_script( 'complete-admin-js', get_template_directory_uri() . '/assets/js/admin.js', false, '1.1', true );
		wp_localize_script( 'complete-admin-js', 'objectL10n', array(
		'line1' => sprintf(__( '<strong>WARNING:</strong> As per <a href="%1$s" target="_blank">Official WordPress Theme Team</a>, this Option panel will be obsolete soon. Your Theme Options has been moved to Appearance > Customizer. ', 'complete' ), 'https://make.wordpress.org/themes/2015/04/21/this-weeks-meeting-important-information-regarding-theme-options/'),
		) );
}
add_action('redux/page/complete/enqueue', 'complete_admin');

?>