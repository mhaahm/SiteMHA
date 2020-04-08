<?php 
/**
 * The SHARE THIS Function for Web Programmer Lite
 *
 * Displays Next Previous Posts on single posts page.
 *
 * @package Web Programmer Lite
 * 
 * @since Web Programmer Lite 1.0
 */
global $complete;?>
  
        <div id="ast_nextprev" class="navigation">
        
			<span class="div_middle"><i class="fa fa-stop"></i></span> 
            
            <?php $prevPost = get_previous_post(true); if($prevPost) {?>
                <div class="nav-box ast-prev">
                <?php $prevthumbnail = get_the_post_thumbnail($prevPost->ID, 'thumbnail' );?>
                <?php previous_post_link('%link','<i class="fa fa-angle-left"></i>'.$prevthumbnail.''.__('Previous Post','complete').'<br><span>%title</span>', TRUE); ?>
                  <div class="prev_cat_name">
                    <?php if($post->post_type == 'post'){$category = get_the_category($prevPost->ID); 
                    if($category[0]){ echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';}
                    } ?>
                  </div>
                </div>
            <?php }?>
            <?php $nextPost = get_next_post(true); if($nextPost) { ?>
                <div class="nav-box ast-next">
                <?php $nextthumbnail = get_the_post_thumbnail($nextPost->ID, 'thumbnail' ); ?>
                <?php next_post_link('%link','<i class="fa fa-angle-right"></i>'.$nextthumbnail.''.__('Next Post','complete').'<br><span>%title</span>', TRUE); ?>
                  <div class="next_cat_name">
                    <?php if($post->post_type == 'post'){$category = get_the_category($nextPost->ID); 
                    if($category[0]){ echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';}
                    } ?>
                  </div>
                </div>
            <?php }?>
        </div>
                        