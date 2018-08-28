jQuery(function ($) {
        // Transition effect for navbar 
        $(window).scroll(function() {
          // checks if window is scrolled more than 500px, adds/removes solid class
          if($(this).scrollTop() > 80) { 
              $('.site-header').addClass('solid');
          } else {
              $('.site-header').removeClass('solid');
          }
        });
});