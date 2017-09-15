jQuery(document).ready(function($) {
	
/*  $(".form-group input").val("");
  
  $(".form-group input").focusout(function(){
    if($(this).val() != ""){
      $(this).addClass("has-content");
    }else{
      $(this).removeClass("has-content");
    }
  });*/

  
  $icon = $('.arrow-header');
  $icon.velocity({
    translateY: "10px"
  }, {
    loop: true
  }).velocity("reverse");


  $icon = $('.fa.fa-chevron-up');
  $icon.velocity({
    translateY: "10px"
  }, {
    loop: true
  }).velocity("reverse");



  $('#enviar_cont').click(function(event) {
   /* Act on the event */
   alertjs.show({
    type: 'confirm',
    title: 'Confirm',
    text: 'Estas Seguro De Enviar El Mensaje?',
            from: 'left', //slide from left     
            complete: function( val ) {
              if( val ) {
                    //clicked ok
                  } else {
                    //clicked cancel
                  }
                }
              });
 });


  
          $('#upload').hide();
        $('.btn-upload').click(function() {
            $('#upload').click();
        });




  var owl = $(".owl-carousel");
  owl.owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    autoPlaySpeed: 3000,
    autoPlayTimeout: 3000,
    autoplayHoverPause: true
  });
  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
      $('.scrollup').fadeIn();
    } else {
      $('.scrollup').fadeOut();
    }
  });
  $('.scrollup').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 1000);
    return false;
  });

  AOS.init({
    offset: 100,
    duration: 700,
    easing: 'ease-in-sine',
    delay: 100,
  });

  $('.modal').on('shown.bs.modal', function () {
    $(this).find('[autofocus]').focus();

  });

});




