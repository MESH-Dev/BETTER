jQuery(document).ready(function($){

  //Are we loaded?
  console.log('New theme loaded!');

  //Let's do something awesome!

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

});
