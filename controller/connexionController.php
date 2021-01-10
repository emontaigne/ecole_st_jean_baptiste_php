<?php 
$login="";
$mdp="";
$p = new Personne();


    if(isset($_POST["login"], $_POST["mdp"]))
    {
        if(trim($_POST["login"]) !== "" && trim($_POST["mdp"]) !== "")
        {        $tabPersonnes = $p ->readConnexion($_POST["login"]);
           // var_dump($tabPersonnes);
            echo $_POST["login"];
            $mdp = $tabPersonnes[0]["mdp"];
            echo $mdp;
            $mdpCrypte = password_hash($_POST["mdp"], PASSWORD_DEFAULT);
            echo $_POST["mdp"];
            echo $mdpCrypte;

           if (password_verify($_POST["mdp"],$mdp)){
                
                $_SESSION["login"] = $_POST["login"];
                $_SESSION["nom"] = $_POST["nom"];
                $_SESSION["prénom"] = $_POST["prénom"];
                header("Location:?section=parents");
           }
                elseif($_POST["login"] === "admin" && $_POST["mdp"] === "jeromedb")
                {
                    $_SESSION["login_admin"] = "admin";
                    header("Location:?section=admin");
                    

            }else{
                echo "Ce n'est pas le bon mot de passe et/ou login";
            }
                    }
    }
require_once("view/page/connexion.php");

?>

