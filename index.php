<?php 
    ob_start();
    session_start();
    require_once("model/Personne.php");
    require_once("model/Connexion.php");// pour pouvoir créer des variables de session
    require_once("view/html/head.php");// pour pouvoir utiliser header()
    require_once("view/menu/menu.php");

    require_once("controller/router.php");


    require_once("view/html/footer.php");
?>