<div class = "container2">
    <div class="traiteurInfo">

    <div class="traiteur-texte">

    <h1>Service traiteur</h1>
<p >
 Depuis plusieurs années, un service traiteur offre le service de repas chauds aux élèves et au personnel de l'école.
<br>
Chaque jour de classe, une dizaine d’employés se déploient dans les cuisines, les salles de repas ainsi que sur la route afin que plus jamais, étudier le ventre vide ne soit une option.
</p>
<br>
<br>
<p >
Chaque élève reçoit tous les éléments essentiels pour un bon développement physique et intellectuel. Nous prenons une attention particulière afin d’inclure de nouveaux aliments sains et riches en nutriments. Tout est pensé de façon à faire prendre conscience aux élèves l’importance de prendre de bonnes habitudes alimentaires.
</p>
</div>
     
            
</div>
    <?php
    if(isset($_SESSION["login_admin"]))
    {
echo '<div class ="row">
    <form class="mainSettingsForm add newPage" action="" method="POST" enctype="multipart/form-data">
<input class="btnsend" type="file" name="image[]" multiple=""/>
<input class="btnsend" type="submit" value="Télécharger" name="submit" />
    </form>
</div>';
    }
?>
    <?php
    if(isset($_SESSION["login"]))
    {
echo 
'<div class="lienT">
   <a href="public/uploads/feuille_de_commande.jpg"
   download="feuille_de_commande">Télécharger la feuille de Commande</a><a href="public/uploads/menu.jpg"
   download="menu">Télécharger le menu</a></div>';
    }
   ?>

</div>