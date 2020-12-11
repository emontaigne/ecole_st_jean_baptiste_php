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
    $role="";

    // récupérer les personnes et afficher
    if(isset($_GET["id"]))
    {
        $id = $_GET["id"];

        $p = new Personne();
        $tabInfos = $p->readById($id);
        // var_dump($tabInfos);

        $nom = $tabInfos[0]["nom"];
        $prenom = $tabInfos[0]["prenom"];
        $dateNaissance = $tabInfos[0]["date_naissance"];
        $classes = $tabInfos[0]["classes"];
        $adRue = $tabInfos[0]["ad_rue"];
        $adNum = $tabInfos[0]["ad_num"];
        $adCp = $tabInfos[0]["ad_cp"];
        $adVille = $tabInfos[0]["ad_ville"];
        $role = $tabInfos[0]["role"];
    }
    // soumet le form
    if(isset($_POST["nom"],$_POST["prenom"], $_POST["date_naissance"], $_POST["classes"], $_POST["ad_rue"], $_POST["ad_num"], $_POST["ad_cp"], $_POST["ad_ville"], $_POST["role"], $_GET["id"]))
    {
        $p = new Personne();
        $p->update($_GET["id"], $_POST["nom"],$_POST["prenom"], $_POST["date_naissance"], $_POST["classes"], $_POST["ad_rue"], $_POST["ad_num"], $_POST["ad_cp"], $_POST["ad_ville"], $_POST["role"]);
        header("Location:?section=read");
    }


    // appeler la vue
    require_once("view/page/personne/update.php");
?>