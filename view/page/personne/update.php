<div class = "container2">
<div class="studentCreateForm">
<form action="#" method="post" class="form-new-student">
<h2 class = "ajout">Modifier les données</h2>
    <label for="nom">Nom :</label>
    <input class="inputStudent1" type="text" name="nom" id="nom" value="<?= $nom; ?>"><br>

    <label for="prenom">Prénom :</label>
    <input class="inputStudent2" type="text" name="prenom" id="prenom" value="<?= $prenom; ?>"><br>

    <label for="ad_rue">Rue :</label>
    <input class="inputStudent3" type="text" name="ad_rue" id="ad_rue" value="<?= $adRue; ?>"><br>

    <label for="ad_num">Numéro :</label>
    <input class="inputStudent4" type="text" name="ad_num" id="ad_num" value="<?= $adNum; ?>"><br>

    <label for="ad_cp">Code postal :</label>
    <input class="inputStudent5" type="number" name="ad_cp" id="ad_cp" min="1000" max="9999" value="<?= $adCp; ?>"><br>

    <label for="ad_ville">Ville :</label>
    <input class="inputStudent6" type="text" name="ad_ville" id="ad_ville" value="<?= $adVille; ?>"><br>

    <label for="date_naissance">Date de naissance :</label>
    <input class="inputStudent7" type="text" name="date_naissance" id="date_naissance" value="<?= $dateNaissance; ?>"><br>

    <label for="classes">Classe :</label>
    <select class="inputStudent8" name="classes" id="classes" value="<?= $classes; ?>">
        <option value=""></option>
        <option value="accueil" <?= $accueil; ?> >Accueil</option>
        <option value="m1" <?= $m1; ?> >M1</option>
        <option value="m2" <?= $m2; ?> >M2</option>
        <option value="m3" <?= $m3; ?> >M3</option>
        <option value="p1" <?= $p1; ?> >P1</option>
        <option value="p2" <?= $p2; ?> >P2</option>
        <option value="p3" <?= $p3; ?> >P3</option>
        <option value="p4" <?= $p4; ?> >P4</option>
        <option value="p5" <?= $p5; ?> >P5</option>
        <option value="p6" <?= $p6; ?> >P6</option>
    </select><br>


    <div class = "ajouter">
    <input class="btnsend" type="submit" value="Modifier">
</div>

</form>
</div>
<script src = "public/js/menu-actif.js"></script>