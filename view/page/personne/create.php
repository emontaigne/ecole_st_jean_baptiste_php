<div class = "container2">
<div class= studentCreateForm>
<form action="#" method="post" class="form-new-student" >
<h2 class = "ajout">Ajouter un étudiant</h2>
    <label for="nom">Nom :</label>
    <input class="inputStudent1" type="text" name="nom" id="nom" ><br>

    <label for="prenom">Prénom :</label>
    <input class="inputStudent2" type="text" name="prenom" id="prenom" ><br>



    <!--<label for="ad_num">Mot de passe :</label>
    <input type="Password" name="ad_num" id="ad_num"><br> -->

    <label for="ad_rue">Rue :</label>
    <input class="inputStudent3" type="text" name="ad_rue" id="ad_rue" ><br>

    <label for="ad_num">Numéro :</label>
    <input class="inputStudent4" type="text" name="ad_num" id="ad_num" ><br>

    <label for="ad_cp">Code postal :</label>
    <input class="inputStudent5" type="number" name="ad_cp" id="ad_cp"  min="1000" max="9999"><br>


    <label for="ad_ville">Ville :</label>
    <input class="inputStudent6" type="text" name="ad_ville" id="ad_ville"><br>


    <label for="date_naissance">Date de naissance :</label>
    <input class="inputStudent7" type="text" name="date_naissance" id="date_naissance" ><br><br>

    <label for="classes">Classe :</label>
    <select class="inputStudent8" name="classes" id="classes" >
        <option value="" selected="selected">- Sélectionner une classe -</option>
        <option value="Accueil">Accueil</option>
        <option value="M1">M1</option>
        <option value="M2">M2</option>
        <option value="M3">M3</option>
        <option value="P1">P1</option>
        <option value="P2">P2</option>
        <option value="P3">P3</option>
        <option value="P4">P4</option>
        <option value="P5">P5</option>
        <option value="P6">P6</option>
    </select><br><br>

      
    <div class = "ajouter">
    <button class="createPS" id=createPS type="submit" value="Ajouter"><div><img class = "agenda_send" src = 'public/images/send.png'></div></button>
</div>
</form>
</div>
<script src = "public/js/menu-actif.js"></script>