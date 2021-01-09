<div class = "container2">
<section class="slideshow">
        <ul>
          <li>
            <img class="imgSliderHome"
              src="public/images/slides1.jpg"
              alt=""
              width="100%"
              height="350px"
            />
          </li>
          <li>
            <img class="imgSliderHome"
              src="public/images/slides2.jpg"
              alt=""
              width="100%"
              height="350px"
            />
          </li>
          <li>
            <img class="imgSliderHome"
              src="public/images/slide3.png"
              alt=""
              width="100%"
              height="350px"
            />
          </li>
        </ul>
      </section>
      <div class = "aicon-flex">
<a class="aicon" href="#"><div class = "rond"><img class="icon" src = "public/images/blackboard.png"/><p class = "titreicon">ÉCOLE</p></div></a>
<a class="aicon" href="#"><div class = "rond"><img class="icon" src = "public/images/balls.png"/><p class = "titreicon" id="titreGarderie">GARDERIE</p></div></a>
<a class="aicon" href="#"><div class = "rond"><img class="icon" src = "public/images/dinner.png"/><p class = "titreicon" id="titreMenu">MENU</p></div></a>
<a class="aicon" href="#"><div class = "rond"><img class="icon" src = "public/images/paint.png"/><p class = "titreicon" id="titreActivites">ACTIVITÉS</p></div></a>
</div> 
<div class="divVide"></div>

<div class = "agendaprinc" id="agenda">
  <div class="left">
  <div class = "afficher1_event">
<!--<h2 class = "affiche1_event">Ephémérides</h2>-->
<table class="agenda_event">
<!--<thead><tr><th class='th_event'></th><th class='th_event'>Titre</th><th class='th_event'>Contenu</th></tr></thead>-->
<div class='colonne'>
<?= $table; ?> 

</div>
</table>
</div>
</div>
    <section class="agenda" >
        <header class="fleches" id="fleches">
       
        </header>

        <div class="semaine">
        <div class="jr">lun</div>
        <div class="jr">mar</div>
        <div class="jr">mer</div>
        <div class="jr">jeu</div>
        <div class="jr">ven</div>
        <div class="jr">sam</div>
        <div class="jr">dim</div>
        </div>
        
    <main>
<div class="right">

</div>



    </main>
    </section>

</div>
<?php
    if(isset($_SESSION["login_admin"]))

    {
require_once("view/page/event/create_event.php");
    }
?>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src = "public/js/menu-actif.js"></script>
<script src = "public/js/agenda.js"></script>
