<?php global $complete;?>
<?php get_header(); ?>

<div class="page_fullwidth_wrap layer_wrapper">
    <!--CUSTOM PAGE HEADER STARTS-->
        <?php get_template_part('sktframe/core','pageheader'); ?>
    <!--CUSTOM PAGE HEADER ENDS-->
	<div id="content">
		<div class="center">
           <!--POST START-->
			<div class="single_wrap no_sidebar">
				<div class="single_post">

                   <?php if(have_posts()): ?><?php while(have_posts()): ?><?php the_post(); ?>
                    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
                        
                    <!--EDIT BUTTON START-->
						<?php if ( is_user_logged_in() && is_admin() ) { ?>
                            <div class="edit_wrap">
                            	<a href="<?php echo get_edit_post_link(); ?>">
                            		<?php _e('Edit','complete'); ?>
                                </a>
                            </div>
                        <?php } ?>
    				<!--EDIT BUTTON END-->
                    <!--POST START-->
                        <div class="single_post_content">
                        	<?php $designation = esc_html( get_post_meta( get_the_ID(), 'designation', true ) );?>
                            <h1 class="postitle entry-title"><?php the_title(); ?></h1><span>(<?php echo $designation; ?>)</span>
                            <!--POST CONTENT START-->
                                <div class="thn_post_wrap teamwrap">
									<?php
                                    if ( has_post_thumbnail() ) {
                                    ?><?php the_post_thumbnail('full'); ?>
                                    <?php }else{ ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/team_thumb.jpg" />
									<?php } ?>
									<?php the_content(); ?>
                                </div>
                                	<div style="clear:both"></div>
                                 
                            <!--POST CONTENT END-->
                        </div>
                    <!--POST END-->
                    </div>
            <?php endwhile ?> 
       
            <?php endif ?>
 			</div>
</div>
		</div><!--center class END-->
	</div><!--#content END-->
</div><!--layer_wrapper class END-->

<?php get_footer(); ?>