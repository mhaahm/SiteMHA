<?php 
/**
 * The Individual Page Header Function for Web Programmer Lite
 *
 * Displays the page header on pages.
 *
 * @package Web Programmer Lite
 * 
 * @since Web Programmer Lite 1.0
 */
global $complete;?>	
 
<?php if(is_home()) { ?>
	<div class="page_head">
    <div class="slider-shadow"></div>
		<?php
			$page_for_posts = get_option( 'page_for_posts' );
			echo get_the_post_thumbnail($page_for_posts, 'full');
		?>
	</div>
<?php }else{ ?>
	<div class="page_head"><div class="slider-shadow"></div><?php the_post_thumbnail(); ?></div>
<?php } ?>