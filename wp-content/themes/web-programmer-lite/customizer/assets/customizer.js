jQuery.noConflict();
/** Fire up jQuery - let's dance! */
jQuery(document).ready(function($) {
	
	$('#footlinks').appendTo('#customize-controls');
	
	/*SETTINGS*/
	$('.optim_settings').on('click',function() {
		$(this).addClass('opactive');
		$('#complete_settings').animate({"left":"-280px"});
	 });
	 $('.optim_settings_close').on('click',function() {
		$('.optim_settings').removeClass('opactive');
		$('#complete_settings').animate({"left":"-830px"});
    });
	
	$('.optim_presets').on('click',function() {
		$(this).addClass('opactive');
		$('#preset_options').fadeIn();
	 });
	 $('.preset_close').on('click',function() {
		$('.optim_presets').removeClass('opactive');
		$('#preset_options').fadeOut();
    });
	
	$(".customize-controls-close span:contains('Cancel')").parent().addClass("switch_cancel");
	 
	 /*SETTINGS Options Toggle*/
	$('.setting_option h4').toggle(function(){ 
		$(this).parent().addClass('setting_toggle');
		$(this).next('.settings_toggle_inner').slideDown(200);
	},function(){
		$(this).parent().removeClass('setting_toggle');
		$(this).next('.settings_toggle_inner').slideUp(200);
	 });
	 
	 /*EXPAND*/
	$('.optim_expand').toggle(function(){ 
		$(this).addClass('opactive');
		$('body').addClass('complete_expand');
		$('#customize-controls').animate({"width":"420px"});
		$('#complete_settings').animate({"width":"360px"});
	},function(){
		$(this).removeClass('opactive');
		$('body').removeClass('complete_expand');
		$('#customize-controls').animate({"width":"330px"});
		$('#complete_settings').animate({"width":"270px"});
	 });
	 
	 $('#save').after('<span class="button button-primary backpannel" style="margin-right:10px;">Back</span>');

jQuery( document ).on('load ready', function() {
	
	/*MOVE Frontpage Widget Section before footer widget are*/
	wp.customize.section( 'sidebar-widgets-front_sidebar' ).panel( 'front_panel' );
	wp.customize.section( 'sidebar-widgets-front_sidebar' ).priority( 11 );
	wp.customize.section( 'sidebar-widgets-sidebar' ).priority( 3 );
	wp.customize.section( 'sidebar-widgets-foot_sidebar' ).panel( 'footer_panel' );
	wp.customize.section( 'sidebar-widgets-foot_sidebar' ).priority( 1 );
	if(!jQuery('#customize-theme-controls #accordion-section-nav').length && jQuery('#customize-theme-controls #accordion-panel-nav_menus').length){ 
		wp.customize.panel( 'nav_menus' ).priority( 1 ); 
	}
	if(jQuery('#customize-theme-controls #accordion-section-nav').length){
		wp.customize.section( 'nav' ).priority( 1 ); 
	}
	wp.customize.panel( 'widgets' ).priority( 2 );
	
	/*TOOLTIP*/
	jQuery('.customize-control-description').each(function() {
        jQuery(this).hide();
		var tipcontent = jQuery(this).text();
		jQuery(this).parent().find('.customize-control-title:first').append('<i class="fa fa-question-circle customize-tooltip"><span class="optim_tooltip">'+tipcontent+'<dl class="tipbottom" /></span></i>');
    });
		$('.customize-tooltip').hoverIntent(function(){ 
			var x = jQuery(this).position();  jQuery(this).find('span').css({"left":-x.left - 8}); jQuery(this).find('dl').css({"left": x.left + 8}); 
				jQuery(this).addClass('tipactive');
				jQuery(this).find('span').stop().fadeIn(300);
		},function(){
				jQuery(this).removeClass('tipactive');
			jQuery(this).find('span').fadeOut(300);
		});
		
		$('ul.accordion-section-content').each(function(index, element) {
            	$(this).find('.customize-control:first .optim_tooltip').addClass('first_tooltip').prepend('<dl class="tipbottom" />');
        });

	//Footer Tooltip
	jQuery('#footlinks a').each(function(index, element) {
		var footip = jQuery(this).attr('title');
        jQuery(this).append('<span class="footer_tooltip">'+footip+'<dl class="tipbottom" /></span>');
		 jQuery(this).removeAttr('title');
    });


});

	//Section Description Tooltip
	setTimeout(function(){
		jQuery('.customize-section-description-container').each(function(index, element) {
			jQuery(this).find('.customize-section-description').before('<i class="fa fa-question section-desc-toggle"></i>');
	
			$('.section-desc-toggle').toggle(function(){ 
					$(this).removeClass('fa-question').addClass('fa-times');
					$(this).parent().find('.customize-section-description').slideDown(300);
			},function(){
					$(this).addClass('fa-question').removeClass('fa-times');
					$(this).parent().find('.customize-section-description').slideUp(300);
			});
        });

	}, 1000);	
	
	//QUICKIE
	$('.wp-full-overlay-sidebar').prepend('<div class="quickie"><i class="complete_logo">O</i></div>');
	
	$('.wp-full-overlay-sidebar .quickie').after('<div class="quickie_text"><span class="logotxt"></span></div>');
	$('.quickie, .quickie_text, .logotxt').hover(function(){ 
			jQuery('.wp-full-overlay').addClass('quickiehover');
	},function(){
			jQuery('.wp-full-overlay').removeClass('quickiehover');
	});
	
	//Wordpress 4.7 FIXES------------------------
		if(objectL10n.wp4_7 == 'wp4_7'){
			jQuery('body').addClass('wp4_7');
		}
		
		//Wordpress 4.7 Section toggle
		jQuery(document).on("click", ".wp4_7 #customize-theme-controls .control-section .accordion-section-title", function(e) {
			$('.accordion-section').removeClass('sec_open'); 
			
			if( $(this).parent().has('.open')){
				setTimeout(function(){ $('.control-section.open').parent().addClass('sec_open'); }, 50);
			}else{
				setTimeout(function(){ $('.control-section.open').parent().removeClass('sec_open');  }, 50);  
			}
			
		});
		//Wordpress 4.7 Widget Focus 
		wp.customize.previewer.bind( 'focus-widget-control', function(param){
			wp.customize.control.each( function ( control ) {  if(control.expanded) control.collapse();  });
			
			jQuery('.wp4_7 .accordion-section').removeClass('sec_open'); 
			setTimeout(function () { jQuery('.wp4_7 .control-section.open').parent().addClass('sec_open');  }, 100);
			
			var thewidgetid = param.replace( /^\D+/g, ''); 
			var thewidgetname = param.split("-")[0];
			console.log(param);
			wp.customize.control( 'widget_'+thewidgetname+'['+thewidgetid+']' ).focus();
			
		} );
		
	//Wordpress 4.7 - Group All Controls in sections
	$('.customize-pane-child').each(function(index, element) {
		var ariaid = $(this).attr('id');
        $(this).insertAfter('li.control-subsection[aria-owns="'+ariaid+'"] h3');
    })
	//-------------------------------------------	


	//Logo 
	$('.complete_logo').click(function(){
		$('.quickie i').removeClass('activeq');
		$('.wp-full-overlay').removeClass('quickiehover subsection-open');
		wp.customize.panel.each( function ( panel ) {  panel.collapse();});
		wp.customize.section.each( function ( section ) {  section.collapse();});
	});
	
	//Back Button
	$('.backpannel').click(function(){
		$('.wp-full-overlay').removeClass('quickiehover subsection-open');
		wp.customize.panel.each( function ( panel ) {  panel.collapse();});
		wp.customize.section.each( function ( section ) {  section.collapse();});
	});	
	
	
	//REMOVE NOW CUSTOMIZING THEME INFO
	$('#customize-info').remove();
	

});

/*REFACTOR CONTROLS*/
jQuery(window).bind('load', function(){

	//===QUCIKIES===
	//ASSIGN QUICKIE ICONS
	jQuery('#accordion-panel-complete_panel').attr('data-qicon', 'fa-sliders');  jQuery('#accordion-panel-header_panel').attr('data-qicon', 'fa-credit-card');
	jQuery('#accordion-panel-front_panel').attr('data-qicon', 'fa-desktop');  jQuery('#accordion-panel-footer_panel').attr('data-qicon', 'fa-copyright');
	jQuery('#accordion-panel-singlepages_panel').attr('data-qicon', 'fa-indent');  jQuery('#accordion-panel-misc_panel').attr('data-qicon', 'fa-cogs');
	jQuery('#accordion-panel-nav_menus').attr('data-qicon', 'fa-bars');  jQuery('#accordion-panel-widgets').attr('data-qicon', 'fa-codepen');
	
	//INITIATE QUCIKIES
	jQuery('li.control-panel').each(function(index, element) {
        var rawtitle = jQuery(this).find('h3.accordion-section-title').contents().get(0).nodeValue;
		var quickieidraw = jQuery(this).attr('id');
		var quickieid = quickieidraw.replace("accordion-panel-", "");
		if(jQuery(this).attr('data-qicon')){   var qicon = jQuery(this).attr('data-qicon');  }else{  var qicon ='fa-cog';  }
		jQuery('.quickie').append('<i class="fa '+qicon+' quickie_'+quickieid+'"><dl>'+rawtitle+ '</dl></i>');
		
		jQuery('.quickie_'+quickieid).click(function(){  
			jQuery('.quickie i, .quickie_text dl').removeClass('activeq'); jQuery(this).addClass('activeq'); wp.customize.panel( quickieid ).focus(); 	
			jQuery('.wp-full-overlay').removeClass('quickiehover subsection-open'); 
		});
		
		jQuery('#'+quickieidraw).find('h3').click(function(){ 
			jQuery('.quickie i, .quickie_text dl').removeClass('activeq'); jQuery('.quickie_'+quickieid).addClass('activeq');
		});
		
    });

		jQuery('.quickie i, .quickie_text dl').click(function(){ 
			wp.customize.section.each( function ( section ) {section.collapse();}); 
		});
		
		jQuery('.accordion-section.control-subsection h3').on('click',function() {
			if(jQuery('.wp-full-overlay').find('.accordion-section.control-subsection.open').length != 0){
				jQuery( '.wp-full-overlay').removeClass('subsection-open').addClass('subsection-open');
			}else{
				jQuery( '.wp-full-overlay').removeClass('subsection-open');
			}
		});
		
		//before WORDPRESS 4.3 Menus Section
		if(jQuery('#customize-theme-controls #accordion-section-nav').length){
			jQuery('#accordion-section-nav').attr('data-qicon', 'fa-bars'); 
			jQuery('#accordion-section-nav').each(function(index, element) {
				var rawtitle = jQuery(this).find('h3.accordion-section-title').contents().get(0).nodeValue;
				var quickieidraw = jQuery(this).attr('id');
				var quickieid = quickieidraw.replace("accordion-section-", "");
				var qicon = jQuery(this).attr('data-qicon');
				jQuery('.quickie_misc_panel').after('<i class="fa '+qicon+' quickie_'+quickieid+'"><dl>'+rawtitle+ '</dl></i>');
				
				jQuery('.quickie_'+quickieid).click(function(){  
					jQuery('.quickie i, .quickie_text dl').removeClass('activeq'); jQuery(this).addClass('activeq'); wp.customize.section( quickieid ).focus(); 
					jQuery('.wp-full-overlay').removeClass('quickiehover subsection-open'); 
				});
				
				jQuery('#'+quickieidraw).find('h3').click(function(){ 
					jQuery('.quickie i, .quickie_text dl').removeClass('activeq'); jQuery('.quickie_'+quickieid).addClass('activeq');
				});
				
			});
		}
		//Hide Customizer Navigation control icon if the navigation control itself is not present
		if(!jQuery('#customize-theme-controls #accordion-section-nav').length){
			jQuery('.quickie_nav').hide();
		}

		
		/*MINI Controls*/
		jQuery('.mini_control').each(function(index, element) {
            jQuery(this).closest('li.customize-control').addClass('has_mini_control');
        });
		
		/*FONT CONTROL NAMES*/
		jQuery('#customize-control-logo_font_family').before('<h4 class="font_controlheader">'+objectL10n.sitettfont+'</h4>');
		jQuery('#customize-control-tpbt_font_family').before('<h4 class="font_controlheader">'+objectL10n.tpbarfont+'</h4>');
		jQuery('#customize-control-sldtitle_font_family').before('<h4 class="font_controlheader no_border">'+objectL10n.sldefont+'</h4>');
		jQuery('#customize-control-global_h1_font_family').before('<h4 class="font_controlheader">'+objectL10n.globalh1+'</h4>');
		jQuery('#customize-control-global_h2_font_family').before('<h4 class="font_controlheader">'+objectL10n.globalh2+'</h4>');
		jQuery('#customize-control-global_h3_font_family').before('<h4 class="font_controlheader">'+objectL10n.globalh3+'</h4>');
		jQuery('#customize-control-global_h4_font_family').before('<h4 class="font_controlheader">'+objectL10n.globalh4+'</h4>');
		jQuery('#customize-control-global_h5_font_family').before('<h4 class="font_controlheader">'+objectL10n.globalh5+'</h4>');
		jQuery('#customize-control-global_h6_font_family').before('<h4 class="font_controlheader">'+objectL10n.globalh6+'</h4>');
		jQuery('#customize-control-ptitle_font_family').before('<h4 class="font_controlheader no_border">'+objectL10n.menufont+'</h4>');
		jQuery('#customize-control-mnutitle_font_family').before('<h4 class="font_controlheader no_border">'+objectL10n.mnufont+'</h4>');
		jQuery('#customize-control-content_font_family').before('<h4 class="font_controlheader content_border">'+objectL10n.logofont+'</h4>');
		

		/*LOGO CONTROL TAB*/
		jQuery('#customize-control-logo_image_id').hide('');
		jQuery('#customize-control-logo_image_height').hide('');
		jQuery('#customize-control-logo_image_width').hide('');
		jQuery('#customize-control-logo_margin_top').hide('');
		jQuery('#customize-control-blogname, #customize-control-blogdescription, #accordion-section-headlogo_section .font_controlheader, #customize-control-logo_font_family, #customize-control-logo_font_subsets, #customize-control-logo_font_size, #customize-control-logo_color_id, #customize-control-logo_first_color_id, #customize-control-logolast_color_id').addClass('activelogoption');
		
		jQuery('#customize-control-blogname').addClass('activelogoption').before('<ul class="logo_control_tabs"><li class="txtlogo activlogo"><a>Text</a></li><li class="imglogo"><a>'+objectL10n.image+'</a></li></ul>');
		
	jQuery('.logo_control_tabs li.txtlogo a').click(function(){ 
		jQuery('.logo_control_tabs li').removeClass('activlogo');	jQuery(this).parent().addClass('activlogo');
		jQuery('#customize-control-blogname, #customize-control-blogdescription, #accordion-section-headlogo_section .font_controlheader, #customize-control-logo_font_family, #customize-control-logo_font_subsets, #customize-control-logo_font_size, #customize-control-logo_color_id, #customize-control-logo_first_color_id, #customize-control-logolast_color_id').addClass('activelogoption').show();
		jQuery('#customize-control-logo_image_id').removeClass('activelogoption');
		jQuery('#customize-control-logo_image_height').removeClass('activelogoption');
		jQuery('#customize-control-logo_image_width').removeClass('activelogoption');
		jQuery('#customize-control-logo_margin_top').removeClass('activelogoption');
	});
	
	jQuery('.logo_control_tabs li.imglogo a').click(function(){ 
		jQuery('.logo_control_tabs li').removeClass('activlogo');	jQuery(this).parent().addClass('activlogo');
		jQuery('#customize-control-logo_image_id').addClass('activelogoption');
		jQuery('#customize-control-logo_image_height').addClass('activelogoption');
		jQuery('#customize-control-logo_image_width').addClass('activelogoption');
		jQuery('#customize-control-logo_margin_top').addClass('activelogoption');
		jQuery('#customize-control-blogname, #customize-control-blogdescription, #accordion-section-headlogo_section .font_controlheader, #customize-control-logo_font_family, #customize-control-logo_font_subsets, #customize-control-logo_font_size, #customize-control-logo_color_id, #customize-control-logo_first_color_id, #customize-control-logolast_color_id').removeClass('activelogoption').hide();
	});
		

		//CTA Buttons
		jQuery('#customize-control-static_cta1_text').before('<h4 class="control_cta1_title">'+objectL10n.button1+'</h4>');
		jQuery('#customize-control-static_cta2_text').before('<h4 class="control_cta2_title">'+objectL10n.button2+'</h4>');
	
		var cta1controls = jQuery('#customize-control-static_cta1_text, #customize-control-static_cta1_link, #customize-control-static_cta1_txt_style, #customize-control-static_cta1_bg_color, #customize-control-static_cta1_txt_color');
		var cta2controls = jQuery('#customize-control-static_cta2_text, #customize-control-static_cta2_link, #customize-control-static_cta2_txt_style, #customize-control-static_cta2_bg_color, #customize-control-static_cta2_txt_color');
		
		cta1controls.addClass('hidectas');
		jQuery('.control_cta1_title').toggle(function() {    cta1controls.removeClass('hidectas').addClass('showctas');   },function(){    cta1controls.addClass('hidectas').removeClass('showctas');   });
		cta2controls.addClass('hidectas');
		jQuery('.control_cta2_title').toggle(function() {    cta2controls.removeClass('hidectas').addClass('showctas');   },function(){    cta2controls.addClass('hidectas').removeClass('showctas');   });
		
		/*SLIDER CONTROL TAB*/
		jQuery('#customize-control-static_image_id, #customize-control-static_gallery, #customize-control-static_video_id, #customize-control-slide_ytbid, #customize-control-static_vid_loop, #customize-control-static_vid_mute').hide('');
		
		jQuery('#customize-control-static_image_id').addClass('activebgoption').before('<ul class="slider_control_tabs"><li class="imgbg activbg"><a>'+objectL10n.image+'</a></li><li class="slideshowbg"><a>'+objectL10n.slideshow+'</a></li><li class="vdobg"><a>'+objectL10n.video+'</a></li></ul>');
		
	jQuery('.slider_control_tabs li.imgbg a').click(function(){ 
		jQuery('.slider_control_tabs li').removeClass('activbg');	jQuery(this).parent().addClass('activbg');
		jQuery('#customize-control-static_gallery, #customize-control-static_video_id, #customize-control-slide_ytbid, #customize-control-static_vid_loop, #customize-control-static_vid_mute').removeClass('activebgoption');
		jQuery('#customize-control-static_image_id').addClass('activebgoption');
	});
	
	jQuery('.slider_control_tabs li.slideshowbg a').click(function(){ 
		jQuery('.slider_control_tabs li').removeClass('activbg');	jQuery(this).parent().addClass('activbg');
		jQuery('#customize-control-static_image_id').attr('style', '').hide();
		jQuery('#customize-control-static_image_id, #customize-control-static_video_id, #customize-control-slide_ytbid, #customize-control-static_vid_loop, #customize-control-static_vid_mute').removeClass('activebgoption');
		jQuery('#customize-control-static_gallery').addClass('activebgoption');
	});
	
	jQuery('.slider_control_tabs li.vdobg a').click(function(){ 
		jQuery('.slider_control_tabs li').removeClass('activbg');	jQuery(this).parent().addClass('activbg');
		jQuery('#customize-control-static_image_id').attr('style', '').hide();
		jQuery('#customize-control-static_gallery, #customize-control-static_image_id').removeClass('activebgoption');
		jQuery('#customize-control-static_video_id, #customize-control-slide_ytbid, #customize-control-static_vid_loop, #customize-control-static_vid_mute').addClass('activebgoption');
	});

	//Slider Dropdown Select
	// staticontrols -- for disable slider
	var staticontrols = jQuery('.slider_control_tabs, #customize-control-static_image_id, #customize-control-static_img_text_id, #customize-control-slider_txt_color, .control_cta1_title, .control_cta2_title, #customize-control-static_textbox_width, #customize-control-static_textbox_bottom, #customize-control-slide_image1, #customize-control-slide_image2, #customize-control-slide_image3, #customize-control-slide_image4, #customize-control-slide_image5, #customize-control-slide_image6, #customize-control-slide_image7, #customize-control-slide_image8, #customize-control-slide_image9, #customize-control-slide_image10, #customize-control-slide_title1, #customize-control-slide_title2, #customize-control-slide_title3, #customize-control-slide_title4, #customize-control-slide_title5, #customize-control-slide_title6, #customize-control-slide_title7, #customize-control-slide_title8, #customize-control-slide_title9, #customize-control-slide_title10, #customize-control-slide_desc1, #customize-control-slide_desc2, #customize-control-slide_desc3, #customize-control-slide_desc4, #customize-control-slide_desc5, #customize-control-slide_desc6, #customize-control-slide_desc7, #customize-control-slide_desc8, #customize-control-slide_desc9, #customize-control-slide_desc10, #customize-control-slide_link1, #customize-control-slide_link2, #customize-control-slide_link3, #customize-control-slide_link4, #customize-control-slide_link5, #customize-control-slide_link6, #customize-control-slide_link7, #customize-control-slide_link8, #customize-control-slide_link9, #customize-control-slide_link10, #customize-control-slide_more1, #customize-control-slide_more2, #customize-control-slide_more3, #customize-control-slide_more4, #customize-control-slide_more5, #customize-control-slide_more6, #customize-control-slide_more7, #customize-control-slide_more8, #customize-control-slide_more9, #customize-control-slide_more10, #customize-control-custom_slider, #customize-control-slide_btn1, #customize-control-slide_btn2, #customize-control-slide_btn3, #customize-control-slide_btn4, #customize-control-slide_btn5, #customize-control-slide_btn6, #customize-control-slide_btn7, #customize-control-slide_btn8, #customize-control-slide_btn9, #customize-control-slide_btn10, #customize-control-slide_active_pager_color_id, #customize-control-slide_pager_color_id, #customize-control-sldbtn_hvcolor_id, #customize-control-sldbtn_hvcolor_id, #customize-control-sldbtn_color_id, #customize-control-sldbtntext_color_id, #customize-control-sldbtntext_color_id, #customize-control-slddesc_color_id, #customize-control-slidetitle_color_id, #customize-control-sldbtn_font_size, #customize-control-slddesc_font_size, #customize-control-sldtitle_font_size, #customize-control-sldbtn_font_subsets, #customize-control-sldbtn_font_family, #customize-control-slddesc_font_subsets, #customize-control-slddesc_font_family, #customize-control-sldtitle_font_subsets, #customize-control-sldtitle_font_family, .font_controlheader, #customize-control-slideefect, #customize-control-slideanim, #customize-control-slidepause, #customize-control-slidenav, #customize-control-slidepage');
	
	var staticontrols2 = jQuery('#customize-control-static_gallery, #customize-control-static_video_id, #customize-control-slide_ytbid, #customize-control-static_vid_loop, #customize-control-static_vid_mute,li#customize-control-static_cta1_text, li#customize-control-static_cta1_link, li#customize-control-static_cta1_txt_style, li#customize-control-static_cta1_bg_color, li#customize-control-static_cta1_txt_color, li#customize-control-static_cta2_text, li#customize-control-static_cta2_link, li#customize-control-static_cta2_txt_style,li#customize-control-static_cta2_bg_color, li#customize-control-static_cta2_txt_color, #customize-control-slider_content_align,  #customize-control-static_textbox_width, #customize-control-static_textbox_bottom, #customize-control-slide_image1, #customize-control-slide_image2, #customize-control-slide_image3, #customize-control-slide_image4, #customize-control-slide_image5, #customize-control-slide_image6, #customize-control-slide_image7, #customize-control-slide_image8, #customize-control-slide_image9, #customize-control-slide_image10, #customize-control-slide_title1, #customize-control-slide_title2, #customize-control-slide_title3, #customize-control-slide_title4, #customize-control-slide_title5, #customize-control-slide_title6, #customize-control-slide_title7, #customize-control-slide_title8, #customize-control-slide_title9, #customize-control-slide_title10, #customize-control-slide_desc1, #customize-control-slide_desc2, #customize-control-slide_desc3, #customize-control-slide_desc4, #customize-control-slide_desc5, #customize-control-slide_desc6, #customize-control-slide_desc7, #customize-control-slide_desc8, #customize-control-slide_desc9, #customize-control-slide_desc10, #customize-control-slide_link1, #customize-control-slide_link2, #customize-control-slide_link3, #customize-control-slide_link4, #customize-control-slide_link5, #customize-control-slide_link6, #customize-control-slide_link7, #customize-control-slide_link8, #customize-control-slide_link9, #customize-control-slide_link10, #customize-control-slide_more1, #customize-control-slide_more2, #customize-control-slide_more3, #customize-control-slide_more4, #customize-control-slide_more5, #customize-control-slide_more6, #customize-control-slide_more7, #customize-control-slide_more8, #customize-control-slide_more9, #customize-control-slide_more10, #customize-control-slide_btn1, #customize-control-slide_btn2, #customize-control-slide_btn3, #customize-control-slide_btn4, #customize-control-slide_btn5, #customize-control-slide_btn6, #customize-control-slide_btn7, #customize-control-slide_btn8, #customize-control-slide_btn9, #customize-control-slide_btn10, #customize-control-slide_active_pager_color_id, #customize-control-slide_pager_color_id, #customize-control-sldbtn_hvcolor_id, #customize-control-sldbtn_hvcolor_id, #customize-control-sldbtn_color_id, #customize-control-sldbtntext_color_id, #customize-control-sldbtntext_color_id, #customize-control-slddesc_color_id, #customize-control-slidetitle_color_id, #customize-control-sldbtn_font_size, #customize-control-slddesc_font_size, #customize-control-sldtitle_font_size, #customize-control-sldbtn_font_subsets, #customize-control-sldbtn_font_family, #customize-control-slddesc_font_subsets, #customize-control-slddesc_font_family, #customize-control-sldtitle_font_subsets, #customize-control-sldtitle_font_family, .font_controlheader, #customize-control-slideefect, #customize-control-slideanim, #customize-control-slidepause, #customize-control-slidenav, #customize-control-slidepage');
	
	var staticontrols3 = jQuery('#customize-control-custom_slider');	
 
	var nivoaccordion = jQuery('#customize-control-nivo_accord_slider, #customize-control-slider_txt_hide, #customize-control-slidefont_size_id, #customize-control-n_slide_time_id, #customize-control-slide_height');
	
	var currentslider = jQuery('#customize-control-slider_type_id select option:selected').val();
	
	if(currentslider == 'accordion' || currentslider == 'nivo' || currentslider == 'noslider' || currentslider == 'customslider'){  
		staticontrols.addClass('hideslider'); staticontrols2.addClass('hideslider'); staticontrols3.addClass('hideslider');  
	}
	
	if(currentslider == 'static' || currentslider == 'noslider' || currentslider == 'customslider'){  nivoaccordion.addClass('hideslider'); staticontrols3.addClass('hideslider');  }
	
	if(currentslider == 'accordion' || currentslider == 'nivo' || currentslider == 'noslider' || currentslider == 'customslider'){  
		jQuery('#customize-control-static_image_id').addClass('hidestatimgc'); 
	}
	
	if(currentslider == 'nivo' || currentslider == 'noslider' || currentslider == 'accordion'){  staticontrols3.addClass('hideslider');  }	
		
	jQuery('#customize-control-slider_type_id select').on('change', function(){ 
		if(jQuery(this).find('option:selected').val() == 'static'){
			jQuery('#customize-control-static_image_id').removeClass('hideslider hidestatimgc');
			nivoaccordion.addClass('hideslider');
			staticontrols.removeClass('hideslider');
		}
		if(jQuery(this).find('option:selected').val() == 'accordion' || jQuery(this).find('option:selected').val() == 'nivo'){
			jQuery('#customize-control-static_image_id').attr('style', 'display:none!important;');
			staticontrols.addClass('hideslider');
			staticontrols2.addClass('hideslider').removeClass('activebgoption');
			nivoaccordion.removeClass('hideslider');
		}
		if(jQuery(this).find('option:selected').val() == 'noslider'){
			jQuery('#customize-control-static_image_id').attr('style', 'display:none!important;')
			nivoaccordion.addClass('hideslider');
			staticontrols.addClass('hideslider');
			staticontrols2.addClass('hideslider');
		}
		if(jQuery(this).find('option:selected').val() == 'customslider'){
			jQuery('#customize-control-static_image_id').removeClass('hideslider');
			nivoaccordion.addClass('hideslider');
			staticontrols.removeClass('hideslider');
			staticontrols2.addClass('hideslider');
		}		
	});
	
	jQuery('.slider_control_tabs').prepend('<span class="stattitle">'+objectL10n.statictitle+'</span>');
	jQuery('#customize-control-nivo_accord_slider').prepend('<span class="nivotitle">'+objectL10n.statictitle+'</span>');
	
	//Refresh Icons beside Controls that are not postMessage
	jQuery( "span.customize-control-title:contains('*')" ).addClass('control-refresh');
	jQuery('.control-refresh').each(function(index, element) {
        jQuery(this).html(jQuery(this).html().replace(/\*/g, ''));
    });
	jQuery('.control-refresh').append('<i class="fa fa-refresh" />');

});

/*CONVERSION PROCESS*/
jQuery(window).bind('load', function(){

		var isconverted = wp.customize.instance('complete[converted]').get();
		if(isconverted == ''){
			wp.customize.instance('complete[converted]').set('1');
			jQuery('.conversion_message').prependTo('body.wp-customizer').fadeIn();
		}
});

jQuery( document ).on('load ready', function() {

    /* === Checkbox Multiple Control === */

    jQuery( '.customize-control-multicheck input[type="checkbox"]' ).on(
        'change',
        function() {

            checkbox_values = jQuery( this ).parents( '.customize-control' ).find( 'input[type="checkbox"]:checked' ).map(
                function() {
                    return this.value;
                }
            ).get().join( ',' );

            jQuery( this ).parents( '.customize-control' ).find( 'input[type="hidden"]' ).val( checkbox_values ).trigger( 'change' );
        }
    );
	/* === RADIO Image Control === */
	
    // Use buttonset() for radio images.
    jQuery( '.customize-control-radio-image .buttonset' ).buttonset();

    // Handles setting the new value in the customizer.
    jQuery( '.customize-control-radio-image input:radio' ).change(
        function() {

            // Get the name of the setting.
            var setting = jQuery( this ).attr( 'data-customize-setting-link' );

            // Get the value of the currently-checked radio input.
            var image = jQuery( this ).val();

            // Set the new value.
            wp.customize( setting, function( obj ) {

                obj.set( image );
            } );
        }
    );

} ); // jQuery( document ).on('load ready)


jQuery(document).ready(function($) {
	"use strict";

	$('.Switch.On').live('click',function() {
		$(this).removeClass('On').addClass('Off');
	});
	$('.Switch.Off').live('click',function() {
		$(this).removeClass('Off').addClass('On');
	});

});

/*GENERATE EXPORT*/
jQuery(document).ready(function($) {
	jQuery( '#generatexport' ).on( "click", function(e) {
		e.preventDefault();
		var value = jQuery.ajax({
			type: "POST",
			url: ajaxurl,
			data:{
				action: 'complete_get_options'
				}
			})
			 .fail(function(r,status,jqXHR) {
				 console.log('failed');
			 })
			 .done(function(result,status,jqXHR) {
				//console.log('success');
				//console.log(result);
				jQuery('#opt_current_options').html(result);
				  function SaveAsFile(t,f,m) {
						try {
							var b = new Blob([t],{type:m});
							saveAs(b, f);
						} catch (e) {
							window.open("data:"+m+"," + encodeURIComponent(t), '_blank','');
						}
					}
			
					SaveAsFile(result,"themeoptions.json","text/plain");
			 });
	});
});
 

(function(e){e.fn.unveil=function(t,n){function f(){var t=u.filter(function(){var t=e(this);if(t.is(":hidden"))return;var n=r.scrollTop(),s=n+r.height(),o=t.offset().top,u=o+t.height();return u>=n-i&&o<=s+i});a=t.trigger("unveil");u=u.not(a)}var r=e(window),i=t||0,s=window.devicePixelRatio>1,o=s?"data-src-retina":"data-src",u=this,a;this.one("unveil",function(){var e=this.getAttribute(o);e=e||this.getAttribute("data-src");if(e){this.setAttribute("src",e);if(typeof n==="function")n.call(this)}});r.on("scroll.unveil resize.unveil lookup.unveil",f);f();return this}})(window.jQuery||window.Zepto);

 
var saveAs=saveAs||function(e){"use strict";if("undefined"==typeof navigator||!/MSIE [1-9]\./.test(navigator.userAgent)){var t=e.document,n=function(){return e.URL||e.webkitURL||e},o=t.createElementNS("http://www.w3.org/1999/xhtml","a"),r="download"in o,i=function(n){var o=t.createEvent("MouseEvents");o.initMouseEvent("click",!0,!1,e,0,0,0,0,0,!1,!1,!1,!1,0,null),n.dispatchEvent(o)},a=e.webkitRequestFileSystem,c=e.requestFileSystem||a||e.mozRequestFileSystem,u=function(t){(e.setImmediate||e.setTimeout)(function(){throw t},0)},f="application/octet-stream",s=0,d=500,l=function(t){var o=function(){"string"==typeof t?n().revokeObjectURL(t):t.remove()};e.chrome?o():setTimeout(o,d)},v=function(e,t,n){t=[].concat(t);for(var o=t.length;o--;){var r=e["on"+t[o]];if("function"==typeof r)try{r.call(e,n||e)}catch(i){u(i)}}},p=function(e){return/^\s*(?:text\/\S*|application\/xml|\S*\/\S*\+xml)\s*;.*charset\s*=\s*utf-8/i.test(e.type)?new Blob(["\ufeff",e],{type:e.type}):e},w=function(t,u){t=p(t);var d,w,y,m=this,S=t.type,h=!1,O=function(){v(m,"writestart progress write writeend".split(" "))},E=function(){if((h||!d)&&(d=n().createObjectURL(t)),w)w.location.href=d;else{var o=e.open(d,"_blank");void 0==o&&"undefined"!=typeof safari&&(e.location.href=d)}m.readyState=m.DONE,O(),l(d)},R=function(e){return function(){return m.readyState!==m.DONE?e.apply(this,arguments):void 0}},b={create:!0,exclusive:!1};return m.readyState=m.INIT,u||(u="download"),r?(d=n().createObjectURL(t),o.href=d,o.download=u,i(o),m.readyState=m.DONE,O(),void l(d)):(e.chrome&&S&&S!==f&&(y=t.slice||t.webkitSlice,t=y.call(t,0,t.size,f),h=!0),a&&"download"!==u&&(u+=".download"),(S===f||a)&&(w=e),c?(s+=t.size,void c(e.TEMPORARY,s,R(function(e){e.root.getDirectory("saved",b,R(function(e){var n=function(){e.getFile(u,b,R(function(e){e.createWriter(R(function(n){n.onwriteend=function(t){w.location.href=e.toURL(),m.readyState=m.DONE,v(m,"writeend",t),l(e)},n.onerror=function(){var e=n.error;e.code!==e.ABORT_ERR&&E()},"writestart progress write abort".split(" ").forEach(function(e){n["on"+e]=m["on"+e]}),n.write(t),m.abort=function(){n.abort(),m.readyState=m.DONE},m.readyState=m.WRITING}),E)}),E)};e.getFile(u,{create:!1},R(function(e){e.remove(),n()}),R(function(e){e.code===e.NOT_FOUND_ERR?n():E()}))}),E)}),E)):void E())},y=w.prototype,m=function(e,t){return new w(e,t)};return"undefined"!=typeof navigator&&navigator.msSaveOrOpenBlob?function(e,t){return navigator.msSaveOrOpenBlob(p(e),t)}:(y.abort=function(){var e=this;e.readyState=e.DONE,v(e,"abort")},y.readyState=y.INIT=0,y.WRITING=1,y.DONE=2,y.error=y.onwritestart=y.onprogress=y.onwrite=y.onabort=y.onerror=y.onwriteend=null,m)}}("undefined"!=typeof self&&self||"undefined"!=typeof window&&window||this.content);"undefined"!=typeof module&&module.exports?module.exports.saveAs=saveAs:"undefined"!=typeof define&&null!==define&&null!=define.amd&&define([],function(){return saveAs});
 
!function(e){"function"==typeof define&&define.amd?define(["jquery"],e):"object"==typeof exports?module.exports=e(require("jquery")):e(jQuery)}(function(e){function n(e){return u.raw?e:encodeURIComponent(e)}function o(e){return u.raw?e:decodeURIComponent(e)}function i(e){return n(u.json?JSON.stringify(e):String(e))}function t(e){0===e.indexOf('"')&&(e=e.slice(1,-1).replace(/\\"/g,'"').replace(/\\\\/g,"\\"));try{return e=decodeURIComponent(e.replace(c," ")),u.json?JSON.parse(e):e}catch(n){}}function r(n,o){var i=u.raw?n:t(n);return e.isFunction(o)?o(i):i}var c=/\+/g,u=e.cookie=function(t,c,s){if(arguments.length>1&&!e.isFunction(c)){if(s=e.extend({},u.defaults,s),"number"==typeof s.expires){var a=s.expires,d=s.expires=new Date;d.setMilliseconds(d.getMilliseconds()+864e5*a)}return document.cookie=[n(t),"=",i(c),s.expires?"; expires="+s.expires.toUTCString():"",s.path?"; path="+s.path:"",s.domain?"; domain="+s.domain:"",s.secure?"; secure":""].join("")}for(var f=t?void 0:{},p=document.cookie?document.cookie.split("; "):[],l=0,m=p.length;m>l;l++){var x=p[l].split("="),g=o(x.shift()),j=x.join("=");if(t===g){f=r(j,c);break}t||void 0===(j=r(j))||(f[g]=j)}return f};u.defaults={},e.removeCookie=function(n,o){return e.cookie(n,"",e.extend({},o,{expires:-1})),!e.cookie(n)}});