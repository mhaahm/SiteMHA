<?php
/**
 * The index page of SKT Solution
 *
 * Displays the home page elements.
 *
 * @package SKT Solution
 *
 * @since SKT Solution 1.0
 */
global $complete;
?>
<?php get_header(); ?>
<?php if ( !is_front_page() ) { ?>
<!--CUSTOM PAGE HEADER STARTS-->
    <?php get_template_part('sktframe/core','pageheader'); ?>
<!--CUSTOM PAGE HEADER ENDS-->
<div class="fixed_site">
  <div class="fixed_wrap fixindex">
    <?php get_template_part('templates/post','layout4'); ?>
  </div>
</div>
<?php } //is_front_page ENDS ?>
<?php get_footer(); ?>