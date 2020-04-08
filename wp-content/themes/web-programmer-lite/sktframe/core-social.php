<?php 
/**
 * The SHARE THIS Function for Web Programmer Lite
 *
 * Displays The social Bookmark icons on single posts page.
 *
 * @package Web Programmer Lite
 * 
 * @since  complete 1.1
 */
global $complete;?>

<div class="social_bookmarks<?php if(!empty($complete['social_show_color'])) { ?> social_color<?php } ?> bookmark_<?php echo $complete['social_button_style'];?> bookmark_size_<?php echo $complete['social_bookmark_size']; ?>">
	  <?php if(!empty($complete['facebook_field_id']) || is_customize_preview()){ ?>
      	<a target="_blank" class="ast_fb" href="<?php echo esc_url($complete['facebook_field_id']); ?>"><i class="fa-facebook"></i></a>
      <?php } ?>
      <?php if(!empty($complete['twitter_field_id']) || is_customize_preview()){ ?>
      	<a target="_blank" class="ast_twt" href="<?php echo esc_url($complete['twitter_field_id']); ?>"><i class="fa-twitter"></i></a><?php } ?>
      <?php if(!empty($complete['gplus_field_id']) || is_customize_preview()){ ?>
      	<a target="_blank" class="ast_gplus" href="<?php echo esc_url($complete['gplus_field_id']); ?>"><i class="fa-google-plus"></i></a> 
      <?php } ?>
      <?php if(!empty($complete['youtube_field_id']) || is_customize_preview()){ ?>
      	<a target="_blank" class="ast_ytb" href="<?php echo esc_url($complete['youtube_field_id']); ?>"><i class="fa-youtube-play"></i></a>
      <?php } ?>
      <?php if(!empty($complete['flickr_field_id']) || is_customize_preview()){ ?>
      	<a target="_blank" class="ast_flckr" href="<?php echo esc_url($complete['flickr_field_id']); ?>"><i class="fa-flickr"></i></a>
      <?php } ?>
      <?php if(!empty($complete['linkedin_field_id']) || is_customize_preview()){ ?>
      	<a target="_blank" class="ast_lnkdin" href="<?php echo esc_url($complete['linkedin_field_id']); ?>"><i class="fa-linkedin"></i></a>
      <?php } ?>
      <?php if(!empty($complete['pinterest_field_id']) || is_customize_preview()){ ?>
      	<a target="_blank" class="ast_pin" href="<?php echo esc_url($complete['pinterest_field_id']); ?>"><i class="fa-pinterest"></i></a>
      <?php } ?>
      <?php if(!empty($complete['tumblr_field_id']) || is_customize_preview()){ ?>
      	<a target="_blank" class="ast_tmblr" href="<?php echo esc_url($complete['tumblr_field_id']); ?>"><i class="fa-tumblr"></i></a>
      <?php } ?>
      <?php if(!empty($complete['dribble_field_id']) || is_customize_preview()){ ?>
      	<a target="_blank" class="ast_dribble" href="<?php echo esc_url($complete['dribble_field_id']); ?>"><i class="fa-dribbble"></i></a>
      <?php } ?>
      <?php if(!empty($complete['behance_field_id']) || is_customize_preview()){ ?>
      	<a target="_blank" class="ast_behance" href="<?php echo esc_url($complete['behance_field_id']); ?>"><i class="fa-behance"></i></a>
      <?php } ?>
      <?php if(!empty($complete['instagram_field_id']) || is_customize_preview()){ ?>
      	<a target="_blank" class="ast_insta" href="<?php echo esc_url($complete['instagram_field_id']); ?>"><i class="fa-instagram"></i></a>
      <?php } ?>  
      <?php if(!empty($complete['rss_field_id']) || is_customize_preview()){ ?>
      	<a target="_blank" class="ast_rss" href="<?php echo esc_url($complete['rss_field_id']); ?>"><i class="fa-rss"></i></a>
      <?php } ?>   
</div>