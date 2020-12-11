<?php 
    // récupérer les personnes et afficher
    $p = new Personne();
    $tabPersonnes = $p->read();
    // var_dump($tabPersonnes);
    // générer le tableau html
    $table = "";
    $table .= "<tr><th>Nom</th><th>Prénom</th><th>Classes</th><th>Modifier</th><th>Supprimer</th></tr>";
    foreach ($tabPersonnes as $value) {
        $tr = "<tr>";
        $tr .= "<td class = 'nom'>" . $value["nom"] . "</td>";
        $tr .= "<td class = 'nom'>" . $value["prenom"] . "</td>";
        $tr .= "<td class = 'nom'>" . $value["classes"] . "</td>";
        $tr .= "<td class = 'nom'><a class='icon1' href='?section=update&id=". $value["id"]."'><i class='fas fa-pencil-alt'></i></a></td>";
        $tr .= "<td class = 'nom'><a class='icon1' href='?section=delete&id=". $value["id"]."'><i class='fas fa-trash-alt'></i></a></td>";
        $tr .= "</tr>";
        $table .= $tr;
        //var_dump($value);
    }


    // appeler la vue
    require_once("view/page/personne/read.php");
?>