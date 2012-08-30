jQuery(window).ready(function() {

    Modernizr.load();
    
    if(Modernizr.touch) {
        jQuery('header > nav > li > a').click(function() {
    	    if (jQuery(this).parent().children('ul').length) {
    	      return false;
    	    } else {
                  return true;
                }
    	  });
    }
});