<?php 
/**
 * The Footer for Web Programmer Lite
 *
 * Displays the footer area of the template.
 *
 * @package Web Programmer Lite
 * 
 * @since Web Programmer Lite 1.0
 */
global $complete;?>

	<?php /*To Top Button */?>
	<a class="to_top"><i class="fa-angle-up fa-2x"></i></a>
<!--Footer Start-->
<div class="footer_wrap layer_wrapper ">
 
<div id="footer">
    <div class="center">
    
    <div class="rowfooter"> 
            <div class="footercols4">
		 
            
            <h4><?php if (!empty ($complete['foot_cols1_title'])) { $ftcols1 = html_entity_decode($complete['foot_cols1_title']); $ftcols1 = stripslashes($ftcols1); echo do_shortcode($ftcols1); } ?></h4><?php $ftcols1cntnt = $complete['foot_cols1_content']; echo do_shortcode($ftcols1cntnt); ?></div>
            
            <div class="footercols4"><h4><?php if (!empty ($complete['foot_cols2_title'])) { $ftcols2 = html_entity_decode($complete['foot_cols2_title']); $ftcols2 = stripslashes($ftcols2); echo do_shortcode($ftcols2); } ?></h4><?php $ftcols2cntnt = $complete['foot_cols2_content']; echo do_shortcode($ftcols2cntnt);?>
            </div>
           
            <div class="footercols4"><h4><?php if (!empty ($complete['foot_cols3_title'])) { $ftcols3 = html_entity_decode($complete['foot_cols3_title']); $ftcols3 = stripslashes($ftcols3); echo do_shortcode($ftcols3); } ?></h4><?php $ftcols3cntnt = $complete['foot_cols3_content']; echo do_shortcode($ftcols3cntnt);?></div>
          
           <div class="footercols4"><h4><?php if (!empty ($complete['foot_cols4_title'])) { $ftcols4 = html_entity_decode($complete['foot_cols4_title']); $ftcols4 = stripslashes($ftcols4); echo do_shortcode($ftcols4); } ?></h4><?php $ftcols4cntnt = $complete['foot_cols4_content']; echo do_shortcode($ftcols4cntnt);?></div>

        <div class="clear"></div>
        </div>              
            <div class="clear"></div> 
    </div>
</div>
<div id="copyright">
	<div class="center">
    	<div class="copytext"><?php $copyrightcntnt = $complete['footer_text_id']; echo do_shortcode($copyrightcntnt); ?></div>
    </div>
</div>
<!--Footer END-->
</div><!--layer_wrapper class END-->
<?php wp_footer(); ?>
</body>
</html>