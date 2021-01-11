<div class = "container2">
<div id = "form_add" class="form_event">

<form id="delete_form" action="#" method="post">
<h2 class="ajout1">Etes vous sûr(e) de vouloir supprimer <?= $dateEvent; ?> <?= $titreEvent ?> ?</h2>
    <input type="hidden" name="id" value="<?= $id; ?>">
    <input id="delete_submit" class='delete_submit' type="submit" value="Oui">
    <a href="?section=accueil">Non</a>
</form>
</div>
<script src = "public/js/menu-actif.js"></script>