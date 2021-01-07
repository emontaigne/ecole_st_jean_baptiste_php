<?php 
    // verifie
    
   //  récupérer les personnes et afficher
    $p = new Event();
  //  var_dump($p);
    $tabEvents = $p->read();
    // var_dump($tabEvents);
    // générer le tableau html
    $table = "";
   // $table .= "  <thead><tr class='tr_event'><th class='th_event'></th><th class='th_event'>Titre</th><th class='th_event'>Contenu</th><th class='th_event'>Modifier</th><th class='th_event'>Supprimer</th></tr></thead>";
    foreach ($tabEvents as $value) {
      
        $tr = "<tr>";
        $tr .= "<td class = date_event cssDateEvent'>" . $value["format_date"] . "</td>";
        $tr .= "<td class = td_event'>" . $value["titre_event"] . "</td>";
        $tr .= "<td class = td_event'>" . $value["contenu_event"] . "</td>"; 
        if(isset($_SESSION["login_admin"]))
    {
        $tr .= "<td class = td_event'><a class='icon1' href='?section=update_event&id=". $value["id"]."'><i class='fas fa-pencil-alt'></i></a></td>";
        $tr .= "<td class = td_event'><a class='icon1' href='?section=delete_event&id=". $value["id"]."'><i class='fas fa-trash-alt'></i></a></td>";
    }
        $tr .= "</tr>";
        $table .= $tr;
       // var_dump($value);
    }
      //   récupérer les events et afficher
    if(isset($_POST["date_event"],$_POST["titre_event"],$_POST["contenu_event"]))
    {
        $p = new Event();
        $p->create($_POST["date_event"],$_POST["titre_event"],$_POST["contenu_event"]);
       header("Location:?section=accueil");
        
    }

   // require_once("view/page/event/update_event.php");
   


   
    
  // header("Location:?section=read_event");
    require_once("view/page/accueil.php");

?>

