<?php 
    // récupérer les personnes et afficher
    if(isset($_POST["nom"],$_POST["prenom"],$_POST["ad_rue"],$_POST["ad_num"],$_POST["ad_cp"],$_POST["ad_ville"],$_POST["date_naissance"],$_POST["classes"]))
    {
        $p = new Personne();
        $p->create($_POST["nom"],$_POST["prenom"],$_POST["ad_rue"],$_POST["ad_num"],$_POST["ad_cp"],$_POST["ad_ville"],$_POST["date_naissance"],$_POST["classes"]);
       //header("Location:?section=admin");
        
    }
//echo($_POST["nom"]);
        //echo($_POST["prenom"]);
        
    // appeler la vue
    require_once("view/page/personne/create.php");require_once("view/page/admin.php");
?>