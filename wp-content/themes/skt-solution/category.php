<?php 
/**
 * The Category page for SKT Solution
 *
 * Displays the Category pages.
 *
 * @package SKT Solution
 * 
 * @since SKT Solution 1.0
 */
global $complete;?>

<?php get_header(); ?>
        
	<!--Category Posts-->
    <div class="category_wrap layer_wrapper">
        <!--CUSTOM PAGE HEADER STARTS-->
            <?php get_template_part('sktframe/core','pageheader'); ?>
        <!--CUSTOM PAGE HEADER ENDS-->
        
        <?php get_template_part('templates/post','layout'.absint($complete['cat_layout_id']).''); ?>
    </div><!--layer_wrapper class END-->

<?php get_footer(); ?>