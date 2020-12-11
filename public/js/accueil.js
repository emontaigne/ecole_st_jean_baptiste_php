//import $ from 'jquery';
// import axios from 'axios';

/*$('nav ul li').on('click', function (e) {
  e.preventDefault();
  $(this).addClass('active');
  $(this).siblings().each(function () {
    $(this).removeClass('active');
  });
});*/

/*$(function () {
  $('nav ul li').on('click', function () {
    $('nav ul li').siblings().each().addClass('active');
  });
});*/

/*$(function() {
  $('li').on("click", function(){
    if($(".limenu").hasClass("active")){
      $(".limenu").removeClass("active");
    }
    else{
      $(".limenu").addClass("active");
    }
  });
});*/
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



/*$('.sub').click(function(){
  $('nav ul .sub-show').toggleClass("show");
  $('nav ul .first').toggleClass("rotate");
});
$('.sub1').click( function(){
  $('nav ul .sub1-show').toggleClass("show1");
  $('nav ul .second').toggleClass("rotate");
});
$('nav ul li').hover(function(){
$('this').addClass("active").siblings().removeClass('active');

});*/

/*$("#connect1").append(`<a class = "admin" href = "?section=admin">Admin</a>`);
$("#connect1").append('<li><a href="?section=deconnexion"><span><i class="fas fa-sign-out-alt"></i></span></a></li>');
$('this').addClass("active").siblings().removeClass('active');
$("#connect").append(`<a class = "parents" href = "?section=parents">Parents</a>`);
*/


