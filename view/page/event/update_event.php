
<form action="#" method="post">
<h2 class = "ajout">Modifier les données</h2>
    <label for="date_event">Date: </label>
    <input type="text" name="date_event" id="date_event" class="date_event" value="<?= $dateEvent; ?>"><br>

    <label for="titre_event">Titre: </label>
    <input type="text" name="titre_event" id="titre_event" value="<?= $titreEvent; ?>"><br>

    <label for="contenu_event">Contenu: </label>
    <input type="text" name="contenu_event" id="contenu_event" value="<?= $contenuEvent; ?>"><br>

    <div class = "ajouter">
    <input type="submit" value="Modifier">
</div>

</form>
