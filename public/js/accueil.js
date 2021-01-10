$(".menu-a").on( "click", function() {
  $(".menu-a").css({"text-decoration": "none", "background-color" : "transparent"});
  $(this).css({"text-decoration": "underline", "background-color" :"#c35884"})
});

$(function(){
  $('.sidebar').on("click",function(){
    $('.sidebar').addClass('responsive')
  })
})

$(function () {
  setInterval(function () {
    $('.slideshow ul').animate({ marginLeft: -1000 }, 1200, function () {
      $(this).css({ marginLeft: 0 }).find('li:last').after($(this).find('li:first'));
    });
  }, 3500);
});


/*$(function() {
  $('.jour').on('click',function() {
   $('.jour').not(this).removeClass('active');
    $(this).toggleClass('active');
  //  $(this).addClass('active');  
   // $(".jour.active").append("<div class='popup'></div>");
//$('.popup').load('view/page/event/create_event.php');
 
});
  });*/






