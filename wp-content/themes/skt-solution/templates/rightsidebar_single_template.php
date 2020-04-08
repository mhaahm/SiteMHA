<div id="content">
		<div class="center">
           <!--POST START-->
			<div class="single_wrap">
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
                        
                            <h1 class="postitle entry-title"><?php the_title(); ?></h1>
                            <!--POST INFO START-->
								<?php if (!empty ($complete['post_info_id']) || is_customize_preview()) { ?>
                                <div class="single_metainfo <?php if (empty($complete['post_info_id'])){ echo 'hide_singlemeta';}?>">
                                	<!--DATE-->
                                    <i class="fa-calendar"></i><a class="comm_date post-date updated"><?php the_time( get_option('date_format') ); ?></a>
                                    <!--AUTHOR-->
                                    <i class="fa-user"></i><?php global $authordata; $post_author = "<a class='vcard author post-author' href=\"".get_author_posts_url( $authordata->ID, $authordata->user_nicename )."\"><span class='fn'>".get_the_author()."</span></a>\r\n"; echo $post_author; ?>
                                    <!--COMMENTS COUNT-->
                                    <i class="fa-comments-o"></i><?php if (!empty($post->post_password)) { ?>
                                <?php } else { ?><div class="meta_comm"><?php comments_popup_link( __('0 Comment', 'complete'), __('1 Comment', 'complete'), __('% Comments', 'complete'), '', __('Off' , 'complete')); ?></div><?php } ?>
                                	<!--CATEGORY LIST-->
                                  <i class="fa-th-list"></i><div class="catag_list"><?php the_category(', '); ?></div>
                                </div>
                                <?php } ?>
                            <!--POST INFO END-->
                            
                            <!--POST CONTENT START-->
                                <div class="thn_post_wrap">

									<?php the_content(); ?>
                                    
                                </div>
                                	<div style="clear:both"></div>
                                <div class="thn_post_wrap wp_link_pages">
									<?php wp_link_pages('<p class="pages"><strong>'.__('Pages:', 'complete').'</strong> ', '</p>', 'number'); ?>
                                </div>
                            <!--POST CONTENT END-->
                            
                            
                            
                            <!--POST FOOTER START-->
                                <div class="post_foot">
                                    <div class="post_meta">
										 <?php if( has_tag() ) { ?>
                                             <div class="post_tag">
                                                 <div class="tag_list">
                                                   <?php if(get_the_tag_list()) {
    													echo get_the_tag_list('<ul><li><i class="fa-tag"></i>','</li><li><i class="fa-tag"></i>','</li></ul>');
													}
													?>
                                                 </div>
                                             </div>
                                         <?php } ?>
                                    </div>
                               </div>
                           <!--POST FOOTER END-->
                            
                        </div>
                    <!--POST END-->
                    </div>
                        
            <?php endwhile ?> 
       
            <?php endif ?>
            
				<?php if (!empty ($complete['post_nextprev_id']) || is_customize_preview()) { ?>
				<!--NEXT AND PREVIOUS POSTS START--> 
					<?php if ( get_post_status ( get_the_ID() ) !== 'private' ) { ?>
							<?php get_template_part('sktframe/core','nextprev'); ?>
                    <?php } ?>
                <!--NEXT AND PREVIOUS POSTS END-->          
                <?php }?>


            <!--COMMENT START: Calling the Comment Section. If you want to hide comments from your posts, remove the line below-->     
				<?php if (!empty ($complete['post_comments_id']) || is_customize_preview()) { ?>
                    <div class="comments_template <?php if (empty($complete['post_comments_id'])){ echo 'hide_comments'; }?>">
                        <?php comments_template('',true); ?>
                    </div>
                <?php }?> 
            <!--COMMENT END-->


			</div>
</div>
            
            <!--SIDEBAR START--> 
            	<?php get_sidebar('blog'); ?>
            <!--SIDEBAR END--> 



		</div><!--center class END-->
	</div>