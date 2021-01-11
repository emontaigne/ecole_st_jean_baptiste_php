<div class = "container2">
    <div class="traiteurInfo">
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
'<div class="lienT"><a href="public/uploads/menu.jpg"
   download="menu">Télécharger le menu</a>
   <a href="public/uploads/feuille_de_commande.jpg"
   download="feuille_de_commande">Télécharger la feuille de Commande</a></div>';
    }
   ?>

</div>