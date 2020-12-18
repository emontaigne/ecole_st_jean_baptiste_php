<header>
      <a href="?section=accueil" class="logo">Logo</a>
      <nav class ="sidebar" id="mySidebar">
        <ul class="main">
          <li><a class="menu-a" href="?section=accueil">Accueil</a></li>
          <li class="sous-menu"><a class="menu-a" href="#">A propos
            <span class="fas fa-caret-down first"></span>
          </a>
         
        <ul class="contenu-sousMenu">
          <li><a class="menu-a" href="#">Histoire de l'école</a></li>
          <li><a class="menu-a" href="#">Mot de la direction</a></li>
        </ul>
        </li>
          <li class="sous-menu"><a class="menu-a" href="?section=info">Informations générales
          <span class="fas fa-caret-down second"></span>
          </a>
         
            <ul  class="contenu-sousMenu"> 
          <li><a class="menu-a" href="#">ROI</a></li>
          <li><a class="menu-a" href="#">Ephémérides</a></li>
          <li><a class="menu-a" href="#">Activités</a></li>
          <li><a class="menu-a" href="#">Service de garderie</a></li>
          <li><a class="menu-a" href="#">Menu/service traiteur</a></li>
        </ul> 
      
    </li>
          <li><a class="menu-a" href="?section=covid">Mesures Covid</a></li>
          <li><a class="menu-a" href="?section=contact">Contact</a></li>
          <li>
            <a class="menu-a" href="?section=connexion"><i class="fas fa-user"></i></a>
          </li>
          <li id="connect">    
        <?php 
            if(isset($_SESSION["login"]))
            {
                echo ($_SESSION["login"]) .'   ' .'<a class="menu-a" href="?section=deconnexion"><span><i class="fas fa-sign-out-alt"></i></span></a>';
                echo '<li><a class = "admin menu-a" href = "?section=parents">Parents</a></li>';
              }
            if(isset($_SESSION["login_admin"]))
            {
                echo ($_SESSION["login_admin"]) .'   ' .'<a class="menu-a" href="?section=deconnexion"><span><i class="fas fa-sign-out-alt"></i></span></a>';
                echo '<li><a class = "admin menu-a" href = "?section=admin">Admin</a></li>';         
              }
        ?>
        </li> 
        </ul>
        <button class="icone"><i class="fas fa-bars"></i></button>
      </nav>

      <div class="clearfix"></div>
    </header>


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

    <script src = "public/js/accueil.js"></script>