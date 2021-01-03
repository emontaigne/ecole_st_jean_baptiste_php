<?php 
    // verifie
    $etat="";
    if(isset($_POST['message'])){
      $entete  = 'MIME-Version: 1.0' . "\r\n";
      $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
      $entete .= 'From: ' . $_POST['mail'] . "\r\n";
      $dest = "mangbaujessica@hotmail.com";
      $sujet = "Message conçernant la garderie Ecole St Jean-Baptiste";
      $corp = '<html><head></head><body><h1>Message concernant la garderie Ecole St Jean-Baptiste</h1>
      <p><b>Nom et prénom du parent : </b>' . $_POST['nom'] . '<br>
      <p><b>Nom et classe : </b>' . $_POST['kid'] . '<br>
      <b>E-mail : </b>' . $_POST['mail'] . '<br>
      <b>Votre message : </b>' . $_POST['message']. '<br></p></body></html>';

      if (mail($dest, $sujet, $corp, $entete)) {
        $etat= 'Votre message a bien été envoyé.';
      } else {
        $etat='Erreur, réessayez';
      }
    }


    require_once("view/page/garderie.php");
?>