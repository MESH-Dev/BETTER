jQuery(document).ready(function($){

  //Are we loaded?
  console.log('New theme loaded!');

  //Let's do something awesome!

  //Smooth page scroll
  $(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    console.log('This should be a smooth scroll');
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          //'top-50' is custom.  limits the offset to top of window plus 50px
          scrollTop: (target.offset().top)
        }, 800);
        return false;
      }
    }
  });
});


  var windowW = $(window).width();
  
  if (windowW > 768){
  $('.panel').each(function(i){
      i = i++;
      $(this).parallax("50%", .05);
    });   

  $('.has-parallax').parallax("50%",.05);
  }
  //-----------------------------------------------------

   //external link manager

  // New tabs

  /* ==========
     Variables
   ========== */
   var url = location.protocol+'//'+location.hostname+(location.port ? ':'+location.port: '');

  /* ==========
      Utilities
    ========== */
   function beginsWith(needle, haystack){
     return (haystack.substr(0, needle.length) == needle);
   };


  /* ==========
     Anchors open in new tab/window
   ========== */
   $('a').each(function(){

     if(typeof $(this).attr('href') != "undefined") {
      var test = beginsWith( url, $(this).attr('href') );
      //if it's an external link then open in a new tab
      if( test == false && $(this).attr('href').indexOf('#') == -1){
        $(this).attr('target','_blank').prepend('<span class="sr-only">External link, opens in new window</span>');
      }
     }
   });

   //=============================================================

   //Scroll reveal

   window.sr = ScrollReveal();

    sr.reveal('.landing-row', { 
      duration: 600,
      scale: 1,
      opacity:0,
      delay: 500,
      origin: 'bottom',
      //reset:true
  });

    sr.reveal('.icon-grid-item', { 
      duration: 600,
      scale: 1,
      opacity:0,
      delay: 500,
      origin: 'bottom',
      reset:true
  }, 200 );

      sr.reveal('.page-template-default .text-content', { 
      duration: 600,
      scale: 1,
      opacity:0,
      delay: 500,
      origin: 'top',
      reset:true
  }, 200 );

      sr.reveal('.icons-list .icon-content', { 
      duration: 600,
      scale: 1,
      opacity:0,
      delay: 500,
      origin: 'bottom',
      reset:true
  }, 200 );

      sr.reveal('.icon-section-title', { 
      duration: 600,
      scale: 1,
      //opacity:0,
      delay: 500,
      origin: 'top',
      reset:true
  } );
       sr.reveal('.process .statement', { 
      duration: 600,
      scale: 0,
      opacity:0,
      delay: 500,
      origin: 'top',
      reset:true
  } );

  //Sidr

$('.sidr-trigger').sidr({
      name: 'sidr-main',
      source: '.nav',
      renaming: false,
      side: 'right',
      displace: false
});

 $('.sidr-close').click(
    function(){
      $.sidr('close', 'sidr-main');
       //console.log("Sidr should be closed");
    });

 $('.sidr-trigger').click(function(){
  $('.fa').toggleClass('fa-close');
  $('.fa').toggleClass('fa-bars');

 });

});
