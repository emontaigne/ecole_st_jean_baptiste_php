<?php 
    $id = "";
    $nom = "";
    $prenom = "";
    $adRue = "";
    $adNum = "";
    $adCp = "";
    $adVille = "";
    $dateNaissance = "";
    $classes = "";
    $accueil="";
    $m1="";
    $m2="";
    $m3="";
    $p1="";
    $p2="";
    $p3="";
    $p4="";
    $p5="";
    $p6="";

  //  echo($_GET["id"]);
    

    // récupérer les personnes et afficher
    if(isset($_GET["id"]))
    {
        $id = $_GET["id"];
       
        $p = new Personne();
        $tabInfos = $p->readById($id);
         

        $nom = $tabInfos[0]["nom"];
        $prenom = $tabInfos[0]["prenom"];
        $adRue = $tabInfos[0]["ad_rue"];
        $adNum = $tabInfos[0]["ad_num"];
        $adCp = $tabInfos[0]["ad_cp"];
        $adVille = $tabInfos[0]["ad_ville"];
        $dateNaissance = $tabInfos[0]["date_naissance"];
       // echo($dateNaissance);
        $classes = $tabInfos[0]["classes"];
       // echo ($classes);
        if($classes === "P6"){
            $p6 = "selected";
        }
        elseif($classes === "Accueil"){
            $accueil = "selected";
        }
        elseif($classes === "M1"){
            $m1 = "selected";
        }
        elseif($classes === "M2"){
            $m2 = "selected";
        }
        elseif($classes === "M3"){
                $m3 = "selected";
        }
        elseif($classes === "P1"){
            $p1 = "selected";
        }
        elseif($classes === "P2"){
            $p2 = "selected";
        }
        elseif($classes === "P3"){
            $p3 = "selected";
        }
        elseif($classes === "P4"){
            $p4 = "selected";
        }
        elseif($classes === "P5"){
            $p5 = "selected";
        }
    }


//echo($p6);
    // soumet le form
    if(isset($_POST["nom"],$_POST["prenom"], $_POST["ad_rue"], $_POST["ad_num"], $_POST["ad_cp"], $_POST["ad_ville"], $_POST["date_naissance"], $_POST["classes"], $_GET["id"]))
    {
        $p = new Personne();
        $p->update($_GET["id"], $_POST["nom"],$_POST["prenom"], $_POST["ad_rue"], $_POST["ad_num"], $_POST["ad_cp"], $_POST["ad_ville"], $_POST["date_naissance"], $_POST["classes"]);
      header("Location:?section=admin");
      
    }

    require_once("view/page/admin.php");

    // appeler la vue
    require_once("view/page/personne/update.php");
?>