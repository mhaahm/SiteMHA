<?php
/*
Template Name: SKT Page Builder
*/
?>
<?php global $complete;?>
<?php get_header(); ?>
<div class="clear"></div>
    <div class="page_fullwidth_wrap layer_wrapper fullwide">
    	<?php if (!is_home() && !is_front_page()) { ?>
        <!--CUSTOM PAGE HEADER STARTS-->
			<?php get_template_part('sktframe/core','pageheader'); ?>
        <!--CUSTOM PAGE HEADER ENDS-->
        <?php } ?>    
                <div class="single_post">
					  <?php if(have_posts()): ?><?php while(have_posts()): ?><?php the_post(); ?>
                      <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">  
                        <!--EDIT BUTTON START-->
                            <?php if ( is_user_logged_in() || is_admin() ) { ?>
                                    <div class="edit_wrap">
                            			<a href="<?php echo get_edit_post_link(); ?>">
                            				<?php _e('Edit','complete'); ?>
                                		</a>
                            		</div>
                            <?php } ?>
                        <!--EDIT BUTTON END-->
                        <!--PAGE CONTENT START--> 
                        <div class="single_post_content">
                                <!--THE CONTENT START-->
                                    <div class="thn_post_wrap">
                                        <?php the_content(); ?>
                                    </div>
                                        <div style="clear:both"></div>
                                    <div class="thn_post_wrap wp_link_pages">
                                        <?php wp_link_pages('<p class="pages"><strong>'.__('Pages:', 'complete').'</strong> ', '</p>', 'number'); ?>
                                    </div>
                                <!--THE CONTENT END-->
                        </div>
                        <!--PAGE CONTENT END-->                       
                  </div>
                  <?php endwhile ?> 
                  </div><!--single_post class END-->
              <?php endif ?>
   </div><!--layer_wrapper class END-->
<?php get_footer(); ?>