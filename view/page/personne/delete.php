<div class = "container2">
<div id = "form_add" class="form_event">

<form action="#" method="post">
    <div class="demDupp">
<h2 class="ajout1">Etes vous sûr(e) de vouloir supprimer <?= $nom; ?> <?= $prenom ?> ?</h2>
    <input type="hidden" name="id" value="<?= $id; ?>">
    <input class="btnsend" type="submit" value="Oui">
    <button class="btnsend"><a  href="?section=read">Non</a></button>
    </div>
</form>
</div>
<script src = "public/js/menu-actif.js"></script>