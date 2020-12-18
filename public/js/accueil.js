
$(".menu-a").on( "click", function() {
  $(".menu-a").css({"text-decoration": "none", "background-color" : "transparent"});
  $(this).css({"text-decoration": "underline", "background-color" :"#c35884"})
});

$(document).ready(function(){
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

//var i = 0;
$(function() {
  $('.jour').on('click',function() {
    $('.jour').not(this).removeClass('active');
    $(this).toggleClass('active');
    $(".active").append("<div class='popup'></div>");
  /*$('.popup').attr('id', function(i) {
  return 'num'+(i+1);
})*/
  });
});


$(".jour").click(function() {
  $('.popup').css({'display':'none'});
  $('.popup').hide();
}); 


