// .bounce, .flash, .pulse, .shake, .swing, .tada, .wobble, .bounceIn, .bounceInDown, .bounceInLeft, .bounceInRight, .bounceInUp, .bounceOut, .bounceOutDown, .bounceOutLeft, .bounceOutRight, .bounceOutUp, .fadeIn, .fadeInDown, .fadeInDownBig, .fadeInLeft, .fadeInLeftBig, .fadeInRight, .fadeInRightBig, .fadeInUp, .fadeInUpBig, .fadeOut, .fadeOutDown, .fadeOutDownBig, .fadeOutLeft, .fadeOutLeftBig, .fadeOutRight, .fadeOutRightBig, .fadeOutUp, .fadeOutUpBig, .flip, .flipInX, .flipInY, .flipOutX, .flipOutY, .lightSpeedIn, .lightSpeedOut, .rotateIn, .rotateInDownLeft, .rotateInDownRight, .rotateInUpLeft, .rotateInUpRight, .rotateOut, .rotateOutDownLeft, .rotateOutDownRight, .rotateOutUpLeft, .rotateOutUpRight, .slideInDown, .slideInLeft, .slideInRight, .slideOutLeft, .slideOutRight, .slideOutUp, .rollIn, .rollOut, .zoomIn, .zoomInDown, .zoomInLeft, .zoomInRight, .zoomInUp
jQuery.noConflict();
jQuery(document).ready(function(){
jQuery(window).scroll(function(){
    // This is then function used to detect if the element is scrolled into view
    function elementScrolled(elem)
    {
        var docViewTop = jQuery(window).scrollTop();
        var docViewBottom = docViewTop + jQuery(window).height();
        var elemTop = jQuery(elem).offset().top;
        return ((elemTop <= docViewBottom) && (elemTop >= docViewTop));
    }
    // This is where we use the function to detect if ".box2" is scrolled into view, and when it is add the class ".animated" to the <p> child element
    if(elementScrolled('.home1_section_area .center .col-columns-5')) {
        var els = jQuery('.home1_section_area .center .col-columns-5'),
            i = 0,
            f = function () {
                jQuery(els[i++]).addClass('fadeInLeft');
                if(i < els.length) setTimeout(f, 400);
            };
        f();
    }
	
	 if(elementScrolled('.home1_section_area .center .col-columns-6')) {
        var els = jQuery('.home1_section_area .center .col-columns-6'),
            i = 0,
            f = function () {
                jQuery(els[i++]).addClass('fadeInRight');
                if(i < els.length) setTimeout(f, 400);
            };
        f();
    }
	
	if(elementScrolled('.home2_section_area .center')) {
        var els = jQuery('.home2_section_area .center'),
            i = 0,
            f = function () {
                jQuery(els[i++]).addClass('fadeInUp');
                if(i < els.length) setTimeout(f, 400);
            };
        f();
    } 

});
});