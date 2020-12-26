<?php 
  // verifie

    // configuration smtp/server -> https://waytolearnx.com/2020/01/comment-configurer-wampserver-pour-envoyer-un-mail-depuis-localhost-en-php.html
    $etat="";
    if(isset($_POST['message'])){
      $entete  = 'MIME-Version: 1.0' . "\r\n";
      $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
      $entete .= 'From: ' . $_POST['mail'] . "\r\n";
      $dest = "mangbaujessica@hotmail.com";
      $sujet = "Message envoyé depuis la page de contact Ecole St Jean-Baptiste";
      $corp = '<html><head></head><body><h1>Message envoyé depuis la page Contact Ecole St Jean-Baptiste</h1>
      <p><b>Nom : </b>' . $_POST['nom'].' '. $_POST['prenom'] . '<br>
      <b>E-mail : </b>' . $_POST['mail'] . '<br>
      <b>Votre message : </b>' . $_POST['message']. '<br>
      <b>Téléphone : </b>' . $_POST['phone'] . '</p></body></html>';

      if (mail($dest, $sujet, $corp, $entete)) {
        $etat= 'Votre message a bien été envoyé.';
      } else {
        $etat='Erreur, réessayez';
      }
    }
    require_once("view/page/contact.php");
?>
