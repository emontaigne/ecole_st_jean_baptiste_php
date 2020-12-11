<?php 
    // supprimer la variable de session nom
    unset($_SESSION["login"]);
    //unset($_SESSION["nbTentatives"]);
    // supprimer la session
    session_destroy();
    // rediriger
    header("Location:?section=connexion");
?>