<div class = "container2">
<section class="slideshow">
        <ul>
          <li>
            <img
              src="public/images/slides1.jpg"
              alt=""
              width="100%"
              height="350px"
            />
          </li>
          <li>
            <img
              src="public/images/slides2.jpg"
              alt=""
              width="100%"
              height="350px"
            />
          </li>
          <li>
            <img
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
<a class="aicon" href="#"><div class = "rond"><img class="icon" src = "public/images/balls.png"/><p class = "titreicon">GARDERIE</p></div></a>
<a class="aicon" href="#"><div class = "rond"><img class="icon" src = "public/images/dinner.png"/><p class = "titreicon">MENU</p></div></a>
<a class="aicon" href="#"><div class = "rond"><img class="icon" src = "public/images/paint.png"/><p class = "titreicon">ACTIVITÉS</p></div></a>
</div> 

<div class = "agendaprinc" id="agenda">
  <div class="left">
  <div class = "afficher1_event">
<h2 class = "affiche1_event">Ephémérides</h2>
<table>
    <?= $table; ?> 
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
  <!--   <button class = "section" ><a class = "section1" href="?section=accueil">Afficher</a></button>
       <button class = "section" ><a class = "section1" href="?section=create_event">Ajouter</a></button>  -->
    </main>
    </section>


</div>
</div>
<script src = "public/js/agenda.js"></script>
