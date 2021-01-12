
<div id="main" style="display:block;"><a name ="monheader"></a>

      <a href="?section=accueil" class="logo">École Saint Jean-Baptiste</a>
      <nav class ="sidebar" id="mySidebar" style="display:block;">
        <ul class="main" id=" nav-list">


          <li><a class="menu-a" href="?section=accueil" id="accueil">Accueil</a></li>
          <li class="sous-menu" ><a class="menu-a" id="apropos" href="?section=apropos">A propos
            <span class="fas fa-caret-down first"></span>
          </a>
         
        <ul class="contenu-sousMenu">
          <li><a class="menu-a" href="?section=histoire" id="histoire">Histoire de l'école</a></li>
          <li><a class="menu-a" href="?section=motdirection" id="motdirection">Mot de la direction</a></li>
        </ul>
        </li>
          <li class="sous-menu"><a class="menu-a" href="?section=info" id="info">Informations générales
          <span class="fas fa-caret-down second"></span>
          </a>
         
            <ul  class="contenu-sousMenu"> 
          <li><a class="menu-a menuInfoGen" href="?section=roi" id="roi">ROI</a></li>
          <li><a class="menu-a menuInfoGen" href="?section=ephemerides" id="ephemerides">Ephémérides</a></li>
          <li><a class="menu-a menuInfoGen" href="?section=activites" id="activites">Activités</a></li>
          <li><a class="menu-a menuInfoGen" href="?section=service-garderie" id="service-garderie">Service de garderie</a></li>
          <li><a class="menu-a menuInfoGen" href="?section=traiteur" id="traiteur">Menu/service traiteur</a></li>
        </ul> 
      
    </li>
          <li><a class="menu-a " href="?section=covid" id="covid">Mesures Covid</a></li>
          <li><a class="menu-a " href="?section=contact" id="contact">Contact</a></li>
          <li>
            <a class="menu-a" href="?section=connexion" id="connexion"><i class="fas fa-user"></i></a>
          </li>
          <li id="connect">    
        <?php 
            if(isset($_SESSION["login"]))
            {
                echo ($_SESSION["login"]) .'<a class="menu-a" href="?section=deconnexion"><span><i class="fas fa-sign-out-alt"></i></span></a>';
                echo '<li class="sous-menu"><a class ="admin menu-a" href="?section=parents" id="parents">Parents<span class="fas fa-caret-down first"></span></a>
                <ul class="contenu-sousMenu">
                <li><a class="menu-a" href="?section=galerie">Galerie</a></li>
                <li><a class="menu-a" href="?section=garderie">Garderie</a></li>
                </ul>
                </li>';
              }
            if(isset($_SESSION["login_admin"]))
            {
                echo '<a class="menu-a" href="?section=deconnexion"><span><i class="fas fa-sign-out-alt"></i></span></a>';
                echo '<li><a id="admin" class ="admin menu-a" href="?section=admin">Admin</a></li>';         
              }
        ?>
        </li> 
        </ul>
       
      </nav>



            </div><button class="icone" onclick="toggleNav();" ><i class="fas fa-bars"></i></button>


<!--<nav class="nav">
      <ul>    

        <li><a href="?section=accueil"><img class = "logo" src="public/images/sjb.png" alt="Logo du site"></a></li>
      </ul>

      <ul class="menu">
      <li>
          <a href="?section=accueil">Accueil</a>
        </li>
        <li>
          <a href="?section=info">Info</a>
        </li>
        <li>
          <a href="?section=agenda">Agenda</a>
        </li>
        <li>
          <a href="?section=contact">Contact</a>
        </li>
        <li>
          <a href="?section=connexion"><i class="far fa-user"></i></a>
        </li>
        <li>
          <a href="#"><i class="fas fa-search"></i></a>
        </li>
        <li>
          <a href="#"><i class="fas fa-shopping-basket"></i></a>
        </li>
        <li>    
        <?php 
            if(isset($_SESSION["login"]))
            {
                echo '<li>' . $_SESSION["login"] .'   ' .'<a href="?section=deconnexion"><span><i class="fas fa-sign-out-alt"></i></span></a></li>';
            }
        ?>
        </li>
      </ul>
    </nav>-->
