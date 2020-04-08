<?php 
/**
 * The Default Woocommerce Template for Web Programmer Lite
 *
 * Displays the Woocommerce pages.
 *
 * @package Web Programmer Lite
 * 
 * @since Web Programmer Lite 1.0
 */
global $complete;?>

<?php get_header(); ?>
    <div class="page_wrap layer_wrapper">
    	<?php // if(!is_singular()) { ?>
        <!--CUSTOM PAGE HEADER STARTS-->
            <?php get_template_part('sktframe/core','pageheader'); ?>
        <!--CUSTOM PAGE HEADER ENDS-->
        <?php // } ?>
        <div id="content">
            <div class="center">
                <div class="layerbread"><?php woocommerce_breadcrumb(); ?></div>
                <?php woocommerce_content(); ?>
            </div>
		</div>
    </div><!--layer_wrapper class END-->
<?php get_footer(); ?>