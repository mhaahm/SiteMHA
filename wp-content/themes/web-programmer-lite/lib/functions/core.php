<?php
 /**
 * The CORE functions for Web Programmer Lite
 *
 * Stores all the core functions of the template.
 *
 * @package Web Programmer Lite
 * 
 * @since Web Programmer Lite 1.0
 */
 
//Front page query

function complete_home_query($query) {
	global $complete;
	global $completedb; 
	if(!empty($completedb) && empty($complete['converted'])) {
			if( $query->is_main_query() && is_front_page() ) {
				
				$postype = $complete['n_posts_type_id'];
				set_query_var( 'post_type', ''.$postype.'');
				set_query_var( 'paged', ( get_query_var('paged') ? get_query_var('paged') : 1) );
				$postcount = $complete['n_posts_field_id'];
						set_query_var( 'posts_per_page', ''.$postcount.'' );
				
				if(!empty($complete['posts_cat_id'])){
					$postcat = $complete['posts_cat_id'];
					set_query_var( 'cat', ''.implode(',', $postcat).'' );
				}
		
			}
		}
}

add_action( 'pre_get_posts', 'complete_home_query' );


//ADD BODY CLASSES
function complete_body_class( $classes ) {
	global $complete;
	// add classes to the $classes array
		$classes[] = ''.$complete['site_layout_id'].'';
	if(!empty($complete['head_transparent'])){
		$classes[] = 'has_trans_header';
	}
	if('site_boxed' == $complete['site_layout_id']){
		$classes[] = 'is_boxed';
	}
	if(is_rtl()){
		$classes[] = 'layer_rtl';
	}
	if ( !is_front_page() ) {
		$classes[] = 'not_frontpage';
	}
	if ( is_customize_preview() ) {
		$classes[] = 'customizer-prev';
	}

	return $classes;
}
add_filter( 'body_class', 'complete_body_class' );

	
//SIDEBAR
function complete_widgets_init(){
	$editbutton = (is_customize_preview() ? '<a class="edit_widget" title="Edit Widget - #%1$s"><i class="fa fa-pencil"></i></a>' : '');
	register_sidebar(array(
		'name'          => __('Blog Sidebar', 'complete'),
		'id'            => 'sidebar-blog',
		'description'   => __('When you assign widgets to this area, it will be displayed on all posts and blog.', 'complete'),
		'before_widget' => '<div id="%1$s" class="widget %2$s" data-widget-id="%1$s"><div class="widget_wrap">'.$editbutton,
		'after_widget'  => '<span class="widget_corner"></span></div></div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>'
	));	
}

add_action( 'widgets_init', 'complete_widgets_init' );


//Default Placeholder Image
function complete_placeholder_image(){
	return ''. get_template_directory_uri().'/assets/images/blank_img.png';
}

//Assign Thumbnail to post if it has gallery
function complete_gallery_thumb(){
 	global $post;
 	// Make sure the post has a gallery in it
 	if( has_shortcode( $post->post_content, 'gallery' ) ){

		$gallery = get_post_gallery( get_the_ID(), false );
		$ids = explode( ",", $gallery['ids'] );
	
		foreach( $ids as $id ) {
		   $imgurl   = wp_get_attachment_image_src( $id, array(400,270) );
		} 
	
		$first_thumb = $imgurl[0];
		return $first_thumb;
	}
 }

// force the link='file' gallery shortcode attribute:
add_filter('shortcode_atts_gallery','complete_overwrite_gallery_atts',10,3);
function complete_overwrite_gallery_atts($out, $pairs, $atts){
	global $complete;
	if(!empty($complete['post_gallery_id']))
    $out['link']='file'; 
    return $out;
}


//Display Read More Button in Layout4
function complete_excerpt_more($more) {
	return '<br><a class="moretag" href="'. get_permalink() . '">'.__('+ Read More', 'complete').'</a>';
}
add_filter('excerpt_more', 'complete_excerpt_more');


//Alter the Read More Link
add_filter( 'the_content_more_link', 'complete_more_link', 10, 2 );

function complete_more_link( $more_link, $more_link_text ) {
	return str_replace( $more_link_text, __('+ Read More', 'complete'), $more_link );
}

//complete CUSTOM Search Form
function complete_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
    <div>
    <input placeholder="' . __( 'Search &hellip;', 'complete' ) . '" type="text" value="' . get_search_query() . '" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="'. __( 'Search', 'complete' ) .'" />
    </div>
    </form>';

    return $form;
}

add_filter( 'get_search_form', 'complete_search_form' );


//**************Tcomplete COMMENTS******************//
function complete_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">

     <div id="comment-<?php comment_ID(); ?>" class="comment-body">
     <div class="comm_edit"><?php edit_comment_link(__('Edit', 'complete'),'','') ?></div>
      
      
      <div class="comment-author vcard">
            <div class="avatar"><?php echo get_avatar($comment,$size='30' ); ?></div>
            <div class="comm_auth"><?php printf(__('%s', 'complete'), get_comment_author_link()) ?></div>
            <a class="comm_date"><i class="fa-clock-o"></i><?php echo human_time_diff( get_comment_time('U'), current_time('timestamp') ) . ' ago'; ?></a>
            
            <div class="comm_reply">
              <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'], 'before' =>'<i class="fa-reply"></i> '))) ?>
            </div>
        
      </div>
      
      
      <?php if ($comment->comment_approved == '0') : ?>
         <em><?php _e('Your comment is awaiting moderation.', 'complete') ?></em>
         <br />
      <?php endif; ?>

      <div class="org_comment"><?php comment_text() ?></div>
     
     </div>
<?php
        }
		
//**************TRACKBACKS & PINGS******************//
function complete_ping($comment, $args, $depth) {
 
$GLOBALS['comment'] = $comment; ?>
	
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
   
     <div id="comment-<?php comment_ID(); ?>" class="comment-body">
           <?php edit_comment_link(__('Edit', 'complete'),'  ','') ?>
      <?php if ($comment->comment_approved == '0') : ?>
         <em><?php _e('Your comment is awaiting moderation.', 'complete') ?></em>
         <br />
      <?php endif; ?>

      <div class="org_ping">
      	<?php printf(__('<cite class="citeping">%s</cite> <span class="says">:</span>', 'complete'), get_comment_author_link()) ?>
	  	<?php comment_text() ?>
            <div class="comm_meta_reply">
            <div class="comm_date"><i class="fa-clock-o"></i><?php echo human_time_diff( get_comment_time('U'), current_time('timestamp') ) . ' ago'; ?></div>
            </div>
     </div>
     </div>
     

<?php }


//COMMENT FORM DEFAULT FIELDS
function complete_comment_form_fields($fields){
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
    global $complete;
	
	$fields['author'] = '<div class="comm_wrap"><p class="comment-form-author"><input placeholder="' . __( 'Name', 'complete' ) . '" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .'" size="30"' . $aria_req . ' /></p>';

	$fields['email'] = '<p class="comment-form-email"><input placeholder="' . __( 'Email', 'complete' ) . '" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .'" size="30"' . $aria_req . ' /></p>';

	$fields['url'] = '<p class="comment-form-url"><input placeholder="' . __( 'Website', 'complete' ) . '" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .'" size="30" /></p></div>';
    return $fields;
}

add_filter('comment_form_default_fields','complete_comment_form_fields');