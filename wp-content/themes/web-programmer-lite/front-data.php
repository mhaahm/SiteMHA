<?php
global $complete;
?>
<div class="fixed_site layer_wrapper">
  <div class="fixed_wrap fixindex">

    <section class="home1_section_area <?php if($complete['section1_bg_image']){ ?>home1_section_area_bg<?php } ?>" <?php if(!empty($complete['section1_bg_video'])){ ?>data-vidbg-bg="mp4: <?php $sec1bgvideo = $complete['section1_bg_video']; echo do_shortcode($sec1bgvideo); ?>" data-vidbg-options="loop: true, muted: true, overlay: false"<?php } ?>>
    	<div class="center">
            <div class="home_section1_content">
             	  <?php
				  	$pagesetting1 = get_theme_mod( 'page-setting1');
					if ($pagesetting1 == '0'){
						echo do_shortcode('
[row_area]
	[columns size="5"]<img src="'.get_template_directory_uri().'/images/jonathan-doe.png" />[/columns]
	[columns size="6"]
		[titlearea align="left" title="I&prime;m Jonathan Doe," titlelast="" subtitle="Web Designer & Web Developer" titlecolor="#282828" titlelastcolor="" seperatorcolor=""]
		[space height="5"]
		<p>Aliquam aliquam luctus nunc, in interdum enim dictum a. Fusce condimentum ipsum quis aliquet convallis. Sed tempor nibh ac dui finibus rutrum bibendum nec eros. Nam malesuada consequat purus, quis malesuada sapien porttitor eu.</p>
		[space height="20"]
		[list_style style="1"]
			<li><strong>Full Name:</strong> Jonathan Doe</li>
			<li><strong>Address:</strong> los angeles, USA</li>
			<li><strong>Email:</strong> info@sitename.com</li>
			<li><strong>Skype:</strong> Jonathan_Doe</li>
			<li><strong>Birthday:</strong> 31 May, 1990</li>
			<li><strong>Phone:</strong> 1236547890</li>
			<li><strong>Job Roll:</strong> Web Programmer Lite</li>
		[/list_style]
[clear][readmore align="left" icon="" button="DOWNLOAD RESUME" links="#" margintop="11%" target="_parent" color="#1e1e1e" bgcolor="#fdd912" bdcolor=""]
[/columns][clear][/row_area]');	
					}
					else
					{
					$secone = new WP_Query('page_id='.$pagesetting1.'');
					while ($secone->have_posts()) : $secone->the_post();
					?>
					<?php the_content(); ?>
					<?php endwhile; wp_reset_postdata(); ?>
					<?php
					}
					?>
            </div>
        </div>
    </section>
    <?php wp_reset_postdata(); ?>
 
    <section class="home2_section_area <?php if($complete['section2_bg_image']){ ?>home2_section_area_bg<?php } ?>" <?php if(!empty($complete['section2_bg_video'])){ ?>data-vidbg-bg="mp4: <?php $sec2bgvideo = $complete['section2_bg_video']; echo do_shortcode($sec2bgvideo); ?>" data-vidbg-options="loop: true, muted: true, overlay: false"<?php } ?>>
    	<div class="center">
            <div class="home_section2_content">
                    <?php
				  	$pagesetting2 = get_theme_mod( 'page-setting2');
					if ($pagesetting2 == '0'){
						echo do_shortcode('
[titlearea align="center" title="What i Do" titlelast="" subtitle="" titlecolor="#282828" titlelastcolor="" seperatorcolor="transparent"]
[featuresbox icon="files-o" title="UI/UX Design" description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis" url="#" target="_self" bgcolor="#fdd912" color="#282828" iconbgcolor="#343434" iconcolor="#ffffff"][featuresbox icon="lightbulb-o" title="Brand Identity" description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis" url="#" target="_self" bgcolor="#ffffff" color="#282828" iconbgcolor="#343434" iconcolor="#ffffff"][featuresbox icon="magic" title="Web Design" description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis" url="#" target="_self" bgcolor="#fdd912" color="#282828" iconbgcolor="#343434" iconcolor="#ffffff"][featuresbox icon="android" title="Mobile Apps" description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis" url="#" target="_self" bgcolor="#ffffff" color="#282828" iconbgcolor="#343434" iconcolor="#ffffff"][featuresbox icon="line-chart" title="Analytics" description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis" url="#" target="_self" bgcolor="#fdd912" color="#282828" iconbgcolor="#343434" iconcolor="#ffffff"][featuresbox icon="code" title="Web Development" description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis" url="#" target="_self" bgcolor="#ffffff" color="#282828" iconbgcolor="#343434" iconcolor="#ffffff"][clear]');	
					}
					else
					{
					$sectwo = new WP_Query('page_id='.$pagesetting2.'');
					while ($sectwo->have_posts()) : $sectwo->the_post();
					?>
					<?php the_content(); ?>
					<?php endwhile; wp_reset_postdata(); ?>
					<?php
					}
					?>
            </div>
        </div>
    </section>
    <?php wp_reset_postdata(); ?>
  </div>
</div>