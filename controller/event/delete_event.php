<?php 
    // récupérer les personnes et afficher
    $id = "";
    $dateEvent = "";
    $titreEvent = "";
    if(isset($_GET["id"]))
    {
        $id = $_GET["id"];
        $p = new Event();
        $tabInfos = $p->readById($id);
         var_dump($tabInfos);

        $dateEvent= $tabInfos[0]["date_event"];
        $titreEvent = $tabInfos[0]["titre_event"];

    }

    // soumet
    if(isset($_POST["id"]))
    {
        $p = new Event();
        $p->delete($id);
        header("Location:?section=accueil");
    }


    // appeler la vue
    require_once("view/page/event/delete_event.php");
?>