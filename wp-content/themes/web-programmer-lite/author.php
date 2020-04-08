<?php 
/**
 * The Author Page for Web Programmer Lite
 *
 * Displays The Author page template
 *
 * @package Web Programmer Lite
 * 
 * @since Web Programmer Lite 1.0
 */
global $complete;?>

<?php get_header(); ?>
<?php
	//Get the user data
	if(isset($_GET['author_name'])) :
	$curauth = get_userdatabylogin($author_name);
	else :
	$curauth = get_userdata(intval($author));
	endif;
?>


<div class="author_wrap layer_wrapper">
    <!--AUTHOR BIO START-->
        <div class="author_div <?php if($complete['postheader_bg_image']){ ?>post_head_bg<?php } ?>">
            <div class="author_left"><?php echo get_avatar($curauth->ID, $size = '100'); ?></div>
            <div class="author_right">
            </div>
            <h3 class="author_posts"><span><?php _e('Posts by ', 'complete');?></span><?php echo $curauth->display_name; ?></h3>
        </div>
        
    <!--AUTHOR BIO END-->
    
    <div id="content">
         <!--AUTHOR POSTS START-->
         <?php get_template_part('templates/post','layout4'); ?>
         
	</div><!--#content END-->


</div><!--layer_wrapper class END-->
<?php get_footer(); ?>