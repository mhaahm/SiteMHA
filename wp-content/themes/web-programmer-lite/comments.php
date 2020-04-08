<?php 
/**
 * The Comment section for Web Programmer Lite
 *
 * Displays the Comment section in posts and pages.
 *
 * @package Web Programmer Lite
 * 
 * @since Web Programmer Lite 1.0
 */
global $complete;?>

<?php
	//If Password Protected, DO NOT LOAD
	if ( post_password_required() ) { ?>
	<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.', 'complete'); ?></p>
	<?php
	return;
	}
?>
 
<!-- THE COMMENTS/PING TEMPLATE START -->
<?php if ( have_comments() ) : ?>
<?php if ( ! empty($comments_by_type['comment']) ) : ?>

    <!--COMMENT RESPONSE COUNT START-->
        <h3 id="comments">
            <?php comments_number(__( 'No Responses', 'complete'), __('One Response', 'complete'), __('% Responses', 'complete'));?> to &#8220;<a><?php the_title(); ?></a>&#8221;
        </h3>
    <!--COMMENT RESPONSE COUNT END-->
    
     
    <!--COMMENTS LIST START--> 
        <ul class="commentlist">	
            <!--Comments callback from functions.php-->
            <?php wp_list_comments('type=comment&callback=complete_comment');?>
        </ul>
    
        <!--Comments page navigation-->
        <div class="navigation">
        <?php paginate_comments_links( array('prev_text' => '&laquo;', 'next_text' => '&raquo;')) ?> 
        </div>
    <!--COMMENTS LIST END-->


<?php endif; ?>

<!--PINGS START-->
<?php if ( ! empty($comments_by_type['pings']) ) : ?>

	<!--PINGS Title-->
    <h3 id="comments_ping"><?php _e('Trackbacks &amp; Pings', 'complete'); ?></h3>
     
    <!--PINGS LIST START--> 
        <ul class="commentlist" id="ping">
        <?php wp_list_comments('type=pings&callback=complete_ping'); ?>
        </ul>
        
        <div class="navigation"><?php paginate_comments_links( array('prev_text' => '&laquo;', 'next_text' => '&raquo;')) ?></div>
    <!--PINGS LIST END-->

<?php endif; ?>
<!--PINGS END-> 



<?php else : // this is displayed if there are no comments so far ?>
 
<?php if ('open' == $post->comment_status) : ?>
<!-- If comments are open, but there are no comments. -->
 
<?php else : // comments are closed ?>
<!-- If comments are closed. -->
<?php if ( !is_page() ) { ?><p class="nocomments"><?php _e('Comments are closed.', 'complete'); ?></p><?php } ?>
 
<?php endif; ?>
<?php endif; ?>
 

<!--COMMENT FORM START--> 
	<?php  comment_form(); ?>
<!--COMMENT FORM END--> 