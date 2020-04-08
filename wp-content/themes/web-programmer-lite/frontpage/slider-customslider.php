<?php global $complete; ?>
<?php if(!empty($complete['custom_slider']) || is_customize_preview() ) { ?>
<div class="slidercus">
<?php echo do_shortcode($complete['custom_slider']); ?>
</div> 
<?php } ?>