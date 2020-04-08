<?php
/**
 * The MAIN FUNCTIONS FILE for SKT Solution
 *
 * Stores all the Function of the template.
 *
 * @package SKT Solution
 * 
 * @since SKT Solution 1.0
 */

//**************Complete Golbal******************//
/*CHECK IF Complete row exist in the wp_options table. Needed for Redux Conversion process*/ 
$completedb = get_option( 'complete' );

//**************Complete SETUP******************//
function Complete_setup() {
	//add_theme_support( 'custom-header' );
	add_theme_support( 'title-tag' );			//WP 4.1 Site Title
	add_theme_support( 'woocommerce' );			//Woocommerce Support
	add_theme_support('automatic-feed-links');	//RSS FEED LINK
	add_theme_support( 'post-thumbnails' );		//Post Thumbnail
	//Custom Background	
	add_theme_support( 'custom-background', array( 'default-color' => 'ffffff') );	
	//Make theme available for translation
	load_theme_textdomain('complete', get_template_directory() . '/languages/');  
	//Custom Thumbnail Size	
	add_image_size( 'complete_thumb', 400, 270, true ); /*(cropped)*/
	add_image_size( 'footerthumb', 50, 42, true ); 
   
	//Register Menus
	register_nav_menus( array(
			'primary' => __( 'Header Navigation', 'complete' ),
		) );
	}
add_action( 'after_setup_theme', 'Complete_setup' );

/* Init sktbuilder libs */
add_filter( 'sktbuilder_libs', 'skt_add_theme_lib', 10, 2 );
if ( ! function_exists( 'skt_add_theme_lib' ) ) {
  /**
   * Adding skt lib in sktbuilder libs
   *
   * @param array $sktbuilder_libs Array with url to sktbuilder lib.
   */
   function skt_add_theme_lib( $sktbuilder_libs ) {
  array_push( $sktbuilder_libs, get_template_directory() . '/blocks/lib.json' );
  return $sktbuilder_libs;
  }
}

//**************Complete FUNCTIONS******************//
require(get_template_directory() . '/sktframe/core-functions.php');			//Include Complete sktframe Core Functions 
require(get_template_directory() . '/lib/functions/core.php');					//Include Core Functions
require(get_template_directory() . '/lib/functions/enqueue.php');					//Include Enqueue CSS/JS Scripts
require(get_template_directory() . '/lib/functions/admin.php');				//Include Admin Functions (admin)
require(get_template_directory() . '/lib/functions/woocommerce.php');			//Include Woocommerce Functions
require(get_template_directory() . '/lib/functions/defaults.php');
require(get_template_directory() . '/customizer/customizer.php');
require(get_template_directory() . '/lib/functions/converter.php');
require(get_template_directory() . '/lib/includes/google_fonts.php');

//WIDGETS
require(get_template_directory() . '/sktframe/core-posts.php');		
require(get_template_directory() . '/sktframe/core-pagination.php');

/* Dashboard info
 */
require_once( trailingslashit( get_template_directory() ) . 'lib/dashboard.php' );

if ( !function_exists( 'skt_complete_is_extra_activated' ) ) {

/* Query SKT Complete extra activation
   */
  function skt_complete_is_extra_activated() {
    return defined( 'SKT_COMPLETE_EXTRA_CURRENT_VERSION' ) ? true : false;
  }

}

/* Register TGM Plugin Activation
 */
if ( is_admin() ) {

  require_once( trailingslashit( get_template_directory() ) . 'lib/skt-complete-plugin-install.php' );
}

/* Import Demo Data
 */

function skt_complete_import_files() {
  return array(
    array(
      'import_file_name'             => 'Import SKT Solution Demo',
      'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo-content/demo-content.xml',
    ),
  );
}
add_filter( 'theme-demo-import/import_files', 'skt_complete_import_files' );

/**
 * Assign menu and front page
 */

function skt_complete_after_import_setup() {
  // Assign menus to their locations.
  $main_menu = get_term_by( 'name', 'Header', 'nav_menu' );

  set_theme_mod( 'nav_menu_locations', array(
      'primary' => $main_menu->term_id,
    )
  );
  
  // Assign front page and posts page (blog page).
  $front_page_id = get_page_by_title( 'Home' );
  $blog_page_id  = get_page_by_title( 'Blog' );

  update_option( 'show_on_front', 'page' );
  update_option( 'page_on_front', $front_page_id->ID );
  update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'theme-demo-import/after_import', 'skt_complete_after_import_setup' );

function skt_complete_import_content_intro_text( $default_text ) {
  $default_text .= '<div class="import-intro-text">Kindly click on below button to setup pages and navigation.</div>';

  return $default_text;
}
add_filter( 'theme-demo-import/plugin_intro_text', 'skt_complete_import_content_intro_text' );

define('SKT_THEME_DOC', 'http://sktthemesdemo.net/documentation/itsolution-documentation/');