<?php 
/**
 * Header layout 1 for SKT Solution
 *
 * Displays The Header layout 1. This file is imported in header.php
 *
 * @package SKT Solution
 * 
 * @since SKT Solution 1.0
 */
global $complete;?>

<!--HEADER STARTS-->
    	<!--HEAD INFO AREA-->
		<div class="head-info-area">
        	<div class="center">
            	<?php if(!dynamic_sidebar('headerleft')) : ?>
                <div class="left">              
<?php if (!empty ($complete['phntp_text_id'])) { ?><span class="phntp"><?php $phntp = html_entity_decode($complete['phntp_text_id']); $phntp = stripslashes($phntp); echo do_shortcode($phntp); ?></span><?php } ?>
<?php if (!empty ($complete['emltp_text'])) { ?><span class="emltp"><?php $emltp = html_entity_decode($complete['emltp_text']); $emltp = stripslashes($emltp); echo do_shortcode($emltp); ?></span><?php } ?>
              
                </div><?php endif; ?>
                
                <?php if(!dynamic_sidebar('headerright')) : ?>
				<div class="right">
                <?php if (!empty ($complete['suptp_text'])) { ?><span class="suptp"><?php $suptp = html_entity_decode($complete['suptp_text']); $suptp = stripslashes($suptp); echo do_shortcode($suptp); ?></span><?php } ?>  
                <?php if (!empty ($complete['sintp_text'])) { ?><span class="sintp"><?php $sintp = html_entity_decode($complete['sintp_text']); $sintp = stripslashes($sintp); echo do_shortcode($sintp); ?></span><?php } ?>
                </div><?php endif; ?>
                <div class="clear"></div>                
            </div>
        </div>
    <div class="header type1">
	

        <div class="center">
            <div class="head_inner">
            <!--LOGO START-->
                <div class="logo">
                    <?php if(!empty($complete['logo_image_id']['url'])){   ?>
                        <a class="logoimga" title="<?php bloginfo('name') ;?>" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php $logo = $complete['logo_image_id']; echo $logo['url']; ?>" /></a>
                        <span class="desc"><?php echo bloginfo('description'); ?></span>
                    <?php }else{ ?>
                            <?php if ( is_home() ) { ?>   
                            <h1><a href="<?php echo esc_url( home_url( '/' ) );?>"><?php bloginfo('name'); ?></a></h1>
                            <span class="desc"><?php echo bloginfo('description'); ?></span>
                            <?php }else{ ?>
                            <h2><a href="<?php echo esc_url( home_url( '/' ) );?>"><?php bloginfo('name'); ?></a></h2>
                            <span class="desc"><?php echo bloginfo('description'); ?></span>
                            <?php } ?>
                    
                    <?php } ?>
                </div>
            <!--LOGO END-->
            
             <?php if(empty($complete['search_box_hide'])){ ?>
                <div class="headsearchbox">
                    <div class="search-box">
                        <form role="search" method="get" class="searchbox" action="<?php echo esc_url( home_url( '/' ) ); ?>">		
                            <input type="search" id="search" value="" name="s" >
							<button type="submit" class="search-submit"><span class="icon"><i class="fa fa-search"></i></span></button>
                        </form>
                    </div>
                </div> 
			<?php } ?>
            
            <!--MENU START--> 
                <!--MOBILE MENU START-->
                <a id="simple-menu" href="#sidr"><i class="fa-bars"></i></a>
                <!--MOBILE MENU END--> 
                <div id="topmenu" class="<?php if ('header' == $complete['social_bookmark_pos'] ) { ?> has_bookmark<?php } ?>">
                <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
                </div>
            <!--MENU END-->
            
            </div>
    </div>   
    </div>
<!--HEADER ENDS-->