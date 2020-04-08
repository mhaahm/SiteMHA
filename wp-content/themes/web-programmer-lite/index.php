<?php
/**
 * The index page of Web Programmer Lite
 *
 * Displays the home page elements.
 *
 * @package Web Programmer Lite
 *
 * @since Web Programmer Lite 1.0
 */
global $complete;
?>
<?php get_header(); ?>
<?php if (is_front_page() ) { ?>
<div class="fixed_site">
  <div class="fixed_wrap fixindex">
    <?php get_template_part('templates/post','layout4'); ?>
  </div>
</div>
<?php }else{ ?>
<div class="fixed_site">
  <div class="fixed_wrap fixindex">
    <!--CUSTOM PAGE HEADER STARTS-->
        <?php get_template_part('sktframe/core','pageheader'); ?>
    <!--CUSTOM PAGE HEADER ENDS-->  
    <?php get_template_part('templates/post','layout4'); ?>
  </div>
</div>
<?php } ?>
<?php get_footer(); ?>