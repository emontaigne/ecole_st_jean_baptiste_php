<?php 
    // récupérer les events et afficher
  /*  if(isset($_POST["date_event"],$_POST["titre_event"],$_POST["contenu_event"]))
    {
        $p = new Event();
        $p->create($_POST["date_event"],$_POST["titre_event"],$_POST["contenu_event"]);
       header("Location:?section=accueil");
        
    }*/

    require_once("view/page/event/create_event.php");
?>


