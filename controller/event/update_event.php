<?php 
    $id = "";
    $dateEvent = "";
    $titreEvent= "";
    $contenuEvent = "";


  //  echo($_GET["id"]);
    

    // récupérer les personnes et afficher
    if(isset($_GET["id"]))
    {
        $id = $_GET["id"];
       
        $p = new Event();
        $tabInfos = $p->readById($id);
         

        $dateEvent = $tabInfos[0]["date_event"];
        $titreEvent = $tabInfos[0]["titre_event"];
        $contenuEvent = $tabInfos[0]["contenu_event"];
       
    }


//echo($p6);
    // soumet le form
    if(isset($_POST["date_event"],$_POST["titre_event"], $_POST["contenu_event"], $_GET["id"]))
    {
        $p = new Event();
        $p->update($_GET["id"], $_POST["date_event"],$_POST["titre_event"], $_POST["contenu_event"]);
      header("Location:?section=accueil");
      
    }



    // appeler la vue
    require_once("view/page/event/update_event.php");
?>