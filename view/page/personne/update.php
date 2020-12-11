<div class="container5">
<form action="#" method="post">
<h2 class = "ajout">Modifier les données</h2>
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" value="<?= $nom; ?>"><br>

    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" value="<?= $prenom; ?>"><br>

    <label for="ad_rue">Date de naissance :</label>
    <input type="text" name="date_naissance" id="date_naissance" value="<?= $dateNaissance; ?>"><br>

    <label for="classes">Classe :</label>
    <select name="classes" id="classes" value="<?= $classes; ?>">
        <option value=""></option>
        <option value="accueil" >Accueil</option>
        <option value="m1" >M1</option>
        <option value="m2" >M2</option>
        <option value="m3" >M3</option>
        <option value="p1" >P1</option>
        <option value="p2" >P2</option>
        <option value="p3" >P3</option>
        <option value="p4" >P4</option>
        <option value="p5" >P5</option>
        <option value="p6" >P6</option>
    </select><br>

    <label for="ad_rue">Rue :</label>
    <input type="text" name="ad_rue" id="ad_rue" value="<?= $adRue; ?>"><br>

    <label for="ad_num">Numéro :</label>
    <input type="text" name="ad_num" id="ad_num" value="<?= $adNum; ?>"><br>

    <label for="ad_cp">Code postal :</label>
    <input type="number" name="ad_cp" id="ad_cp" min="1000" max="9999" value="<?= $adCp; ?>"><br>

    <label for="ad_ville">Ville :</label>
    <input type="text" name="ad_ville" id="ad_ville" value="<?= $adVille; ?>"><br>

    <div class = "ajouter">
    <input type="submit" value="Modifier">
</div>

</form>
</div>