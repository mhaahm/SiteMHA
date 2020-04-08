// JavaScript Document

( function( $ ) {

	
	//Call values directly (Example)
		//wp.customize.value('complete[content_bg_color]')();
		//wp.customize.instance('complete[content_bg_color]').get()


	//Content Font Family
	$("head").append("<style id='content_font_css'></style>");
	wp.customize('complete[content_font_id][font-family]', function( value ) {value.bind(function( newval) {
		$('#content_font_google').remove();
		var updatedval = newval.replace(" ", "+");
		var contentsubset = wp.customize.instance('complete[content_font_id][subsets]').get();
		$("<link />", {id: "content_font_google", rel: "stylesheet", type: "text/css", href: "http://fonts.googleapis.com/css?family="+updatedval+"&subset="+contentsubset, }).appendTo("head");
		$('#content_font_css').text('html body{font-family:'+newval+'}')
		} );
	} );
	//Subsets
	wp.customize('complete[content_font_id][subsets]', function( value ) {value.bind(function( newval) {
		$('#content_font_google').remove();
		var contentfont = wp.customize.instance('complete[content_font_id][font-family]').get();
		var contentfontclean  =contentfont.replace(" ", "+");
		
		$("<link />", {id: "content_font_google", rel: "stylesheet", type: "text/css", href: "http://fonts.googleapis.com/css?family="+contentfontclean+"&subset="+newval, }).appendTo("head");
		$('#content_font_css').text('html body{font-family:'+contentfont+'}');
		} );
	} );
	
	
	//Menu Font Family
	$("head").append("<style id='ptitle_font_css'></style>");
	wp.customize('complete[ptitle_font_id][font-family]', function( value ) {value.bind(function( newval) {
		$('#ptitle_font_google').remove();
		var updatedval = newval.replace(" ", "+");
		var ptitlesubset = wp.customize.instance('complete[ptitle_font_id][subsets]').get();
		$("<link />", {id: "ptitle_font_google", rel: "stylesheet", type: "text/css", href: "http://fonts.googleapis.com/css?family="+updatedval+"&subset="+ptitlesubset, }).appendTo("head");
		$('#ptitle_font_css').text('.postitle, .product_title{font-family:'+newval+'!important}');
		} );
	} );
	//Subsets
	wp.customize('complete[ptitle_font_id][subsets]', function( value ) {value.bind(function( newval) {
		$('#ptitle_font_google').remove();
		var ptitlefont = wp.customize.instance('complete[ptitle_font_id][font-family]').get();
		var ptitlefontclean  =ptitlefont.replace(" ", "+");
		
		$("<link />", {id: "ptitle_font_google", rel: "stylesheet", type: "text/css", href: "http://fonts.googleapis.com/css?family="+ptitlefontclean+"&subset="+newval, }).appendTo("head");
		$('#ptitle_font_css').text('.postitle, .product_title{font-family:'+ptitlefont+'!important}');
		} );
	} );
	
// --------------------------------
	//Header Menu Font Family
	$("head").append("<style id='mnutitle_font_css'></style>");
	wp.customize('complete[mnutitle_font_id][font-family]', function( value ) {value.bind(function( newval) {
		$('#mnutitle_font_google').remove();
		var updatedval = newval.replace(" ", "+");
		var mnutitlesubset = wp.customize.instance('complete[mnutitle_font_id][subsets]').get();
		$("<link />", {id: "mnutitle_font_google", rel: "stylesheet", type: "text/css", href: "http://fonts.googleapis.com/css?family="+updatedval+"&subset="+mnutitlesubset, }).appendTo("head");
		$('#mnutitle_font_css').text('#topmenu ul li a{font-family:'+newval+'!important}');
		} );
	} );
	//Subsets
	wp.customize('complete[mnutitle_font_id][subsets]', function( value ) {value.bind(function( newval) {
		$('#mnutitle_font_google').remove();
		var mnutitlefont = wp.customize.instance('complete[mnutitle_font_id][font-family]').get();
		var mnutitlefontclean  =mnutitlefont.replace(" ", "+");
		
		$("<link />", {id: "mnutitle_font_google", rel: "stylesheet", type: "text/css", href: "http://fonts.googleapis.com/css?family="+mnutitlefontclean+"&subset="+newval, }).appendTo("head");
		$('#mnutitle_font_css').text('#topmenu ul li a{font-family:'+mnutitlefont+'!important}');
		} );
	} );	

	//Logo Font Family
	$("head").append("<style id='logo_font_css'></style>");
	wp.customize('complete[logo_font_id][font-family]', function( value ) {value.bind(function( newval) {
		$('#logo_font_google').remove();
		var updatedval = newval.replace(" ", "+");
		var logosubset = wp.customize.instance('complete[logo_font_id][subsets]').get();
		$("<link />", {id: "logo_font_google", rel: "stylesheet", type: "text/css", href: "http://fonts.googleapis.com/css?family="+updatedval+"&subset="+logosubset, }).appendTo("head");
		$('#logo_font_css').text('.logo h2, .logo h1, .logo h2 a, .logo h1 a{font-family:'+newval+'!important}')
		} );
	} );
	//Subsets
	wp.customize('complete[logo_font_id][subsets]', function( value ) {value.bind(function( newval) {
		$('#logo_font_google').remove();
		var logofont = wp.customize.instance('complete[logo_font_id][font-family]').get();
		var logofontclean  =logofont.replace(" ", "+");
		
		$("<link />", {id: "logo_font_google", rel: "stylesheet", type: "text/css", href: "http://fonts.googleapis.com/css?family="+logofontclean+"&subset="+newval, }).appendTo("head");
		$('#logo_font_css').text('.logo h2, .logo h1, .logo h2 a, .logo h1 a{font-family:'+logofont+'!important}');
		} );
	} );
	
	
	// Top Bar Text Font Family
	$("head").append("<style id='tpbt_font_css'></style>");
	wp.customize('complete[tpbt_font_id][font-family]', function( value ) {value.bind(function( newval) {
		$('#tpbt_font_google').remove();
		var updatedval = newval.replace(" ", "+");
		var tpbtsubset = wp.customize.instance('complete[tpbt_font_id][subsets]').get();
		$("<link />", {id: "tpbt_font_google", rel: "stylesheet", type: "text/css", href: "http://fonts.googleapis.com/css?family="+updatedval+"&subset="+tpbtsubset, }).appendTo("head");
		$('#tpbt_font_css').text('.head-info-area, .head-info-area a{font-family:'+newval+'!important}')
		} );
	} );
	//Top Bar Subsets
	wp.customize('complete[tpbt_font_id][subsets]', function( value ) {value.bind(function( newval) {
		$('#tpbt_font_google').remove();
		var tpbtfont = wp.customize.instance('complete[tpbt_font_id][font-family]').get();
		var tpbtfontclean  =tpbtfont.replace(" ", "+");
		
		$("<link />", {id: "tpbt_font_google", rel: "stylesheet", type: "text/css", href: "http://fonts.googleapis.com/css?family="+tpbtfontclean+"&subset="+newval, }).appendTo("head");
		$('#tpbt_font_css').text('.head-info-area, .head-info-area a{font-family:'+tpbtfont+'!important}');
		} );
	} );
	
	// Slide Title Family
	$("head").append("<style id='sldtitle_font_css'></style>");
	wp.customize('complete[sldtitle_font_id][font-family]', function( value ) {value.bind(function( newval) {
		$('#sldtitle_font_google').remove();
		var updatedval = newval.replace(" ", "+");
		var sldtitlesubset = wp.customize.instance('complete[sldtitle_font_id][subsets]').get();
		$("<link />", {id: "sldtitle_font_google", rel: "stylesheet", type: "text/css", href: "http://fonts.googleapis.com/css?family="+updatedval+"&subset="+sldtitlesubset, }).appendTo("head");
		$('#sldtitle_font_css').text('.title{font-family:'+newval+'!important}')
		} );
	} );
	// Slide Title Subsets
	wp.customize('complete[sldtitle_font_id][subsets]', function( value ) {value.bind(function( newval) {
		$('#sldtitle_font_google').remove();
		var sldtitlefont = wp.customize.instance('complete[sldtitle_font_id][font-family]').get();
		var sldtitlefontclean  =sldtitlefont.replace(" ", "+");
		
		$("<link />", {id: "sldtitle_font_google", rel: "stylesheet", type: "text/css", href: "http://fonts.googleapis.com/css?family="+sldtitlefontclean+"&subset="+newval, }).appendTo("head");
		$('#sldtitle_font_css').text('.title{font-family:'+sldtitlefont+'!important}');
		} );
	} );
	//Slide Title Font Size
	wp.customize( 'complete[sldtitle_font_id][font-size]', function( value ) { value.bind( function( newval ) { 
		$('.title').css({"font-size":newval});
		} );   
	} );
 
	// Slide Description Family
	$("head").append("<style id='slddesc_font_css'></style>");
	wp.customize('complete[slddesc_font_id][font-family]', function( value ) {value.bind(function( newval) {
		$('#slddesc_font_google').remove();
		var updatedval = newval.replace(" ", "+");
		var slddescsubset = wp.customize.instance('complete[slddesc_font_id][subsets]').get();
		$("<link />", {id: "slddesc_font_google", rel: "stylesheet", type: "text/css", href: "http://fonts.googleapis.com/css?family="+updatedval+"&subset="+slddescsubset, }).appendTo("head");
		$('#slddesc_font_css').text('.slidedesc{font-family:'+newval+'!important}')
		} );
	} );
	// Slide Description Subsets
	wp.customize('complete[slddesc_font_id][subsets]', function( value ) {value.bind(function( newval) {
		$('#slddesc_font_google').remove();
		var slddescfont = wp.customize.instance('complete[slddesc_font_id][font-family]').get();
		var slddescfontclean  =slddescfont.replace(" ", "+");
		
		$("<link />", {id: "slddesc_font_google", rel: "stylesheet", type: "text/css", href: "http://fonts.googleapis.com/css?family="+slddescfontclean+"&subset="+newval, }).appendTo("head");
		$('#slddesc_font_css').text('.slidedesc{font-family:'+slddescfont+'!important}');
		} );
	} );
	//Slide Description Font Size
	wp.customize( 'complete[slddesc_font_id][font-size]', function( value ) { value.bind( function( newval ) { 
		$('.slidedesc').css({"font-size":newval});
		} );   
	} );
 
	// Slide Button Family
	$("head").append("<style id='sldbtn_font_css'></style>");
	wp.customize('complete[sldbtn_font_id][font-family]', function( value ) {value.bind(function( newval) {
		$('#sldbtn_font_google').remove();
		var updatedval = newval.replace(" ", "+");
		var sldbtnsubset = wp.customize.instance('complete[sldbtn_font_id][subsets]').get();
		$("<link />", {id: "sldbtn_font_google", rel: "stylesheet", type: "text/css", href: "http://fonts.googleapis.com/css?family="+updatedval+"&subset="+sldbtnsubset, }).appendTo("head");
		$('#sldbtn_font_css').text('.slidebtn{font-family:'+newval+'!important}')
		} );
	} );
	// Slide Button Subsets
	wp.customize('complete[sldbtn_font_id][subsets]', function( value ) {value.bind(function( newval) {
		$('#sldbtn_font_google').remove();
		var sldbtnfont = wp.customize.instance('complete[sldbtn_font_id][font-family]').get();
		var sldbtnfontclean  =sldbtnfont.replace(" ", "+");
		
		$("<link />", {id: "sldbtn_font_google", rel: "stylesheet", type: "text/css", href: "http://fonts.googleapis.com/css?family="+sldbtnfontclean+"&subset="+newval, }).appendTo("head");
		$('#sldbtn_font_css').text('.slidebtn{font-family:'+sldbtnfont+'!important}');
		} );
	} );
	//Slide Button Font Size
	wp.customize( 'complete[sldbtn_font_id][font-size]', function( value ) { value.bind( function( newval ) { 
		$('.slidebtn').css({"font-size":newval});
		} );   
	} );
	
	//Top Bar Text Size
	wp.customize( 'complete[tpbt_font_id][font-size]', function( value ) { value.bind( function( newval ) { 
		$('.head-info-area, .head-info-area a').css({"font-size":newval});
		} );   
	} );
	
	// H1 Font Family
	$("head").append("<style id='global_h1_font_css'></style>");
	wp.customize('complete[global_h1_font_id][font-family]', function( value ) {value.bind(function( newval) {
		$('#global_h1_font_google').remove();
		var updatedval = newval.replace(" ", "+");
		var globalh1subset = wp.customize.instance('complete[global_h1_font_id][subsets]').get();
		$("<link />", {id: "global_h1_font_google", rel: "stylesheet", type: "text/css", href: "http://fonts.googleapis.com/css?family="+updatedval+"&subset="+globalh1subset, }).appendTo("head");
		$('#global_h1_font_css').text('h1, h1 a{font-family:'+newval+'!important}')
		} );
	} );
	//H1 Subsets
	wp.customize('complete[global_h1_font_id][subsets]', function( value ) {value.bind(function( newval) {
		$('#global_h1_font_google').remove();
		var globalh1font = wp.customize.instance('complete[global_h1_font_id][font-family]').get();
		var globalh1fontclean  =globalh1font.replace(" ", "+");
		
		$("<link />", {id: "global_h1_font_google", rel: "stylesheet", type: "text/css", href: "http://fonts.googleapis.com/css?family="+globalh1fontclean+"&subset="+newval, }).appendTo("head");
		$('#global_h1_font_css').text('h1, h1 a{font-family:'+globalh1font+'!important}');
		} );
	} );
	//H1 Font Size
	wp.customize( 'complete[global_h1_font_id][font-size]', function( value ) { value.bind( function( newval ) { 
		$('h1, h1 a').css({"font-size":newval});
		} );   
	} );

	// H2 Font Family
	$("head").append("<style id='global_h2_font_css'></style>");
	wp.customize('complete[global_h2_font_id][font-family]', function( value ) {value.bind(function( newval) {
		$('#global_h2_font_google').remove();
		var updatedval = newval.replace(" ", "+");
		var globalh2subset = wp.customize.instance('complete[global_h2_font_id][subsets]').get();
		$("<link />", {id: "global_h2_font_google", rel: "stylesheet", type: "text/css", href: "http://fonts.googleapis.com/css?family="+updatedval+"&subset="+globalh2subset, }).appendTo("head");
		$('#global_h2_font_css').text('h2, h2 a{font-family:'+newval+'!important}')
		} );
	} );
	//H2 Subsets
	wp.customize('complete[global_h2_font_id][subsets]', function( value ) {value.bind(function( newval) {
		$('#global_h2_font_google').remove();
		var globalh2font = wp.customize.instance('complete[global_h2_font_id][font-family]').get();
		var globalh2fontclean  =globalh2font.replace(" ", "+");
		
		$("<link />", {id: "global_h2_font_google", rel: "stylesheet", type: "text/css", href: "http://fonts.googleapis.com/css?family="+globalh2fontclean+"&subset="+newval, }).appendTo("head");
		$('#global_h2_font_css').text('h2, h2 a{font-family:'+globalh2font+'!important}');
		} );
	} );
	//H2 Font Size
	wp.customize( 'complete[global_h2_font_id][font-size]', function( value ) { value.bind( function( newval ) { 
		$('h2, h2 a').css({"font-size":newval});
		} );   
	} );	
	
	// H3 Font Family
	$("head").append("<style id='global_h3_font_css'></style>");
	wp.customize('complete[global_h3_font_id][font-family]', function( value ) {value.bind(function( newval) {
		$('#global_h3_font_google').remove();
		var updatedval = newval.replace(" ", "+");
		var globalh3subset = wp.customize.instance('complete[global_h3_font_id][subsets]').get();
		$("<link />", {id: "global_h3_font_google", rel: "stylesheet", type: "text/css", href: "http://fonts.googleapis.com/css?family="+updatedval+"&subset="+globalh3subset, }).appendTo("head");
		$('#global_h3_font_css').text('h3, h3 a{font-family:'+newval+'!important}')
		} );
	} );
	//H3 Subsets
	wp.customize('complete[global_h3_font_id][subsets]', function( value ) {value.bind(function( newval) {
		$('#global_h3_font_google').remove();
		var globalh3font = wp.customize.instance('complete[global_h3_font_id][font-family]').get();
		var globalh3fontclean  =globalh3font.replace(" ", "+");
		
		$("<link />", {id: "global_h3_font_google", rel: "stylesheet", type: "text/css", href: "http://fonts.googleapis.com/css?family="+globalh3fontclean+"&subset="+newval, }).appendTo("head");
		$('#global_h3_font_css').text('h3, h3 a{font-family:'+globalh3font+'!important}');
		} );
	} );
	//H3 Font Size
	wp.customize( 'complete[global_h3_font_id][font-size]', function( value ) { value.bind( function( newval ) { 
		$('h3, h3 a').css({"font-size":newval});
		} );   
	} );	
	
	// H4 Font Family
	$("head").append("<style id='global_h4_font_css'></style>");
	wp.customize('complete[global_h4_font_id][font-family]', function( value ) {value.bind(function( newval) {
		$('#global_h4_font_google').remove();
		var updatedval = newval.replace(" ", "+");
		var globalh4subset = wp.customize.instance('complete[global_h4_font_id][subsets]').get();
		$("<link />", {id: "global_h4_font_google", rel: "stylesheet", type: "text/css", href: "http://fonts.googleapis.com/css?family="+updatedval+"&subset="+globalh4subset, }).appendTo("head");
		$('#global_h4_font_css').text('h4, h4 a{font-family:'+newval+'!important}')
		} );
	} );
	//H4 Subsets
	wp.customize('complete[global_h4_font_id][subsets]', function( value ) {value.bind(function( newval) {
		$('#global_h4_font_google').remove();
		var globalh4font = wp.customize.instance('complete[global_h4_font_id][font-family]').get();
		var globalh4fontclean  =globalh4font.replace(" ", "+");
		
		$("<link />", {id: "global_h4_font_google", rel: "stylesheet", type: "text/css", href: "http://fonts.googleapis.com/css?family="+globalh4fontclean+"&subset="+newval, }).appendTo("head");
		$('#global_h4_font_css').text('h4, h4 a{font-family:'+globalh4font+'!important}');
		} );
	} );
	//H4 Font Size
	wp.customize( 'complete[global_h4_font_id][font-size]', function( value ) { value.bind( function( newval ) { 
		$('h4, h4 a').css({"font-size":newval});
		} );   
	} );
	
	// H5 Font Family
	$("head").append("<style id='global_h5_font_css'></style>");
	wp.customize('complete[global_h5_font_id][font-family]', function( value ) {value.bind(function( newval) {
		$('#global_h5_font_google').remove();
		var updatedval = newval.replace(" ", "+");
		var globalh5subset = wp.customize.instance('complete[global_h5_font_id][subsets]').get();
		$("<link />", {id: "global_h5_font_google", rel: "stylesheet", type: "text/css", href: "http://fonts.googleapis.com/css?family="+updatedval+"&subset="+globalh5subset, }).appendTo("head");
		$('#global_h5_font_css').text('h5, h5 a{font-family:'+newval+'!important}')
		} );
	} );
	//H5 Subsets
	wp.customize('complete[global_h5_font_id][subsets]', function( value ) {value.bind(function( newval) {
		$('#global_h5_font_google').remove();
		var globalh5font = wp.customize.instance('complete[global_h5_font_id][font-family]').get();
		var globalh5fontclean  =globalh5font.replace(" ", "+");
		
		$("<link />", {id: "global_h5_font_google", rel: "stylesheet", type: "text/css", href: "http://fonts.googleapis.com/css?family="+globalh5fontclean+"&subset="+newval, }).appendTo("head");
		$('#global_h5_font_css').text('h5, h5 a{font-family:'+globalh5font+'!important}');
		} );
	} );
	//H5 Font Size
	wp.customize( 'complete[global_h5_font_id][font-size]', function( value ) { value.bind( function( newval ) { 
		$('h5, h5 a').css({"font-size":newval});
		} );   
	} );	
	
	// H6 Font Family
	$("head").append("<style id='global_h6_font_css'></style>");
	wp.customize('complete[global_h6_font_id][font-family]', function( value ) {value.bind(function( newval) {
		$('#global_h6_font_google').remove();
		var updatedval = newval.replace(" ", "+");
		var globalh6subset = wp.customize.instance('complete[global_h6_font_id][subsets]').get();
		$("<link />", {id: "global_h6_font_google", rel: "stylesheet", type: "text/css", href: "http://fonts.googleapis.com/css?family="+updatedval+"&subset="+globalh6subset, }).appendTo("head");
		$('#global_h6_font_css').text('h6, h6 a{font-family:'+newval+'!important}')
		} );
	} );
	//H6 Subsets
	wp.customize('complete[global_h6_font_id][subsets]', function( value ) {value.bind(function( newval) {
		$('#global_h6_font_google').remove();
		var globalh6font = wp.customize.instance('complete[global_h6_font_id][font-family]').get();
		var globalh6fontclean  =globalh5font.replace(" ", "+");
		
		$("<link />", {id: "global_h6_font_google", rel: "stylesheet", type: "text/css", href: "http://fonts.googleapis.com/css?family="+globalh6fontclean+"&subset="+newval, }).appendTo("head");
		$('#global_h6_font_css').text('h6, h6 a{font-family:'+globalh6font+'!important}');
		} );
	} );
	//H6 Font Size
	wp.customize( 'complete[global_h6_font_id][font-size]', function( value ) { value.bind( function( newval ) { 
		$('h6, h6 a').css({"font-size":newval});
		} );   
	} );			
	
	//Topbar Phone Text
	wp.customize( 'complete[phntp_text_id]', function( value ) { value.bind( function( newval ) {   $( '.phntp' ).html( newval );  } );  } );
	
	//Topbar Email Text
	wp.customize( 'complete[emltp_text]', function( value ) { value.bind( function( newval ) {   $( '.emltp' ).html( newval );  } );  } );
	
	//Topbar SignIn Text
	wp.customize( 'complete[sintp_text]', function( value ) { value.bind( function( newval ) {   $( '.sintp' ).html( newval );  } );  } );	
	
	//Topbar SignIn Text
	wp.customize( 'complete[suptp_text]', function( value ) { value.bind( function( newval ) {   $( '.suptp' ).html( newval );  } );  } );				
	
	// SITE LAYOUT------------
	
	//Boxed Layout Background Color
	wp.customize( 'complete[content_bg_color]', function( value ) { value.bind( function( newval ) { 
		$('.site_boxed .layer_wrapper, .site_boxed .social_buttons').css({"background":newval});
		} );   
	} );
	
	//Fixed Background
	wp.customize( 'complete[background_fixed]', function( value ) {
		value.bind( function( newval ) {   if(newval ==''){ $( 'body' ).css('background-attachment', 'scroll');}   if(newval == 1){ $( 'body' ).css('background-attachment', 'fixed');}  } );
	} );
	

	
	// HEADER------------
	//Logo Position
	wp.customize( 'complete[logo_position]', function( value ) {
		value.bind( function( newval ) {   
			$( '.header' ).removeClass('logo_left logo_right logo_center logo_middle').addClass(newval); 
			$('#topmenu .logo').remove(); 
			if(newval == 'logo_middle'){
				var menunum = $('.logo_middle #topmenu ul.menu>li').length;
				var logopos = Math.round(menunum/2);
				$('.logo_middle #topmenu ul.menu>li:nth-child('+logopos+')').after('<div class="logo">'+$('.logo_middle .logo').html()+'</div>');
				$('.logo_middle, .logo_middle #topmenu .logo').animate({"opacity": "1"});
			}

		} );   
	} );
		
	//Logo Position
	wp.customize( 'complete[trans_header_color]', function( value ) { value.bind( function( newval ) { 
		$('body.has_trans_header.home .header .logo h2, body.has_trans_header.home .header .logo h1, body.has_trans_header.home .header .logo h2 a, body.has_trans_header.home .header .logo h1 a, body.has_trans_header.home span.desc, body.home.has_trans_header #simple-menu, body.has_trans_header.home #topmenu ul li a').css({"color":newval});
		} );   
	} );
	
	
	wp.customize( 'complete[logo_image_height]', function( value ) { value.bind( function( newval ) { 
		$('.logo img').css({"height":newval});
		} );   
	});	
	
	wp.customize( 'complete[logo_image_width]', function( value ) { value.bind( function( newval ) { 
		$('.logo img').css({"width":newval});
		} );   
	});
	
	wp.customize( 'complete[logo_margin_top]', function( value ) { value.bind( function( newval ) { 
		$('.logo img').css({"margin-top":newval});
		} );   
	});	
	
	// TOPHEAD------------
	//Enable tophead
	wp.customize( 'complete[tophead_id]', function( value ) {
		value.bind( function( newval ) {   if(newval ==1){ $( '.head_top ' ).removeClass('hide_topbar');}   if(newval == ''){ $( '.head_top' ).addClass('hide_topbar');}  } );
	} );
	//Enable Topbar menu
	wp.customize( 'complete[topmenu_id]', function( value ) {
		value.bind( function( newval ) {   if(newval ==''){ $( '.head_top ' ).addClass('hide_topmenu');}   if(newval == 1){ $( '.head_top' ).removeClass('hide_topmenu');}  } );
	} );
	//Hide tophead Menu Swich
	wp.customize( 'complete[topmenu_switch]', function( value ) {
		value.bind( function( newval ) {   if(newval == ''){ $( '.head_top ' ).addClass('topmenu_switch');}   if(newval == 1){ $( '.head_top ' ).removeClass('topmenu_switch');}  } );
	} );
	//Hide tophead Search
	wp.customize( 'complete[topsearch_id]', function( value ) {
		value.bind( function( newval ) {   if(newval == 1){ $( '.head_top' ).addClass('headsearch_on');}   if(newval == 0){ $( '.head_top ' ).removeClass('headsearch_on');}  } );
	} );
	//Tophead Phone Number
	wp.customize( 'complete[tophone_id]', function( value ) {
		value.bind( function( newval ) {   if(newval !== ''){ $( '.head_top' ).addClass('tophone_on');  $( '.head_phone span' ).html( newval );  }  if(newval == ''){ $( '.head_top' ).removeClass('tophone_on');}});
	} );
	
	// SLIDER-----------------------
	//Static Slide CTA 1 Text
	wp.customize( 'complete[static_cta1_text]', function( value ) { value.bind( function( newval ) {   $( '.static_cta1' ).html( newval );  } );  } );
	//Static Slide CTA 1 Link
	wp.customize( 'complete[static_cta1_link]', function( value ) { value.bind( function( newval ) {   $( '.static_cta1' ).attr('href', newval);  } );  } );
	//Static Slide CTA 1 Style
	wp.customize( 'complete[static_cta1_txt_style]', function( value ) { value.bind( function( newval ) {   $( '.static_cta1' ).removeClass('cta_flat cta_flat_big cta_hollow cta_hollow_big cta_rounded cta_rounded_big').addClass('cta_'+newval);  }); });
	
	//Static Slide CTA 2 Text
	wp.customize( 'complete[static_cta2_text]', function( value ) { value.bind( function( newval ) {   $( '.static_cta2' ).html( newval );  } );  } );
	//Static Slide CTA 2 Link
	wp.customize( 'complete[static_cta2_link]', function( value ) { value.bind( function( newval ) {   $( '.static_cta2' ).attr('href', newval);  } );  } );
	//Static Slide CTA 2 Style
	wp.customize( 'complete[static_cta2_txt_style]', function( value ) { value.bind( function( newval ) {   $( '.static_cta2' ).removeClass('cta_flat cta_flat_big cta_hollow cta_hollow_big cta_rounded cta_rounded_big').addClass('cta_'+newval);  });  });	
	
	//Slider Text Color
	wp.customize( 'complete[slider_txt_color]', function( value ) { value.bind( function( newval ) { 
		$('.stat_content_inner').css({"color":newval});
		} );   
	});
	
	//Static Slide Text Alignment
	wp.customize( 'complete[slider_content_align]', function( value ) { value.bind( function( newval ) {   $( '.stat_content' ).removeClass('stat_content_right stat_content_left stat_content_center').addClass('stat_content_'+newval);  }); });
	
	// Custom Slider
	wp.customize( 'complete[custom_slider]', function( value ) { value.bind( function( newval ) {   $( '.slidercus' ).get( newval );  } );  } );	
	
	// Default Slider 

	//Slide Image 1
	wp.customize( 'complete[slide_image1]', function( value ) { value.bind( function( newval ) {   $( '.nivo-main-image' ).html( newval );  } );  } );
	
	//Slide Image 2
	wp.customize( 'complete[slide_image2]', function( value ) { value.bind( function( newval ) {   $( '.nivo-main-image' ).html( newval );  } );  } );	
	
	//Slide Image 3
	wp.customize( 'complete[slide_image3]', function( value ) { value.bind( function( newval ) {   $( '.nivo-main-image' ).html( newval );  } );  } );	
	
	//Slide Image 4
	wp.customize( 'complete[slide_image4]', function( value ) { value.bind( function( newval ) {   $( '.nivo-main-image' ).html( newval );  } );  } );
	
	//Slide Image 5
	wp.customize( 'complete[slide_image5]', function( value ) { value.bind( function( newval ) {   $( '.nivo-main-image' ).html( newval );  } );  } );
	
	//Slide Image 6
	wp.customize( 'complete[slide_image6]', function( value ) { value.bind( function( newval ) {   $( '.nivo-main-image' ).html( newval );  } );  } );	
	
	//Slide Image 7
	wp.customize( 'complete[slide_image7]', function( value ) { value.bind( function( newval ) {   $( '.nivo-main-image' ).html( newval );  } );  } );	
	
	//Slide Image 8
	wp.customize( 'complete[slide_image8]', function( value ) { value.bind( function( newval ) {   $( '.nivo-main-image' ).html( newval );  } );  } );
	
	//Slide Image 9
	wp.customize( 'complete[slide_image9]', function( value ) { value.bind( function( newval ) {   $( '.nivo-main-image' ).html( newval );  } );  } );	
	
	//Slide Image 10
	wp.customize( 'complete[slide_image10]', function( value ) { value.bind( function( newval ) {   $( '.nivo-main-image' ).html( newval );  } );  } );	
	
	//Slide Image 11
	wp.customize( 'complete[slide_image11]', function( value ) { value.bind( function( newval ) {   $( '.nivo-main-image' ).html( newval );  } );  } );
	
	//Slide Title 1
	wp.customize( 'complete[slide_title1]', function( value ) { value.bind( function( newval ) {   $( '.title' ).html( newval );  } );  } );	
	
	//Slide Title 2
	wp.customize( 'complete[slide_title2]', function( value ) { value.bind( function( newval ) {   $( '.title' ).html( newval );  } );  } );
	
	//Slide Title 3
	wp.customize( 'complete[slide_title3]', function( value ) { value.bind( function( newval ) {   $( '.title' ).html( newval );  } );  } );
	
	//Slide Title 4
	wp.customize( 'complete[slide_title4]', function( value ) { value.bind( function( newval ) {   $( '.title' ).html( newval );  } );  } );	
	
	//Slide Title 5
	wp.customize( 'complete[slide_title5]', function( value ) { value.bind( function( newval ) {   $( '.title' ).html( newval );  } );  } );	
	
	//Slide Title 6
	wp.customize( 'complete[slide_title6]', function( value ) { value.bind( function( newval ) {   $( '.title' ).html( newval );  } );  } );	
	
	//Slide Title 7
	wp.customize( 'complete[slide_title7]', function( value ) { value.bind( function( newval ) {   $( '.title' ).html( newval );  } );  } );	
	
	//Slide Title 8
	wp.customize( 'complete[slide_title8]', function( value ) { value.bind( function( newval ) {   $( '.title' ).html( newval );  } );  } );	
	
	//Slide Title 9
	wp.customize( 'complete[slide_title9]', function( value ) { value.bind( function( newval ) {   $( '.title' ).html( newval );  } );  } );
	
	//Slide Title 10
	wp.customize( 'complete[slide_title10]', function( value ) { value.bind( function( newval ) {   $( '.title' ).html( newval );  } );  } );	
	
	//Slide Description 1
	wp.customize( 'complete[slide_desc1]', function( value ) { value.bind( function( newval ) {   $( '.slidedesc' ).html( newval );  } );  } );	
	
	//Slide Description 2
	wp.customize( 'complete[slide_desc2]', function( value ) { value.bind( function( newval ) {   $( '.slidedesc' ).html( newval );  } );  } );
	
	//Slide Description 3
	wp.customize( 'complete[slide_desc3]', function( value ) { value.bind( function( newval ) {   $( '.slidedesc' ).html( newval );  } );  } );
	
	//Slide Description 4
	wp.customize( 'complete[slide_desc4]', function( value ) { value.bind( function( newval ) {   $( '.slidedesc' ).html( newval );  } );  } );
	
	//Slide Description 5
	wp.customize( 'complete[slide_desc5]', function( value ) { value.bind( function( newval ) {   $( '.slidedesc' ).html( newval );  } );  } );	
	
	//Slide Description 6
	wp.customize( 'complete[slide_desc6]', function( value ) { value.bind( function( newval ) {   $( '.slidedesc' ).html( newval );  } );  } );	
	
	//Slide Description 7
	wp.customize( 'complete[slide_desc7]', function( value ) { value.bind( function( newval ) {   $( '.slidedesc' ).html( newval );  } );  } );	
	
	//Slide Description 8
	wp.customize( 'complete[slide_desc8]', function( value ) { value.bind( function( newval ) {   $( '.slidedesc' ).html( newval );  } );  } );
	
	//Slide Description 9
	wp.customize( 'complete[slide_desc9]', function( value ) { value.bind( function( newval ) {   $( '.slidedesc' ).html( newval );  } );  } );
	
	//Slide Description 10
	wp.customize( 'complete[slide_desc10]', function( value ) { value.bind( function( newval ) {   $( '.slidedesc' ).html( newval );  } );  } );
	
	//Slide Button 1
	wp.customize( 'complete[slide_btn1]', function( value ) { value.bind( function( newval ) {   $( '.slidebtn' ).html( newval );  } );  } );
	
	//Slide Button 2
	wp.customize( 'complete[slide_btn2]', function( value ) { value.bind( function( newval ) {   $( '.slidebtn' ).html( newval );  } );  } );	
	
	//Slide Button 3
	wp.customize( 'complete[slide_btn3]', function( value ) { value.bind( function( newval ) {   $( '.slidebtn' ).html( newval );  } );  } );	
	
	//Slide Button 4
	wp.customize( 'complete[slide_btn4]', function( value ) { value.bind( function( newval ) {   $( '.slidebtn' ).html( newval );  } );  } );
	
	//Slide Button 5
	wp.customize( 'complete[slide_btn5]', function( value ) { value.bind( function( newval ) {   $( '.slidebtn' ).html( newval );  } );  } );
	
	//Slide Button 6
	wp.customize( 'complete[slide_btn6]', function( value ) { value.bind( function( newval ) {   $( '.slidebtn' ).html( newval );  } );  } );	
	
	//Slide Button 7
	wp.customize( 'complete[slide_btn7]', function( value ) { value.bind( function( newval ) {   $( '.slidebtn' ).html( newval );  } );  } );
	
	//Slide Button 8
	wp.customize( 'complete[slide_btn8]', function( value ) { value.bind( function( newval ) {   $( '.slidebtn' ).html( newval );  } );  } );	
	
	//Slide Button 9
	wp.customize( 'complete[slide_btn9]', function( value ) { value.bind( function( newval ) {   $( '.slidebtn' ).html( newval );  } );  } );
	
	//Slide Button 10
	wp.customize( 'complete[slide_btn10]', function( value ) { value.bind( function( newval ) {   $( '.slidebtn' ).html( newval );  } );  } );	
	
 	// Sections Featured Block Button
	wp.customize( 'complete[featured_block_button]', function( value ) { value.bind( function( newval ) { $( '.sktmore' ).html( newval );  } );  } );	
	
 	// Sections Featured Block Button
	wp.customize( 'complete[recentpost_block_button]', function( value ) { value.bind( function( newval ) { $( '.sktmore' ).html( newval );  } );  } );	
	
	//Static Slide CTA 1 Hover Background Color
	$("head").append("<style id='static_cta1_hover_bg'></style>");wp.customize('complete[static_cta1_bg_color]', function( value ) {value.bind(function( newval) {
		$("#static_cta1_hover_bg").text("body .static_cta1.cta_flat, body .static_cta1.cta_flat_big, body .static_cta1.cta_rounded, body .static_cta1.cta_rounded_big, body .static_cta1.cta_hollow:hover, body .static_cta1.cta_hollow_big:hover{background-color:"+newval+"!important;border-color:"+newval+"!important;}");} );   
	} );
	//Static Slide CTA 1 Hover Text Color
	$("head").append("<style id='static_cta1_hover_txt'></style>");wp.customize('complete[static_cta1_txt_color]', function( value ) {value.bind(function( newval) {		$("#static_cta1_hover_txt").text(".static_cta1.cta_hollow, .static_cta1.cta_hollow_big, .static_cta1.cta_flat, .static_cta1.cta_flat_big, .static_cta1.cta_rounded, .static_cta1.cta_rounded_big, .static_cta1.cta_hollow:hover, .static_cta1.cta_hollow_big:hover{color:"+newval+"!important}");} );   
	} );


	//Static Slide CTA 2 Hover Background Color
	$("head").append("<style id='static_cta2_hover_bg'></style>");wp.customize('complete[static_cta2_bg_color]', function( value ) {value.bind(function( newval) {
		$("#static_cta2_hover_bg").text("body .static_cta2.cta_flat, body .static_cta2.cta_flat_big, body .static_cta2.cta_rounded, body .static_cta2.cta_rounded_big, body .static_cta2.cta_hollow:hover, body .static_cta2.cta_hollow_big:hover{background-color:"+newval+"!important;border-color:"+newval+"!important;}");} );   
	} );
	//Static Slide CTA 2 Hover Text Color
	$("head").append("<style id='static_cta2_hover_txt'></style>");wp.customize('complete[static_cta2_txt_color]', function( value ) {value.bind(function( newval) {		$("#static_cta2_hover_txt").text(".static_cta2.cta_hollow, .static_cta2.cta_hollow_big, .static_cta2.cta_flat, .static_cta2.cta_flat_big, .static_cta2.cta_rounded, .static_cta2.cta_rounded_big, .static_cta2.cta_hollow:hover, .static_cta2.cta_hollow_big:hover{color:"+newval+"!important}");} );   
	} );

	//Slider Content Width
	wp.customize( 'complete[static_textbox_width]', function( value ) { value.bind( function( newval ) {  $('.stat_content_inner .center').css({"width":newval+'%'});
		} );   
	} );
	//Slider Content Bottom margin
	wp.customize( 'complete[static_textbox_bottom]', function( value ) { value.bind( function( newval ) {  $('.stat_content_inner').css({"bottom":newval+'%'});
		} );   
	} );

	
	//NIVO-ACCORDION Slider-------------
	//HIDE Slider TEXT
	$("head").append("<style id='slider_txt_hide'></style>");
	wp.customize( 'complete[slider_txt_hide]', function( value ) { value.bind( function( newval ) {  
		if(newval ==''){ $("#slider_txt_hide").text("#zn_nivo .nivo-caption, .acord_text{display:block!important;}");}   if(newval == 1){ $("#slider_txt_hide").text("#zn_nivo .nivo-caption, .acord_text{display:none!important;}");}
		} );   
	} );
	
	//Slider Title Font Size
	$("head").append("<style id='slidefont_size_id'></style>");wp.customize('complete[slidefont_size_id]', function( value ) {value.bind(function( newval) {					
			$("#slidefont_size_id").text("#accordion h3 a, #zn_nivo h3 a{font-size:"+newval+"!important}");} );   
	} );
	
	//ACCORDION Height
	$("head").append("<style id='slide_height'></style>");wp.customize('complete[slide_height]', function( value ) {value.bind(function( newval) {					
			$("#slide_height").text("#accordion, #slide_acord{height:"+newval+"!important}.kwicks li{ max-height:"+newval+"!important;min-height:"+newval+"!important;}");} );   
	} );

	
	
	// FOOTER COLUMNS
	
 	// Footer Columns 1
	wp.customize( 'complete[foot_cols1_title]', function( value ) { value.bind( function( newval ) { $( '.footercols1 h3' ).html( newval );  } );  } );
	
	wp.customize( 'complete[foot_cols1_content]', function( value ) { value.bind( function( newval ) { 
		$('.footercols1').html( newval );
		} );   
	});	
	// Footer Columns 1
	
 	// Footer Columns 2
	wp.customize( 'complete[foot_cols2_title]', function( value ) { value.bind( function( newval ) { $( '.footercols2 h3' ).html( newval );  } );  } );
	
	wp.customize( 'complete[foot_cols2_content]', function( value ) { value.bind( function( newval ) { 
		$('.footercols2').html( newval );
		} );   
	});	
	// Footer Columns 2	
	
 	// Footer Columns 3
	wp.customize( 'complete[foot_cols3_title]', function( value ) { value.bind( function( newval ) { $( '.footercols3 h3' ).html( newval );  } );  } );
	
	wp.customize( 'complete[foot_cols3_content]', function( value ) { value.bind( function( newval ) { 
		$('.footercols3').html( newval );
		} );   
	});	
	// Footer Columns 3	
	
 	// Footer Columns 4
	wp.customize( 'complete[foot_cols4_title]', function( value ) { value.bind( function( newval ) { $( '.footercols4 h3' ).html( newval );  } );  } );
	
	wp.customize( 'complete[foot_cols4_content]', function( value ) { value.bind( function( newval ) { 
		$('.footercols4').html( newval );
		} );   
	});	
	// Footer Columns 4			
	
	// FOOTER------------
	//Hide To Top Button
	wp.customize( 'complete[totop_id]', function( value ) {
		value.bind( function( newval ) {   if(newval ==''){ $( '.to_top ' ).addClass('hide_totop');}   if(newval == 1){ $( '.to_top' ).removeClass('hide_totop');}  } );
	} );
	//Hide To Top Button
	wp.customize( 'complete[footmenu_id]', function( value ) {
		value.bind( function( newval ) {   if(newval ==''){ $( '#footer_menu ' ).addClass('hide_footmenu');}   if(newval == 1){ $( '#footer_menu' ).removeClass('hide_footmenu');}  } );
	} );
	//Center Footer Text
	wp.customize( 'complete[copyright_center]', function( value ) {
		value.bind( function( newval ) {   if(newval ==''){ $( '#copyright' ).removeClass('copyright_center');}   if(newval == 1){ $( '#copyright' ).addClass('copyright_center');}  } );
	} );

	//Footer Copyright Content
	wp.customize( 'complete[footer_text_id]', function( value ) { value.bind( function( newval ) {   $( '.copytext' ).html( newval );  } );  } );

	// Update the site title and description in real time...
	wp.customize( 'blogname', function( value ) { value.bind( function( newval ) {   $( '.logo h1 a, .logo h2 a' ).html( newval );  } );  } );
	wp.customize( 'blogdescription', function( value ) { value.bind( function( newval ) {   $( '.logo .desc' ).html( newval );  } );  } );

	
	//SINGLE POSTS-----------
	//Hide Featured Image
	wp.customize( 'complete[single_featured]', function( value ) {
		value.bind( function( newval ) {   if(newval ==1){ $( '.single_featured' ).removeClass('hide_featuredimg');}   if(newval == ''){ $( '.single_featured' ).addClass('hide_featuredimg');}  } );
	} );
	//Hide Single Meta Info
	wp.customize( 'complete[post_info_id]', function( value ) {
		value.bind( function( newval ) {   if(newval ==1){ $( '.single_metainfo' ).removeClass('hide_singlemeta');}   if(newval == ''){ $( '.single_metainfo' ).addClass('hide_singlemeta');}  } );
	} );
	//Hide About Author
	wp.customize( 'complete[author_about_id]', function( value ) {
		value.bind( function( newval ) {   if(newval ==1){ $( '.author_box' ).removeClass('hide_authorbox');}   if(newval == ''){ $( '.author_box' ).addClass('hide_authorbox');}  } );
	} );
	//Hide Related Content
	wp.customize( 'complete[post_related_id]', function( value ) {
		value.bind( function( newval ) {   if(newval ==1){ $( '#ast_related_wrap' ).removeClass('hide_related');}   if(newval == ''){ $( '#ast_related_wrap' ).addClass('hide_related');}  } );
	} );
	//Hide Social Share Buttons
	wp.customize( 'complete[social_single_id]', function( value ) {
		value.bind( function( newval ) {   if(newval ==''){ $( '.share_foot ' ).addClass('hide_share');}   if(newval == 1){ $( '.share_foot ' ).removeClass('hide_share');}  } );
	} );
	//Hide Next Previous Posts
	wp.customize( 'complete[post_nextprev_id]', function( value ) {
		value.bind( function( newval ) {   if(newval ==''){ $( '#ast_nextprev' ).addClass('hide_nextprev');}   if(newval == 1){ $( '#ast_nextprev' ).removeClass('hide_nextprev');}  } );
	} );
	//Hide Comments
	wp.customize( 'complete[post_comments_id]', function( value ) {
		value.bind( function( newval ) {   if(newval ==1){ $( '.comments_template' ).removeClass('hide_comments');}   if(newval == ''){ $( '.comments_template' ).addClass('hide_comments');}  } );
	} );
	//Leave a Reply Text
	wp.customize( 'complete[leave_reply_title]', function( value ) { value.bind( function( newval ) {   $( '#reply-title' ).html( newval );  } );  } );

	
	//PAGE HEADER---------------
	//Hide PAGE HEADER
	wp.customize( 'complete[pageheader_switch]', function( value ) {
		value.bind( function( newval ) {   if(newval ==1){ $( '.page_head' ).removeClass('hide_page_head');}   if(newval == ''){ $( '.page_head' ).addClass('hide_page_head');}  } );
	} );
	//Hide BreadCrumbs
	wp.customize( 'complete[breadcrumbs_id]', function( value ) {
		value.bind( function( newval ) {   if(newval ==1){ $( '.layerbread' ).removeClass('hide_breadcrumbs');}   if(newval == ''){ $( '.layerbread' ).addClass('hide_breadcrumbs');}  } );
	} );
	
	//Page Header Font Size
	wp.customize( 'complete[pgtitle_size_id]', function( value ) { value.bind( function( newval ) {  $('.page .page_head .postitle').css({"font-size":newval});
		} );   
	} );
	//Page Header Background Color
	wp.customize( 'complete[page_header_color]', function( value ) { value.bind( function( newval ) {  $('.page_head, .author_div').css({"background-color":newval});
		} );   
	} );
		
	//Page Header Background Image		
	wp.customize( 'complete[pageheader_bg_image]', function( value ) { value.bind( function( newval ) { 
		$('.page_head_bg').css({"background":newval});
		} );   
	});		
	
	//Hide Page Header
	wp.customize( 'complete[hide_pageheader]', function( value ) {
		value.bind( function( newval ) {   if(newval ==1){ $( '.hide-header' ).addClass('hide_section');}   if(newval == ''){ $( '.hide-header' ).removeClass('hide_section');}  } );
	} );	
	
	
	//Page Header Text Color
	wp.customize( 'complete[page_header_txtcolor]', function( value ) { value.bind( function( newval ) {  $('.page_head, .author_div, .page_head .layerbread a, .page_head .postitle').css({"color":newval});
		} );   
	} );
	//Page Header Text Align
	wp.customize( 'complete[page_header_align]', function( value ) { value.bind( function( newval ) {  $('.page_head, .author_div').css({"text-align":newval});
		} );   
	} );
	
	//POST HEADER	
	
	//Post Header Background Color
	wp.customize( 'complete[post_header_color]', function( value ) { value.bind( function( newval ) {  $('.post_head').css({"background-color":newval});
		} );   
	} );	
	
	//Post Header Background Image		
	wp.customize( 'complete[postheader_bg_image]', function( value ) { value.bind( function( newval ) { 
		$('.post_head_bg').css({"background":newval});
		} );   
	});		
	
	//Hide Post Header
	wp.customize( 'complete[hide_postheader]', function( value ) {
		value.bind( function( newval ) {   if(newval ==1){ $( '.hide-header' ).addClass('hide_section');}   if(newval == ''){ $( '.hide-header' ).removeClass('hide_section');}  } );
	} );	



	//COLORS-------------
	//Base Color
	wp.customize( 'complete[sec_color_id]', function( value ) { value.bind( function( newval ) { 
		$('.widget_border, .heading_border, #wp-calendar #today, .thn_post_wrap .more-link:hover, .moretag:hover, .search_term #searchsubmit, .error_msg #searchsubmit, #searchsubmit, .complete_pagenav a:hover, .nav-box a:hover .left_arro, .nav-box a:hover .right_arro, .pace .pace-progress, .homeposts_title .menu_border, .pad_menutitle, span.widget_border, .ast_login_widget #loginform #wp-submit, .prog_wrap, .lts_layout1 a.image, .lts_layout2 a.image, .lts_layout3 a.image, .rel_tab:hover .related_img, .wpcf7-submit, .woo-slider #post_slider li.sale .woo_sale, .nivoinner .slide_button_wrap .lts_button, #accordion .slide_button_wrap .lts_button, .img_hover').css({"background-color":newval});
		} );   
	} );
	
	//#topmenu li.menu_highlight:hover>a
	wp.customize( 'complete[sec_color_id]', function( value ) { value.bind( function( newval ) { 
		$('.share_active, .comm_auth a, .logged-in-as a, .citeping a, .lay3 h2 a:hover, .lay4 h2 a:hover, .lay5 .postitle a:hover, .nivo-caption p a, .acord_text p a, p.form-submit #submit, .org_comment a, .org_ping a, .contact_submit input:hover, .widget_calendar td a, .ast_biotxt a, .ast_bio .ast_biotxt h3, .lts_layout2 .listing-item h2 a:hover, .lts_layout3 .listing-item h2 a:hover, .lts_layout4 .listing-item h2 a:hover, .lts_layout5 .listing-item h2 a:hover, .rel_tab:hover .rel_hover, .post-password-form input[type~=submit], .bio_head h3, .blog_mo a:hover, .ast_navigation a:hover, .lts_layout4 .blog_mo a:hover, #home_widgets .widget .thn_wgt_tt, #sidebar .widget .thn_wgt_tt, #footer .widget .thn_wgt_tt, .astwt_iframe a, .ast_bio .ast_biotxt h3, .ast_bio .ast_biotxt a, .nav-box a span, .lay2 h2.postitle:hover a ').css({"color":newval});
		} );   
	} );
	
	//------------------ MNBG -----------------
	//Sub Menu Text Color
	wp.customize( 'complete[submnu_textcolor_id]', function( value ) { value.bind( function( newval ) { 
		$('#topmenu ul.sub-menu li a:link, #topmenu ul.sub-menu li a:visited, #topmenu ul.children li a:link, #topmenu ul.children li a:visited').css({"color":newval});
		} );   
	} );	
	
	//Sub Menu Background Color
	wp.customize( 'complete[submnbg_color_id]', function( value ) { value.bind( function( newval ) { 
		$('#topmenu ul.sub-menu, #topmenu ul.children').css({"background-color":newval});
		} );   
	} );	
	//------------------ MNBG -----------------	
	
	//------------------ SUBMNBG -----------------
	//Sub Menu Hover Background Color
	wp.customize( 'complete[mnshvr_color_id]', function( value ) { value.bind( function( newval ) { 
		$('#topmenu ul li ul li a:hover, #topmenu li.menu_highlight_slim:hover, #topmenu li.menu_highlight').css({"background-color":newval});
		} );   
	} );
	
	//Sub Menu Hover Color
	wp.customize( 'complete[mnshvr_color_id]', function( value ) { value.bind( function( newval ) { 
		$('#topmenu li.menu_highlight:hover>a').css({"color":newval});
		} );   
	} );	
	//------------------ SUBMNBG -----------------		
	
	
	//Text Color on Base Color
	wp.customize( 'complete[sectxt_color_id]', function( value ) { value.bind( function( newval ) { 
		$('.icon_round a, #wp-calendar #today, .moretag:hover, .search_term #searchsubmit, .error_msg #searchsubmit, .complete_pagenav a:hover, .ast_login_widget #loginform #wp-submit, #searchsubmit, .prog_wrap, .rel_tab .related_img i, .lay1 h2.postitle a, .nivoinner .slide_button_wrap .lts_button, #accordion .slide_button_wrap .lts_button, .lts_layout1 .icon_wrap a, .lts_layout2 .icon_wrap a, .lts_layout3 .icon_wrap a, .lts_layout1 .icon_wrap a:hover, .lts_layout2 .icon_wrap a:hover, .lts_layout3 .icon_wrap a:hover, .thn_post_wrap .listing-item .moretag:hover, body .lts_layout1 .listing-item .title, .lts_layout2 .img_wrap .complete_plus, .img_hover .icon_wrap a, body .thn_post_wrap .lts_layout1 .icon_wrap a, .wpcf7-submit, .woo-slider #post_slider li.sale .woo_sale').css({"color":newval});
		} );   
	} );
	
	//Site Body Text Color
	$("head").append("<style id='bodyfont_color_css'></style>");
	wp.customize( 'complete[primtxt_color_id]', function( value ) { value.bind( function( newval ) { 
		// 		$("#bodyfont_color_css").text("html body, .single_metainfo, body .single_post .single_metainfo a, body a:link, body a:visited{color:"+newval+"}");
	
		$("#bodyfont_color_css").text("html body, body .single_post{color:"+newval+"}");
		} );   
	} );
	//Site Body Font Size
	$("head").append("<style id='bodyfont_size_css'></style>");
	wp.customize( 'complete[content_font_id][font-size]', function( value ) { value.bind( function( newval ) { 
		$("#bodyfont_size_css").text("html body, body .comment-form-comment textarea, body .comm_wrap input{font-size:"+newval+"}");
		} );   
	} );
	
	//Logo Color
	wp.customize( 'complete[logo_color_id]', function( value ) { value.bind( function( newval ) { 
		$('.logo h2, .logo h1, .logo h2 a, .logo h1 a, #simple-menu, span.desc, .logo h2 a:hover, .logo h1 a:hover').css({"color":newval});
		} );   
	} );
	//Logo Size
	wp.customize( 'complete[logo_font_id][font-size]', function( value ) { value.bind( function( newval ) { 
		$('.logo h2, .logo h1, .logo h2 a, .logo h1 a').css({"font-size":newval});
		} );   
	} );
	
	// Slider
	
	// Slide Title Color
	wp.customize( 'complete[slidetitle_color_id]', function( value ) { value.bind( function( newval ) { 
		$('.title').css({"color":newval});
		} );   
	} );	
	
	// Slide Desc Color
	wp.customize( 'complete[slddesc_color_id]', function( value ) { value.bind( function( newval ) { 
		$('.slidedesc').css({"color":newval});
		} );   
	} );	
	
	// Slide Btn Text Color
	wp.customize( 'complete[sldbtntext_color_id]', function( value ) { value.bind( function( newval ) { 
		$('.slidebtn a').css({"color":newval});
		} );   
	} );
	
	// Slide Btn Bg Color
	wp.customize( 'complete[sldbtn_color_id]', function( value ) { value.bind( function( newval ) { 
		$('.slidebtn a').css({"background-color":newval});
		} );   
	} );	
	
	// Slide Btn Hover Bg Color
	wp.customize( 'complete[sldbtn_hvcolor_id]', function( value ) { value.bind( function( newval ) { 
		$('.slidebtn a:hover').css({"background-color":newval});
		} );   
	} );
	
	// Slide Pager Color
	wp.customize( 'complete[slide_pager_color_id]', function( value ) { value.bind( function( newval ) { 
		$('.nivo-controlNav a').css({"background-color":newval});
		} );   
	} );
	
	// Slide Active Pager Color
	wp.customize( 'complete[slide_active_pager_color_id]', function( value ) { value.bind( function( newval ) { 
		$('.nivo-controlNav a.active').css({"background-color":newval});
		} );   
	} );		
	
	//Top Bar Text Color
	wp.customize( 'complete[tpbt_color_id]', function( value ) { value.bind( function( newval ) { 
		$('.head-info-area, .head-info-area a').css({"color":newval});
		} );   
	} );
	
	//Top Bar Text Hover Color
	wp.customize( 'complete[tpbt_hvcolor_id]', function( value ) { value.bind( function( newval ) { 
		$('.head-info-area a:hover').css({"color":newval});
		} );   
	} );	
	
	//Header Color
	wp.customize( 'complete[head_color_id]', function( value ) { value.bind( function( newval ) { 
		$('.header, .home.has_trans_header.page .header, .home.has_trans_header.page-template-page-frontpage_template .is-sticky .header, .home .is-sticky .header ').css({"background-color":newval});
		} );   
	} );
	//Header Topbar Background Color
	wp.customize( 'complete[head_info_color_id]', function( value ) { value.bind( function( newval ) { 
		$('.head-info-area').css({"background-color":newval});
		} );   
	} );	
	
	//Topbar Background
	wp.customize( 'complete[topbar_bg_color]', function( value ) { value.bind( function( newval ) {  $('.head_top ').css({"background-color":newval});  } );  } );
	//Topbar Color
	wp.customize( 'complete[topbar_color_id]', function( value ) { value.bind( function( newval ) {  $('.head_search, .top_head_soc a, .headsearch_on .head_phone, .headsearch_on .head_search i, #topbar_menu ul li a, .head_top').css({"color":newval});  } );   } );
	
	//Menu Text Color
	wp.customize( 'complete[menutxt_color_id]', function( value ) { value.bind( function( newval ) {  $('#topmenu ul li a, .head_soc .social_bookmarks a').css({"color":newval});  } );   } );
	
	//Menu Text Color Active
	wp.customize( 'complete[menutxt_color_active]', function( value ) { value.bind( function( newval ) {  $('#topmenu ul li.current-menu-item>a').css({"color":newval});  } );   } );	
	
	//Menu Text Color Hover
	$("head").append("<style id='menutxt_css_hover'></style>");  
	wp.customize( 'complete[menutxt_color_hover]', function( value ) { value.bind( function( newval ) {  
		$("#menutxt_css_hover").text("#topmenu ul li.menu_hover>a{color:"+newval+"!important}");
	 } );  
	} );	
	
	//Menu Text Font Size
	wp.customize( 'complete[menu_size_id]', function( value ) { value.bind( function( newval ) {  
		$('#topmenu ul li a').css({"font-size":newval});  $('#topmenu ul li').css({"line-height":newval});  } );   
	} );
	
	
	//Link Color
	wp.customize( 'complete[global_link_color_id]', function( value ) { value.bind( function( newval ) { 
		$('a:link, a:visited').css({"color":newval});
		} );   
	} );
	
	//Link Hover Color
	wp.customize( 'complete[global_link_hvcolor_id]', function( value ) { value.bind( function( newval ) { 
		$('a:hover').css({"color":newval});
		} );   
	} );	
	
	
	//H1 Color
	wp.customize( 'complete[global_h1_color_id]', function( value ) { value.bind( function( newval ) { 
		$('h1, h1 a').css({"color":newval});
		} );   
	} );
	
	//H1 Hover Color
	wp.customize( 'complete[global_h1_hvcolor_id]', function( value ) { value.bind( function( newval ) { 
		$('h1 a:hover').css({"color":newval});
		} );   
	} );	
	
	//H2 Color
	wp.customize( 'complete[global_h2_color_id]', function( value ) { value.bind( function( newval ) { 
		$('h2, h2 a').css({"color":newval});
		} );   
	} );
	
	//H2 Hover Color
	wp.customize( 'complete[global_h2_hvcolor_id]', function( value ) { value.bind( function( newval ) { 
		$('h2 a:hover').css({"color":newval});
		} );   
	} );	
	
	//H3 Color
	wp.customize( 'complete[global_h3_color_id]', function( value ) { value.bind( function( newval ) { 
		$('h3, h3 a').css({"color":newval});
		} );   
	} );
	
	//H3 Hover Color
	wp.customize( 'complete[global_h3_hvcolor_id]', function( value ) { value.bind( function( newval ) { 
		$('h3 a:hover').css({"color":newval});
		} );   
	} );	
	
	//H4 Color
	wp.customize( 'complete[global_h4_color_id]', function( value ) { value.bind( function( newval ) { 
		$('h4, h4 a').css({"color":newval});
		} );   
	} );
	
	//H4 Hover Color
	wp.customize( 'complete[global_h4_hvcolor_id]', function( value ) { value.bind( function( newval ) { 
		$('h4 a:hover').css({"color":newval});
		} );   
	} );
	
	//H5 Color
	wp.customize( 'complete[global_h5_color_id]', function( value ) { value.bind( function( newval ) { 
		$('h5, h5 a').css({"color":newval});
		} );   
	} );
	
	//H5 Hover Color
	wp.customize( 'complete[global_h5_hvcolor_id]', function( value ) { value.bind( function( newval ) { 
		$('h5 a:hover').css({"color":newval});
		} );   
	} );
	
	//H6 Color
	wp.customize( 'complete[global_h6_color_id]', function( value ) { value.bind( function( newval ) { 
		$('h6, h6 a').css({"color":newval});
		} );   
	} );
	
	//H6 Hover Color
	wp.customize( 'complete[global_h6_hvcolor_id]', function( value ) { value.bind( function( newval ) { 
		$('h6 a:hover').css({"color":newval});
		} );   
	} );
	
	// Post Meta Color
	wp.customize( 'complete[post_meta_color_id]', function( value ) { value.bind( function( newval ) { 
		$('.post_block_style1_meta, .post_block_style1_meta a, .post_block_style2_meta, .post_block_style2_meta a, .single_metainfo, .single_metainfo a').css({"color":newval});
		} );   
	} );	
	
	// Team Box Background
	wp.customize( 'complete[team_box_color_id]', function( value ) { value.bind( function( newval ) { 
		$('.team-infobox').css({"background-color":newval});
		} );   
	} );	
	
	// Social Icon Bgcolor
	wp.customize( 'complete[social_icon_color_id]', function( value ) { value.bind( function( newval ) { 
		$('.social-icons a').css({"background-color":newval});
		} );   
	} );	
	
	// Social Icon Color
	wp.customize( 'complete[social_text_color_id]', function( value ) { value.bind( function( newval ) { 
		$('.social-icons a:link, .social-icons a:visited').css({"color":newval});
		} );   
	} );	
	
	// Social Icon Hover Bgcolor
	wp.customize( 'complete[social_hover_icon_color_id]', function( value ) { value.bind( function( newval ) { 
		$('.social-icons a:hover').css({"background-color":newval});
		} );   
	} );	
	   
	// Gallery Active Filter
	wp.customize( 'complete[gallery_filtertxt_color_id]', function( value ) { value.bind( function( newval ) { 
		$('.portfolio-categ li a').css({"color":newval});
		} );   
	} );	
	
	
	wp.customize( 'complete[gallery_filter_color_id]', function( value ) { value.bind( function( newval ) { 
		$('li.active a').css({"background-color":newval});
		} );   
	} );	
	
	wp.customize( 'complete[gallery_activefiltertxt_color_id]', function( value ) { value.bind( function( newval ) { 
		$('li.active a').css({"color":newval});
		} );   
	} );		
	
	// Skills Bar Background Color
	wp.customize( 'complete[skillsbar_bgcolor_id]', function( value ) { value.bind( function( newval ) { 
		$('.skill-bg').css({"background-color":newval});
		} );   
	} );	
	
	// Skills Bar Text Color
	wp.customize( 'complete[skillsbar_text_color_id]', function( value ) { value.bind( function( newval ) { 
		$('.skillbar-title').css({"color":newval});
		} );   
	} );	
	
	
	//Sidebar Widgets Background Color
	wp.customize( 'complete[sidebar_color_id]', function( value ) { value.bind( function( newval ) {  
		$('#sidebar .widget').css({"background-color":newval});  } );   
	} );	
	//Sidebar Widgets Border Color
	wp.customize( 'complete[sidebarborder_color_id]', function( value ) { value.bind( function( newval ) {  
		$('#sidebar .widget').css({"border-color":newval});  } );   
	} );	
	//Sidebar Widgets Title Color
	wp.customize( 'complete[sidebar_tt_color_id]', function( value ) { value.bind( function( newval ) {  
		$('#sidebar .widget .widgettitle, #sidebar .widget .widgettitle a').css({"color":newval});  } );   
	} );
	//Sidebar Widgets Text Color
	wp.customize( 'complete[sidebartxt_color_id]', function( value ) { value.bind( function( newval ) {  
		$('#sidebar #sidebar .widget, #sidebar .widget .widget_wrap').css({"color":newval});  } );   
	} );
	
	//Sidebar Widgets Link Color
	wp.customize( 'complete[sidebarlink_color_id]', function( value ) { value.bind( function( newval ) {  
		$('#sidebar .widget li a, #sidebar .widget a').css({"color":newval});  } );   
	} );
	
	//Sidebar Widgets Link Hover Color
	wp.customize( 'complete[sidebarlink_hover_color_id]', function( value ) { value.bind( function( newval ) {  
		$('#sidebar .widget li a:hover, #sidebar .widget a:hover').css({"color":newval});  } );   
	} );	
	
	//Flipbox Front Bg Color
	wp.customize( 'complete[flipbg_front_color_id]', function( value ) { value.bind( function( newval ) {  
		$('.flipcard .front').css({"background-color":newval});  } );   
	} );
	
	//Flipbox Back Bg Color
	wp.customize( 'complete[flipbg_back_color_id]', function( value ) { value.bind( function( newval ) {  
		$('.flipcard .back').css({"background-color":newval});  } );   
	} );	
	
	//Flipbox Front Border Color
	wp.customize( 'complete[flipborder_front_color_id]', function( value ) { value.bind( function( newval ) {  
		$('.flipcard .front').css({"border-color":newval});  } );   
	} );	
	
	//Flipbox Back Border Color
	wp.customize( 'complete[flipborder_back_color_id]', function( value ) { value.bind( function( newval ) {  
		$('.flipcard .back').css({"border-color":newval});  } );   
	} );
	
	//Divider Color
	wp.customize( 'complete[divider_color_id]', function( value ) { value.bind( function( newval ) {  
		$('.divider1, .divider2, .divider3, .divider4, .divider5, .divider6, .fusion-title .title-sep, .fusion-title.sep-underline, .product .product-border, .fusion-title .title-sep').css({"border-color":newval});  } );   
	} );	
	
	wp.customize( 'complete[divider_color_id]', function( value ) { value.bind( function( newval ) {  
		$('.divider5 span, .divider6 span').css({"background-color":newval});  } );   
	} );
	
	//Timeline Box BG
	wp.customize( 'complete[timebox_color_id]', function( value ) { value.bind( function( newval ) {  
		$('.timeline-both-side li .timeline-description').css({"background-color":newval});  } );   
	} );
	
	//Timeline Box Border Color
	wp.customize( 'complete[timeboxborder_color_id]', function( value ) { value.bind( function( newval ) {  
		$('.timeline-both-side:before, .timeline-both-side li .border-line, .timeline-both-side li .border-line:before').css({"background-color":newval});  } );
	} );
	
	wp.customize( 'complete[timeboxborder_color_id]', function( value ) { value.bind( function( newval ) {  
		$('.timeline-both-side:after, .timeline-both-side li .timeline-description').css({"border-color":newval});  } );   
	} );
 
	//Grid Box BG Color
	wp.customize( 'complete[gridbox_color_id]', function( value ) { value.bind( function( newval ) {  
		$('.griditem').css({"background-color":newval});  } );
	} );
	
	wp.customize( 'complete[gridboxborder_color_id]', function( value ) { value.bind( function( newval ) {  
		$('.griditem').css({"border-color":newval});  } );   
	} );
	
	
	//Service Box
	wp.customize( 'complete[service_box_bg]', function( value ) { value.bind( function( newval ) {  
		$('.serviceboxbg').css({"background-color":newval});  } );   
	} );
	
	wp.customize( 'complete[service_box_bg_hover]', function( value ) { value.bind( function( newval ) {  
		$('.serviceboxbg:hover').css({"background-color":newval});  } );   
	} );
	
	wp.customize( 'complete[box_color_text]', function( value ) { value.bind( function( newval ) {  
		$('.servicebox h3, .serviceboxbg p').css({"color":newval});  } );   
	} );
	
	wp.customize( 'complete[go_bg_color]', function( value ) { value.bind( function( newval ) {  
		$('.sktgo').css({"background-color":newval});  } );   
	} );	
	
	wp.customize( 'complete[box_right_border]', function( value ) { value.bind( function( newval ) {  
		$('.serviceboxbg').css({"border-right-color":newval});  } );   
	} );	
	//Service Box		
	
	wp.customize( 'complete[expand_bg_color]', function( value ) { value.bind( function( newval ) {  
		$('.expanding-grid .spacer').css({"background-color":newval});  } );   
	} );	
	
	wp.customize( 'complete[expand_text_color]', function( value ) { value.bind( function( newval ) {  
		$('.expand-left h2, .headingseperator h3, .expand-left').css({"color":newval});  } );   
	} );	
	
	wp.customize( 'complete[square_bg_color]', function( value ) { value.bind( function( newval ) {  
		$('.squarebox').css({"background-color":newval});  } );   
	} );
	
	wp.customize( 'complete[square_bg_hover_color]', function( value ) { value.bind( function( newval ) {  
		$('.squarebox:hover').css({"background-color":newval});  } );   
	} );	
	
	wp.customize( 'complete[square_title_color]', function( value ) { value.bind( function( newval ) {  
		$('.squaretitle').css({"color":newval});  } );   
	} );			
	
	//Sidebar Widgets Font Size
	wp.customize( 'complete[wgttitle_size_id]', function( value ) { value.bind( function( newval ) {  
		$('#sidebar .widget .widgettitle, #sidebar .widget .widgettitle a').css({"font-size":newval});  } );   
	} );
	
	
	//Footer Widgets Background Color
	wp.customize( 'complete[footer_color_id]', function( value ) { value.bind( function( newval ) {  
		$('#footer').css({"background-color":newval});  } );   
	} );

	//Sidebar Widgets Text Color
	wp.customize( 'complete[footwdgtxt_color_id]', function( value ) { value.bind( function( newval ) {  
		$('#footer .footercols1, #footer .footercols2, #footer .footercols3, #footer .footercols4, .footer-post-area ul li h4, .footer-post-area ul li h4 a').css({"color":newval});  } );   
	} );
	//FOOTER Widget Title Color
	wp.customize( 'complete[footer_title_color]', function( value ) { value.bind( function( newval ) {  
		$('#footer .footercols1 h3, #footer .footercols2 h3, #footer .footercols3 h3, #footer .footercols4 h3').css({"color":newval});  } );   
	} );


	//Post Title Font Size
	wp.customize( 'complete[ptitle_size_id]', function( value ) { value.bind( function( newval ) {  
		$('.single .single_post_content .postitle, .product_title').css({"font-size":newval});  } );   
	} );
	//Post Title Color
	wp.customize( 'complete[title_txt_color_id]', function( value ) { value.bind( function( newval ) {  
		$('.postitle, .postitle a, .nav-box a, h3#comments, h3#comments_ping, .comment-reply-title, .related_h3, .nocomments, .lts_layout2 .listing-item h2 a, .lts_layout3 .listing-item h2 a, .lts_layout4 .listing-item h2 a, .lts_layout5 .listing-item h2 a, .author_inner h5, .product_title, .woocommerce-tabs h2, .related.products h2, .lts_layout4 .blog_mo a').css({"color":newval});  } );   
	} );
	//Link Color (Regular)
	$("head").append("<style id='optimlink_color'></style>");  
	wp.customize( 'complete[link_color_id]', function( value ) { value.bind( function( newval ) {  
		$("#optimlink_color").text(".org_comment a, .thn_post_wrap a:link, .thn_post_wrap a:visited, .lts_lightbox_content a:link, .lts_lightbox_content a:visited, .athor_desc a:link, .athor_desc a:visited{color:"+newval+"!important}");  } );   
	} );
	//Link Color (HOVER)
	$("head").append("<style id='optimlink_hover'></style>");  
	wp.customize( 'complete[link_color_hover]', function( value ) { value.bind( function( newval ) {  
		$("#optimlink_hover").text(".org_comment a:hover, .thn_post_wrap a:link:hover, .lts_lightbox_content a:link:hover, .lts_lightbox_content a:visited:hover, .athor_desc a:link:hover, .athor_desc a:visited:hover{color:"+newval+"!important}");  } );    
	} );
	
	//Turn All Headings to Uppercase
	$("head").append("<style id='txt_upcase_css'></style>"); 
	wp.customize( 'complete[txt_upcase_id]', function( value ) {
		value.bind( function( newval ) {   
			if(newval == 0){ $("#txt_upcase_css").text(".midrow_block h3, .lay1 h2.postitle, .more-link, .moretag, .single_post .postitle, .related_h3, .comments_template #comments, #comments_ping, #reply-title, #submit, #sidebar .widget .widgettitle, #sidebar .widget .widgettitle a, .search_term h2, .search_term #searchsubmit, .error_msg #searchsubmit, #footer .widgets .widgettitle, .home_title, body .lts_layout1 .listing-item .title, .lay4 h2.postitle, .lay2 h2.postitle a, #home_widgets .widget .widgettitle, .product_title, .page_head h1, .featured_area h2, .featured_block h3, h1, h2, h3, h4, h5, h6{text-transform:none!important}");	}   
			if(newval == 1){ $("#txt_upcase_css").text(".midrow_block h3, .lay1 h2.postitle, .more-link, .moretag, .single_post .postitle, .related_h3, .comments_template #comments, #comments_ping, #reply-title, #submit, #sidebar .widget .widgettitle, #sidebar .widget .widgettitle a, .search_term h2, .search_term #searchsubmit, .error_msg #searchsubmit, #footer .widgets .widgettitle, .home_title, body .lts_layout1 .listing-item .title, .lay4 h2.postitle, .lay2 h2.postitle a, #home_widgets .widget .widgettitle, .product_title, .page_head h1, .featured_area h2, .featured_block h3, h1, h2, h3, h4, h5, h6{text-transform:uppercase!important}");	}  
		} );
	} );	
	
	
	//Turn Menu Text &amp; All Headings to Uppercase
	$("head").append("<style id='mnutxt_upcase_css'></style>"); 
	wp.customize( 'complete[mnutxt_upcase_id]', function( value ) {
		value.bind( function( newval ) {   
			if(newval == 0){ $("#mnutxt_upcase_css").text("#topmenu ul li a{text-transform:none!important}");	}   
			if(newval == 1){ $("#mnutxt_upcase_css").text("#topmenu ul li a{text-transform:uppercase!important}");	}  
		} );
	} );	
	
	
	//Copyright Area Background Color
	wp.customize( 'complete[copyright_bg_color]', function( value ) { value.bind( function( newval ) {  
		$('#copyright').css({"background-color":newval});  } );   
	} );
	//Copyright Area Text Color
	wp.customize( 'complete[copyright_txt_color]', function( value ) { value.bind( function( newval ) {  
		$('.copytext, .copytext a').css({"color":newval});  } );   
	} );


	// SOCIAL------------
	//Social Bookmarks Style
	wp.customize( 'complete[social_button_style]', function( value ) {
		value.bind( function( newval ) {   
			$( '.social_bookmarks' ).removeClass('bookmark_simple bookmark_round bookmark_square bookmark_hexagon').addClass('bookmark_'+newval+''); 
	} );  });
	//Social Bookmarks Color
	wp.customize( 'complete[social_show_color]', function( value ) {
		value.bind( function( newval ) {   if(newval ==1){ $( '.social_bookmarks' ).addClass('social_color');}   if(newval == ''){ $( '.social_bookmarks' ).removeClass('social_color');}  } );
	} );
	//Social Bookmarks Position
	wp.customize( 'complete[social_bookmark_pos]', function( value ) {
		value.bind( function( newval ) {   
		if(newval =='topbar'){    $( '.social_bookmarks' ).detach().appendTo('.top_head_soc');  }   
		if(newval == 'header'){  $( '#topmenu' ).addClass('has_bookmark');  $( '.social_bookmarks' ).detach().appendTo('.head_soc');  }  
		if(newval == 'footer'){   $( '.social_bookmarks' ).detach().appendTo('.foot_soc');  }  
		} );
	} );
	//Social Bookmarks Size
	wp.customize( 'complete[social_bookmark_size]', function( value ) {
		value.bind( function( newval ) {   
			$( '.social_bookmarks' ).removeClass('bookmark_size_normal bookmark_size_large').addClass('bookmark_size_'+newval+''); 
	} );  });
	
	//Share This Label
	wp.customize( 'complete[share_label]', function( value ) {
		value.bind( function( newval ) {   $( '.share_label' ).html( newval );  });
	} );
	
	//Social Share Style
	wp.customize( 'complete[share_button_style]', function( value ) {
		value.bind( function( newval ) {   
			$( '.share_this' ).removeClass('social_round social_square social_hexagon social_round_color social_square_color social_hexagon_color').addClass('social_'+newval+''); 
	} );  });
	
	//Display Social Share Buttons on Pages Too
	wp.customize( 'complete[social_page_id]', function( value ) {
		value.bind( function( newval ) {   if(newval ==''){ $( '.share_foot ' ).addClass('hide_share');}   if(newval == 1){ $( '.share_foot ' ).removeClass('hide_share');}  } );
	} );	
	
	//SOCIAL Links
	wp.customize( 'complete[facebook_field_id]', function( value ) { value.bind( function( newval ) {   $( '.ast_fb' ).attr( 'href', newval );  } );  } );
	wp.customize( 'complete[twitter_field_id]', function( value ) { value.bind( function( newval ) {   $( '.ast_twt' ).attr( 'href', newval );  } );  } );
	wp.customize( 'complete[gplus_field_id]', function( value ) { value.bind( function( newval ) {   $( '.ast_gplus' ).attr( 'href', newval );  } );  } );
	wp.customize( 'complete[youtube_field_id]', function( value ) { value.bind( function( newval ) {   $( '.ast_ytb' ).attr( 'href', newval );  } );  } );
	wp.customize( 'complete[flickr_field_id]', function( value ) { value.bind( function( newval ) {   $( '.ast_flckr' ).attr( 'href', newval );  } );  } );
	wp.customize( 'complete[linkedin_field_id]', function( value ) { value.bind( function( newval ) {   $( '.ast_lnkdin' ).attr( 'href', newval );  } );  } );
	wp.customize( 'complete[pinterest_field_id]', function( value ) { value.bind( function( newval ) {   $( '.ast_pin' ).attr( 'href', newval );  } );  } );
	wp.customize( 'complete[tumblr_field_id]', function( value ) { value.bind( function( newval ) {   $( '.ast_tmblr' ).attr( 'href', newval );  } );  } );
	wp.customize( 'complete[dribble_field_id]', function( value ) { value.bind( function( newval ) {   $( '.ast_dribble' ).attr( 'href', newval );  } );  } );
	wp.customize( 'complete[behance_field_id]', function( value ) { value.bind( function( newval ) {   $( '.ast_behance' ).attr( 'href', newval );  } );  } );
	wp.customize( 'complete[instagram_field_id]', function( value ) { value.bind( function( newval ) {   $( '.ast_insta' ).attr( 'href', newval );  } );  } );
	wp.customize( 'complete[rss_field_id]', function( value ) { value.bind( function( newval ) {   $( '.ast_rss' ).attr( 'href', newval );  } );  } );
	

	//MOBILE LAYOUT---------------
	//Hide Slider on Mobile
	wp.customize( 'complete[hide_mob_slide]', function( value ) {
		value.bind( function( newval ) {   if(newval ==1){ $( '#slidera' ).addClass('mobile_hide_slide');}   if(newval == ''){ $( '#slidera' ).removeClass('mobile_hide_slide');}  } );
	} );
	//Hide Right Sidebar on Mobile
	wp.customize( 'complete[hide_mob_rightsdbr]', function( value ) {
		value.bind( function( newval ) {   if(newval ==1){ $( '#sidebar' ).addClass('hide_mob_rightsdbr');}   if(newval == ''){ $( '#sidebar' ).removeClass('hide_mob_rightsdbr');}  } );
	} );
	//Hide Page Header on Mobile
	wp.customize( 'complete[hide_mob_page_header]', function( value ) {
		value.bind( function( newval ) {   if(newval ==1){ $( '.page_head' ).addClass('hide_mob_headerimg');}   if(newval == ''){ $( '.page_head' ).removeClass('hide_mob_headerimg');}  } );
	} );
	
	
	//CUSTOM CODE-------------------------
	//Custom CSS
	$("head").append("<style id='live_custom_css'></style>");
	wp.customize( 'complete[custom-css]', function( value ) {
		value.bind( function( newval ) {   
			$("#live_custom_css").html(newval);
		} );
	} );
	
})( jQuery );



/*Customizer----------------------------------------------------------*/
jQuery(window).ready(function() {
if (! jQuery( "body" ).hasClass( "customizer-prev" ) ) { return; }
jQuery('label.current_edit a').toggle(function() {
	jQuery('#customizer_nav').addClass('customizer_nav_open');
  }, function(){  
  	jQuery('#customizer_nav').removeClass('customizer_nav_open');
});
jQuery('#customizer_nav ul li a').click(function() {
    jQuery('#customizer_nav').removeClass('customizer_nav_open');
});

jQuery('.customize_page_setting').toggle(function() {
	jQuery('.customize_pagemeta_inner').fadeIn('customizer_nav_open');
	jQuery(this).addClass('cogactive');
  }, function(){  
  	jQuery('.customize_pagemeta_inner').fadeOut('customizer_nav_open');
	jQuery(this).removeClass('cogactive');
});

	jQuery('.customizer_sidebar_holder.has_no_sidebar').prependTo('#content .single_post');
	jQuery('.customizer_sidebar_holder.has_sidebar').insertAfter('#sidebar');
	jQuery('.home .customizer_sidebar_holder').insertAfter('#frontsidebar');
	
	//ADD Widget Button for Other Pages
	jQuery('.add_widget_topage').on( 'click', function ( e ) {
			e.preventDefault();
			wp.customize.preview.send( 'focus-current-sidebar', jQuery( this ).parent().data( 'sidebar-id' ) );
	});

//Customizer Static Slide bottom grey bar fix
	jQuery('.customizer-prev .stat_has_img').waitForImages(function() {
			var body_size = jQuery('.stat_has_img .stat_bg_img').height();
			jQuery('.stat_bg, .stat_bg_overlay').height(body_size + 50);
		var resizeTimer;
		jQuery(window).resize(function() {
		  clearTimeout(resizeTimer);
		  resizeTimer = setTimeout(function() {
			var body_size = jQuery('.stat_has_img .stat_bg_img').height();
			jQuery('.stat_bg, .stat_bg_overlay').height(body_size + 50);
		  }, 60);
		});
	});
jQuery('.hidetop').toggle(function() {
	jQuery('.customizer-prev .header_wrap.layer_wrapper').animate({"marginTop":"0px"}, 200);
	jQuery('#customizer_topbar').addClass('tophide').animate({"top":"-50px"}, 200);
	jQuery(this).css({"opacity":"0.5"}).find('i').removeClass('fa-arrow-up').addClass('fa-arrow-down');
  }, function(){  
  	jQuery('.customizer-prev .header_wrap.layer_wrapper').animate({"marginTop":"50px"}, 200);
	jQuery('#customizer_topbar').removeClass('tophide').animate({"top":"0px"}, 200);
	jQuery(this).css({"opacity":"1"}).find('i').removeClass('fa-arrow-down').addClass('fa-arrow-up');
});

	//Remove the "Shift Click to Edit the Widget" Message
	setTimeout(function(){
		jQuery('.widget').attr('title', '');
	}, 2000);
	
	//Widget EDIT Button for Front Page
	jQuery('.edit_widget').on( 'click', function ( e ) {
			e.preventDefault();
			wp.customize.preview.send( 'focus-widget-control', jQuery( this ).parent().parent().prop( 'id' ) );
	});
	
	setTimeout(function(){
		wp.customize.preview.send( 'start-tour', jQuery('#customizer_nav').attr('class') );
		
	}, 2000);
	setTimeout(function(){
		wp.customize.preview.send( 'sidebars-loaded' );
	}, 1000);

	/*Frontpage Replace Posts Section*/
	jQuery('.dummypost .lay4_wrap, .dummypost .home_sidebar').wrapAll('<div class="dummy_content" />');
	jQuery('.replace_widget').prependTo('.dummy_content');

	//Replace Button
	jQuery('.add_widget_home').on( 'click', function ( e ) {
		e.preventDefault();
		wp.customize.preview.send( 'focus-frontsidebar');
	});
		

//Customizer Tooltips
jQuery('.edit_widget').miniTip();
jQuery('.page_sidebar_position label, .add_widget_topage').miniTip();
});