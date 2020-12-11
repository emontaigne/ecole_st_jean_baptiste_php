<div class="container5">

<form action="#" method="post">
<h2 class="ajout1">Etes vous sûr(e) de vouloir supprimer <?= $nom; ?> <?= $prenom ?> ?</h2>
    <input type="hidden" name="id" value="<?= $id; ?>">
    <input type="submit" value="Oui">
    <a href="?section=read">Non</a>
</form>
</div>