
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
  //  $(this).addClass('active');  
    $(".jour.active").append("<div class='popup'></div>");
  // $(".popup").append("<form class='form-agenda'></form>");
//  $(".form-agenda").append("<div class='div-form'></div>");
///  $(".form-agenda div").append('<label for="date-form">Choisissez une date : </label><input name="date-form" id="date-form" type="date-form" value="2020-12-29"><br><label>Titre: </label><input type="text" name:"titre"><br><label for="story">Détails:</label><textarea id="story" name="story" rows="5" cols="33">...</textarea><br>');
$('.popup').load('view/page/event/create_event.php');
$(".jour.active").append("<div class='bullet'></div>");
 
});
  });

  


  $('.jour').on('click',function() {
    
 $('.popup').css({'display':'none'});

  });

 /*$( "#submit_event" ).click(function() {
      $( ".form_event").submit();
      $('.jour.active').append("<div class='bullet'></div>");
      alert("Submitted");
 });*/

  /*$('.popup').attr('id', function(i) {
  return 'num'+(i+1);
})*/



 // $('.popup').css({'display':'none'});



/*$( "form" ).submit(function( event ) {
    $( "span" ).text( "Validated..." ).show();
    event.preventDefault();
});*/
/*
$(function() {
  $('.jour').on('click',function() {
  $(".popup").after("<form></form>");
  $("form").after("<div class='div-form'></div>");
  $("form div").after('<label for="date-form">Choisissez une date : </label><input name="date-form" id="date-form" type="date-form" value="2020-12-29"><br>');
  $("form div").after("<label>Titre: </label><input type='text' name:'titre'><br>");
  $("form div").after("<label for='story'>Détails:</label><textarea id='story' name='story' rows='5' cols='33'>...</textarea><br>");
  $("form div").after("<button class='submit-form' type='submit' value='Soumettre'></button>");

  $('.popup').attr('id', function(i) {
  return 'num'+(i+1);
})
});
});
$(".submit-form").click(function() {

  $('.popup').css({'display':'none'});
$('.jour').append("<div class='bullet'></div>");

});*/

