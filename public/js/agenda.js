var date = new Date();

function calendrier(year, month) {
  // variables
  var maintenant = new Date(year, month - 1, 1);
  var dernierJour = new Date(year, month, 0);
  var premier_jour_semaine = maintenant.getDay() == 0 ? 7 : maintenant.getDay();
  var dernier_jour_mois = dernierJour.getDate();
  var jour = 1;
  var html = "<div class ='row'>";

  var dernière_cellule = premier_jour_semaine + dernier_jour_mois;

  for (var i = 1; i <= 42; i++) {
    // le jour qui commence la semaine
    if (i == premier_jour_semaine) {
      jour == 1;
    }

    if (i < premier_jour_semaine || i >= dernière_cellule) {
      // cellule vide
      html += "<div class='rien'></div>";
    } else {
      // montre le jour
      if (
        jour == date.getDate() &&
        month == date.getMonth() + 1 &&
        year == date.getFullYear()
      ){
      html += "<div class='jour ajd'>" + jour + "</div>";}
     else{ 

         let newJour = jour.toString().length == 1? '0'+jour:jour;
         let newMonth = month.toString().length == 1? '0'+month:month;
        // console.log(jour.toString().length);
       html += `<div class='jour d${newJour}-${newMonth}'>${jour}</div>`;}
      jour++;
    }

    if (i % 7 == 0) {
      if (jour > dernier_jour_mois) break;
      html += "</div></div><div class='row'>\n";
    }
  }

  html += "</div>";

  // mois
  var mois = Array(
    "Janvier",
    "Février",
    "Mars",
    "Avril",
    "Mai",
    "Juin",
    "Juillet",
    "Août",
    "Septembre",
    "Octobre",
    "Novembre",
    "Décembre"
  );

  // calcul du mois suivant + année
  nextMonth = month + 1;
  nextYear = year;
  if (month + 1 > 12) {
    nextMonth = 1;
    nextYear = year + 1;
  }

  // calcul pour le mois précédent
  prevMonth = month - 1;
  prevYear = year;
  if (month - 1 < 1) {
    prevMonth = 12;
    prevYear = year - 1;
  }

  document
    .getElementById("agenda")
    .getElementsByTagName("header")[0].innerHTML =
    "<div class = 'precedent'><button class = 'lien' onclick='calendrier(" +
    prevYear +
    "," +
    prevMonth +
    ")' <span><</span></div></button>" +
    "<div class = 'month'>" +
    mois[month - 1] +
    " " +
    year +
    "</div><div class ='suivant'><button class ='lien' onclick='calendrier(" +
    nextYear +
    "," +
    nextMonth +
    ")'<span></span>></button></div>";
  document
    .getElementById("agenda")
    .getElementsByClassName("right")[0].innerHTML = html;
}

calendrier(date.getFullYear(), date.getMonth() + 1);




$(".agenda_event").append("<tbody></tbody>");


function update_date(data){
  return $.post("http://localhost/ecole_st_jean_baptiste/ecole_st_jean_baptiste_php/controller/ajax/update_ajax.php", data);
  
  }


function save_date(data){
return $.post("http://localhost/ecole_st_jean_baptiste/ecole_st_jean_baptiste_php/controller/ajax/ajax.php", data);

}
function read_date(){
return $.get("http://localhost/ecole_st_jean_baptiste/ecole_st_jean_baptiste_php/controller/ajax/read_ajax.php");

}
console.log($('.d2021-01-20'));
read_date().then(function(events){
events.forEach((x,i)=>{
  console.log(x); 
  $(`.d${x.format_date}`).addClass('datum');
  $(".datum").css({'background-color':'#01969b'});
 // console.log($(`.d${x.date_event}`));
$('tbody').append(`<tr class='tr_event-${i} tr_event'></tr>`);
$(`.tr_event-${i}`).append(`<td id = 'date_event'>${x.format_date}</td>`);
$(`.tr_event-${i}`).append(`<td id = 'titre_event'>${x.titre_event}</td>`);
$(`.tr_event-${i}`).append(`<td id = 'contenu_event'>${x.contenu_event}</td>`);
$(`.tr_event-${i}`).hide();
//$(`.tr_event-${i}`).append("<td class = 'td_event'></td>");
//$('.td_event').append
//("<a class='icon1' href='<?php?section=update_event&id=$value['id']'><i class='fas fa-pencil-alt'></i></a></a>");
//$(`.tr_event-${i}`).append("<td class = td_event'><a class='icon1' href='?section=delete_event'><i class='fas fa-trash-alt'></i></a></td>");
//$(`.tr_event-${i}`).append("<td class = 'td_event'><a class='icon1' href='?section=update_event'><i class='fas fa-pencil-alt'></i></a></td>");
//$(`.tr_event-${i}`).append("<td class = 'td_event'><a class='icon1' href='?section=delete_event&id=$value['id']'><i class='fas fa-trash-alt'></i></a></td>");
});
console.log(events);//données pour le tableau éphémérides
});
console.log('toto');
/*$(".jour").on('click','#submit_event',function(e){
e.preventDefault();
console.log('toto');
const form = $(this).closest("form");
//création d'un objet date
const date_event = form.find("#date_event").val();
const titre_event = form.find("#titre_event").val();
const contenu_event= form.find("#contenu_event").val();
console.log(date);
//then = callback (nouvelle entrée est écrite)
save_date({date:date_event,titre:titre_event,contenu:contenu_event}).then(function(){
//requete read_date:

//read_date().then(function(events){
 // events.forEach((x,i)=>{
  //  console.log(x);  
  //  $(".jour .d2021-01-20").addClass('datum');
  //  console.log($(".d2021-01-20"));
 //   $(".datum").css({'background-color':'yellow'});
let newTrId = $('.tr_event').length;
$('tbody').append(`<tr class='tr_event-${newTrId} tr_event'></tr>`);
$(`.tr_event-${newTrId}`).append(`<td id = 'date_event'>${date_event}</td>`);
$(`.tr_event-${newTrId}`).append(`<td id = 'titre_event'>${titre_event}</td>`);
$(`.tr_event-${newTrId}`).append(`<td id = 'contenu_event'>${contenu_event}</td>`);
$(`.tr_event-${newTrId}`).hide();
//$(`.tr_event-${newTrIdi}`).append("<td class = 'td_event'><a class='icon1' href='?section=update_event&id=$value['id']'><i class='fas fa-pencil-alt'></i></a></td>");
//$(`.tr_event-${newTrId}`).append("<td class = 'td_event'><a class='icon1' href='?section=delete_event&id=$value['id']'><i class='fas fa-trash-alt'></i></a></td>");
//$(`.tr_event-${newTrId}`).append("<td class = 'td_event'></td>");
//$('.td_event').html("<a class='icon1' href='?section=update_event&id=$value['id']'><i class='fas fa-pencil-alt'></i></a>");
//$(`.tr_event-${newTrId}`).append("<td class = td_event'><a class='icon1' href='?section=update_event'><i class='fas fa-pencil-alt'></i></a></td>")
//$(`.tr_event-${newTrId}`).append("<td class = td_event'><a class='icon1' href='?section=delete_event'><i class='fas fa-trash-alt'></i></a></td>");
 // });
 
//console.log(events);//données pour le tableau éphémérides
});
//$('.popup').css({'display':'none'});
//$(".jour.active").append("<div class='bullet'></div>");
//$(".section1").addClass("datum");
//$(".datum").css({'background-color':'yellow'});
});*/


