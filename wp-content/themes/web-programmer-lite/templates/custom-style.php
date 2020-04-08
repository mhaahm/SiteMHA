<?php 
/**
 * The Custom Style for Web Programmer Lite
 *
 * Loads the dynamically generated Css in the header of the template.
 *
 * @package Web Programmer Lite
 * 
 * @since Web Programmer Lite 1.0
 */
?>
<?php function complete_dynamic_css() { ?>
<?php global $complete; ?>
<style type="text/css">

/*Fixed Background*/
<?php if(!empty($complete['background_fixed'])){ echo 'html body.custom-background{ background-attachment:fixed;}';} ?>


/*Site Content Text Style*/
<?php $content_font = $complete['content_font_id']; ?>
body, input, textarea{ 
	<?php if(!empty($content_font['font-family'])){ ?>font-family:<?php echo $content_font['font-family']; ?>; <?php } ?>
	<?php if(!empty($content_font['font-size'])){ ?>font-size:<?php echo $content_font['font-size']; ?>; <?php } ?>
}

.single_post .single_post_content .tabs li a:link, .single_post .single_post_content .tabs li a:visited{ color:<?php echo $complete['primtxt_color_id']; ?>;}
 

/*Home Section 1*/
.home1_section_area{background-color:<?php echo $complete['section1_bgcolor_id'] ?>;}
.home1_section_area_bg{background:url(<?php echo $complete['section1_bg_image'] ?>);}
/*Home Section 2*/
.home2_section_area{background-color:<?php echo $complete['section2_bgcolor_id'] ?>;}
.home2_section_area_bg{background:url(<?php echo $complete['section2_bg_image'] ?>);}
 

/*-----------------------------COLORS------------------------------------*/
		
		
		/*Boxed Header should have boxed width*/
		body.home.site_boxed .header_wrap.layer_wrapper{width: <?php echo $complete['center_width']; ?>%;float: left;margin: 0 <?php $centerwidth = $complete['center_width']; echo (100- $centerwidth)/2; ?>%;}

		<?php $logofont = $complete['logo_font_id']; ?>
		.logo h2, .logo h1, .logo h2 a:link, .logo h2 a:visited, .logo h1 a:link, .logo h1 a:visited, .logo h2 a:hover, .logo h1 a:hover{ 
			<?php if(!empty($logofont['font-size'])){ ?>font-size:<?php echo $logofont['font-size']; ?>;<?php } ?>
		}
		
		/*MENU Text Color*/
		#topmenu ul li a:link, #topmenu ul li a:visited{color:<?php echo $complete['menutxt_color_id'] ?>;}
		#topmenu ul li a:after{background-color:<?php echo $complete['menutxt_color_id'] ?>;}

<?php if($complete['sec_color_id']){ ?>
		/*BASE Color*/
		#footer .footercols4 h4:after, .widget_border, .heading_border, #wp-calendar #today, .thn_post_wrap .more-link:hover, .moretag:hover, .search_term #searchsubmit, .error_msg #searchsubmit, #searchsubmit, .complete_pagenav a:hover, .nav-box a:hover .left_arro, .nav-box a:hover .right_arro, .pace .pace-progress, .homeposts_title .menu_border, span.widget_border, .ast_login_widget #loginform #wp-submit, .prog_wrap, .lts_layout1 a.image, .lts_layout2 a.image, .lts_layout3 a.image, .rel_tab:hover .related_img, .wpcf7-submit, .woo-slider #post_slider li.sale .woo_sale, .nivoinner .slide_button_wrap .lts_button, #accordion .slide_button_wrap .lts_button, .img_hover, p.form-submit #submit, .optimposts .type-product a.button.add_to_cart_button{background:<?php echo $complete['sec_color_id'] ?>;} 
		
.woocommerce span.onsale, .woocommerce-MyAccount-navigation li.is-active a, .woocommerce-MyAccount-navigation li a:hover, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{background:<?php echo $complete['sec_color_id'] ?> !important;} 

.woocommerce-MyAccount-navigation li a{ background:rgba(<?php echo complete_hex2rgb($complete['sec_color_id']);?>, 0.1) !important;}

.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover{ background:rgba(<?php echo complete_hex2rgb($complete['sec_color_id']);?>, 0.7) !important;}

		
		a:link, a:visited, .woocommerce ul.products li.product .price, .woocommerce div.product p.price, .woocommerce div.product span.price, .woocommerce .star-rating span, .woocommerce-page .star-rating span, .share_active, .comm_auth a, .logged-in-as a, .citeping a, .lay3 h2 a:hover, .lay4 h2 a:hover, .lay5 .postitle a:hover, .nivo-caption p a, .acord_text p a, .org_comment a, .org_ping a, .contact_submit input:hover, .widget_calendar td a, .ast_biotxt a, .ast_bio .ast_biotxt h3, .lts_layout2 .listing-item h2 a:hover, .lts_layout3 .listing-item h2 a:hover, .lts_layout4 .listing-item h2 a:hover, .lts_layout5 .listing-item h2 a:hover, .rel_tab:hover .rel_hover, .post-password-form input[type~=submit], .bio_head h3, .blog_mo a:hover, .ast_navigation a:hover, .lts_layout4 .blog_mo a:hover{color:<?php echo $complete['primtxt_color_id'] ?>;}
		
		
		.logo h2, .logo h1, .logo h2 a:link, .logo h2 a:visited, .logo h1 a:link, .logo h1 a:visited, .logo h2 a:hover, .logo h1 a:hover, #topmenu ul li.menu_hover>a:link, #topmenu ul li.menu_hover>a:visited, body.has_trans_header.home #topmenu ul li.menu_hover>a:link, body.has_trans_header.home #topmenu ul li.menu_hover>a:visited, #topmenu ul li.current-menu-item>a:link, #topmenu ul li.current-menu-item>a:visited, #topmenu ul li.current-menu-parent>a:link, #topmenu ul li.current_page_parent>a:visited, #topmenu ul li.current-menu-ancestor>a:link, #topmenu ul li.current-menu-ancestor>a:visited, #topmenu ul li ul li a:hover, .postitle:hover, .postitle a:hover, .slidedesc, .footmenu li a:hover, .footmenu li.current_page_item a, #footer a:hover, #copyright a:hover{color:<?php echo $complete['sec_color_id'] ?> !important;}
		
		
		#home_widgets .widget .thn_wgt_tt, #sidebar .widget .thn_wgt_tt, #footer .widget .thn_wgt_tt, .astwt_iframe a, .ast_bio .ast_biotxt h3, .ast_bio .ast_biotxt a, .nav-box a span, .lay2 h2.postitle:hover a{color:<?php echo $complete['sec_color_id'] ?>;}
		.pace .pace-activity{border-top-color: <?php echo $complete['sec_color_id']; ?>!important;border-left-color: <?php echo $complete['sec_color_id']; ?>!important;}
		
		
		.pace .pace-progress-inner{box-shadow: 0 0 10px <?php echo $complete['sec_color_id'] ?>, 0 0 5px <?php echo $complete['sec_color_id']; ?>;
		  -webkit-box-shadow: 0 0 10px <?php echo $complete['sec_color_id'] ?>, 0 0 5px <?php echo $complete['sec_color_id']; ?>;
		  -moz-box-shadow: 0 0 10px <?php echo $complete['sec_color_id'] ?>, 0 0 5px <?php echo $complete['sec_color_id']; ?>;}
		
		 
		
		/*Text Color on BASE COLOR Element*/
		.icon_round a, .moretag:hover, .complete_pagenav a:hover, .ast_login_widget #loginform #wp-submit, .prog_wrap, .rel_tab .related_img i, .lay1 h2.postitle a, .nivoinner .slide_button_wrap .lts_button, #accordion .slide_button_wrap .lts_button, .lts_layout1 .icon_wrap a, .lts_layout2 .icon_wrap a, .lts_layout3 .icon_wrap a, .lts_layout1 .icon_wrap a:hover{color:<?php echo $complete['sec_color_id']; ?>;}
		
		.thn_post_wrap .listing-item .moretag:hover, body .lts_layout1 .listing-item .title, .lts_layout2 .img_wrap .complete_plus, .img_hover .icon_wrap a, body .thn_post_wrap .lts_layout1 .icon_wrap a, .wpcf7-submit, .woo-slider #post_slider li.sale .woo_sale, .optimposts .type-product a.button.add_to_cart_button, a:hover{color:<?php echo $complete['sec_color_id']; ?>;}

<?php } ?>


<?php if($complete['primtxt_color_id']){ ?>
/*Body Text Color*/
body, .home_cat a, .contact_submit input, .comment-form-comment textarea{ color:<?php echo $complete['primtxt_color_id']; ?>;}
.single_post_content .tabs li a{ color:<?php echo $complete['primtxt_color_id']; ?>;}
.thn_post_wrap .listing-item .moretag{ color:<?php echo $complete['primtxt_color_id']; ?>;}
<?php } ?>	

/*Post Title */
.postitle, .postitle a, .nav-box a, h3#comments, h3#comments_ping, .comment-reply-title, .related_h3, .nocomments, .lts_layout2 .listing-item h2 a, .lts_layout3 .listing-item h2 a, .lts_layout4 .listing-item h2 a, .author_inner h5, .product_title, .woocommerce-tabs h2, .related.products h2, .optimposts .type-product h2.postitle a, .woocommerce ul.products li.product h3{ text-decoration:none; color:<?php echo $complete['primtxt_color_id'] ?>;}
 

/*Woocommerce*/
.optimposts .type-product a.button.add_to_cart_button:hover, .slidebtn a:hover, a.nivo-prevNav:hover, a.nivo-nextNav:hover{background-color:<?php echo $complete['sec_color_id'] ?>;} 
.optimposts .lay2_wrap .type-product span.price, .optimposts .lay3_wrap .type-product span.price, .optimposts .lay4_wrap  .type-product span.price, .optimposts .lay4_wrap  .type-product a.button.add_to_cart_button, .optimposts .lay2_wrap .type-product a.button.add_to_cart_button:before, .optimposts .lay3_wrap .type-product a.button.add_to_cart_button:before, .optimposts .lay2_wrap .type-product a.button.add_to_cart_button:hover:before, .optimposts .lay3_wrap .type-product a.button.add_to_cart_button:hover:before, .optimposts .lay4_wrap  .type-product h2.postitle a{color:<?php echo $complete['sec_color_id'] ?>;}
 

@media screen and (max-width: 480px){
body.home.has_trans_header .header .logo h1 a:link, body.home.has_trans_header .header .logo h1 a:visited{ color:<?php echo $complete['logo_color_id']; ?>!important;}
body.home.has_trans_header .header #simple-menu{color:<?php echo $complete['menutxt_color_id']; ?>!important;}
}

/*USER'S CUSTOM CSS---------------------------------------------------------*/
<?php if ( ! empty ( $complete['custom-css'] ) ) { ?><?php echo stripslashes($complete['custom-css']); ?><?php } ?>
/*---------------------------------------------------------*/
</style>

<!--[if IE]>
<style type="text/css">
.text_block_wrap, .home .lay1, .home .lay2, .home .lay3, .home .lay4, .home .lay5, .home_testi .looper, #footer .widgets{opacity:1!important;}
#topmenu ul li a{display: block;padding: 20px; background:url(#);}
</style>
<![endif]-->
<?php } ?>
<?php add_action( 'wp_head', 'complete_dynamic_css'); ?>