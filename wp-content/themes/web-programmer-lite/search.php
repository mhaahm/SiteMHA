<?php 
/**
 * The Search Page Template for Web Programmer Lite
 *
 * Displays the Search Page.
 *
 * @package Web Programmer Lite
 * 
 * @since Web Programmer Lite 1.0
 */
global $complete;?>

<?php get_header(); ?>

    <div class="search_wrap layer_wrapper">
    <?php if (!is_home() && !is_front_page()) { ?>
        <!--CUSTOM PAGE HEADER STARTS-->
			<?php get_template_part('sktframe/core','pageheader'); ?>
        <!--CUSTOM PAGE HEADER ENDS-->
        <?php } ?>
    	<!--SEARCH DETAILS START-->
    	<div class="center">
            <div class="search_term">
                <h2 class="postsearch">
					<?php printf( __( 'Search Results for: %s', 'complete' ), '<span>' . esc_html( get_search_query() ) . '</span>'); ?>
                </h2>
                <a class="search_count">
					<?php _e('Total posts found - ', 'complete'); ?> <?php global $wp_query; echo $wp_query->found_posts; wp_reset_query(); ?>
                </a>
            
            	<?php get_search_form(); ?>
            </div>
        </div> 
        <!--SEARCH DETAILS END-->      
          
    <!--SEARCHED POSTS START-->
    	<?php get_template_part('templates/post','layout'.absint($complete['cat_layout_id']).''); ?>
    <!--SEARCHED POSTS END-->
    
     </div><!--layer_wrapper class END-->
<?php get_footer(); ?>