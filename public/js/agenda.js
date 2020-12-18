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
      html += "<div class='ajd'>" + jour + "</div>";}
     else{ html += "<div class='jour'>" + jour + "</div>";}
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
    .getElementsByTagName("main")[0].innerHTML = html;
}

calendrier(date.getFullYear(), date.getMonth() + 1);

