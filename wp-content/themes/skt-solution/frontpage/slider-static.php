<?php
global $complete;  
for($i=1; $i<=10; $i++){
	if(!empty($complete['slide_image'.$i])){
		$imgArr[] = $i;
	}
}
require get_template_directory() . '/frontpage/slider.php';
?>
<section id="home_slider">
  <div class="slider-main">
    <div class="slider-wrapper theme-default">
      <div id="slider" class="nivoSlider">
        <?php foreach($imgArr as $val){ ?>
        <img src="<?php echo $complete['slide_image'.$val]; ?>" data-thumb="<?php echo $complete['slide_image'.$val]; ?>" alt="<?php echo strip_tags($complete['slide_title'.$val]); ?>" title="<?php echo esc_attr('#htmlcaption'.$val) ; ?>" />
        <?php } ?>
      </div>
      <?php foreach($imgArr as $val)	{ ?>
      <div id="htmlcaption<?php echo esc_attr($val); ?>" class="nivo-html-caption">
        <?php if(!empty($complete['slide_title'.$val])){ ?>
        <div class="title"><?php echo $complete['slide_title'.$val]; ?></div>
        <?php } ?>
        <?php if(!empty($complete['slide_desc'.$val])){ ?>
        <div class="slidedesc"><?php echo $complete['slide_desc'.$val]; ?></div>
        <?php } ?>
        <?php if(!empty($complete['slide_btn'.$val])){ ?>
        <div class="slidebtn"><a class="slidelink" href="<?php echo $complete['slide_link'.$val]; ?>"><?php echo $complete['slide_btn'.$val]; ?></a></div>
        <?php } ?>        
      </div>
      <?php } ?>
    </div>
  </div>
</section>