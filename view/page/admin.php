
<div class="backAdmin">
        <div class="containerAdmin">
                <div class="adminP">
        <h1 class="page-admin-texte titre-admin">Bienvenue dans l'espace admin</h1>
        <p class="page-admin-texte">Vous pouvez dès maintenant gérer l'ajout, la suppréssion ou la modification des élèves dans la base de données. 
        <br>Vous trouverez ci-dessous les liens qui vous mèneront vers la section adéquate. 
        </p>
</div>
        <div class="adminPartFlex">
        <div class="adminBtnAfficher">
        <button class = "section btnAdmin" id="adminBtnAfficher" ><a class = "section1" href="?section=read"><div class="admin-tile">Afficher</div></a></button>
</div>
                
        
        <div class="adminBtnAjouter">
        <button onclick="myFunction()" class = "section btnAdmin" id="adminBtnAjouter"><a  class = "section1" href="?section=create"><div class="admin-tile">Ajouter</div></a></button>
                <div class="formCreateDiv" id="myDIV" style="display: none;" >
        <?php
        
        require("view/page/personne/create.php");
  
        ?>
        
        </div>
      
</div>
        </div>

        </div>
        


</div>

<script src = "public/js/admin.js"></script>


