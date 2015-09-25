/**	
	* Theme Name: WpF ultraResponsive
	* Theme Scripts
	* Author: WpFreeware
	* Author URI: http://wpfreeware.com/

	Custom JS
	
	1. DROPDOWN MENU	
	2. BOOTSTRAP TOOLTIP
	3. SCROLL UP BUTTON
	4. Pushdown content area if header image not exist	 	
	
**/

jQuery(function($){
	
  /* ----------------------------------------------------------- */
  /*  1. DROPDOWN MENU
  /* ----------------------------------------------------------- */

   // for hover dropdown menu
  jQuery('ul.nav li.dropdown').hover(function() {
      jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
    }, function() {
      jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
    });
	
	/* ----------------------------------------------------------- */
	/*  2. BOOTSTRAP TOOLTIP
	/* ----------------------------------------------------------- */
		jQuery('.soc_tooltip').tooltip('hide')


	/* ----------------------------------------------------------- */
	/*  3. SCROLL UP BUTTON
	/* ----------------------------------------------------------- */  
   
	  //Check to see if the window is top if not then display button

	  jQuery(window).scroll(function(){
	    if ($(this).scrollTop() > 300) {
	      jQuery('.scrollup').fadeIn();
	    } else {
	      jQuery('.scrollup').fadeOut();
	    }
	  });
	   
	  //Click event to scroll to top

	  jQuery('.scrollup').click(function(){
	    jQuery('html, body').animate({scrollTop : 0},900);
	    return false;
	  });
	

});


/* ----------------------------------------------------------- */
/*  4. Pushdown content area if header image not exist
/* ----------------------------------------------------------- */ 


if (jQuery('#imgBanner').length > 0){  // return's true if element is present
   jQuery('#courseArchive').addClass('courseArchive_pushup');
}
else {
 jQuery('#courseArchive').addClass('courseArchive_pushdown');
}