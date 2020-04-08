<?php 
/**
 * The Individual Page Header Function for SKT Solution
 *
 * Displays the page header on pages.
 *
 * @package SKT Solution
 * 
 * @since SKT Solution 1.0
 */
global $complete;?>	

   <?php if (is_page()) {?>
   <?php 
   		$imgbg = get_post_meta( $post->ID, 'page_head', true ); 
   		$headshort = get_post_meta( $post->ID, 'headercode', true );
   ?>
	<!--Header for PAGE & POST-->
    <div class="<?php if(!empty($complete['hide_pageheader'])){ echo 'hide-header';} ?>">
	<?php
	if(!empty($headshort)){
	?>	
		<div class="shorthead"><?php $hdrtp = html_entity_decode($headshort); $hdrtp = stripslashes($hdrtp); echo do_shortcode($hdrtp); ?></div>
	<?php
    }
	elseif ( has_post_thumbnail() ) {
	?>
    <div class="page_head"><?php the_post_thumbnail(); ?></div>
	<?php
	}
	else
	{
	?>
      <div class="page_head <?php if($complete['pageheader_bg_image']){ ?>page_head_bg<?php } ?>"></div>
	<?php
}
?>	

	</div>
      <!--page_head class END-->
    <?php } ?>

   <?php if (is_single()) {?>
   <?php 
   $newimgbg = get_post_meta( $post->ID, 'post_head', true ); 
   $headshort = get_post_meta( $post->ID, 'headercode', true );
   ?>
	<!--Header POST-->
      <div class="<?php if(!empty($complete['hide_postheader'])){ echo 'hide-header';} ?>">
    <?php
	if(!empty($headshort)){
	?>	
    <div class="shorthead"><?php $hdrtp = html_entity_decode($headshort); $hdrtp = stripslashes($hdrtp); echo do_shortcode($hdrtp); ?></div>
    <?php } else {?>
      <div class="post_head <?php if($complete['postheader_bg_image']){ ?>post_head_bg<?php } ?>"></div>
      <?php } ?>
 	</div>
      <!--page_head class END-->
    <?php } ?>

      <?php if (is_category() || is_archive()) { ?>
      <!--Header for CATEGORY-->
      <div class="<?php if(!empty($complete['hide_postheader'])){ echo 'hide-header';} ?>">
      <div class="post_head <?php if($complete['postheader_bg_image']){ ?>post_head_bg<?php } ?>">
            <!--The Page Title -->
          <?php /*?><div class="cattitle_wrap">
              <h1><?php single_cat_title( '', true ); ?></h1>
               <?php echo category_description( ); ?> 
          </div><?php */?>
      
      </div>
 	  </div>
      <!--page_head class END-->
      <?php } ?>
	  
      
      <?php if (is_home()) {?>
 
      <div class="<?php if(!empty($complete['hide_postheader'])){ echo 'hide-header';} ?>">
      <div class="post_head <?php if($complete['postheader_bg_image']){ ?>post_head_bg<?php } ?>"></div>
 
      <?php } ?>
      
<?php /*?>	  <?php if ( class_exists( 'WooCommerce' ) ) { //If Wooceommerce  ?>
		  <?php if ('product' == get_post_type()) {?>
          <!--Header for TAGS-->
          <div class="page_head<?php if(!category_description( )) { ?> has_cat_desc<?php } ?> <?php if(!empty($complete['hide_mob_page_header'])) { ?> hide_mob_headerimg<?php } ?>">

          <!--The Page Title -->
              <div class="pagetitle_wrap">
                  <h1 class="postitle"><?php echo woocommerce_page_title( '', true ); ?></h1> 
                  <?php if(!category_description()) { ?><?php echo category_description( ); ?><?php } ?>
              </div>
          </div>
          <!--page_head class END-->
          <?php } ?>
	  <?php } ?><?php */?>