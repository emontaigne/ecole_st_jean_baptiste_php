<?php
include("../../model/Event.php");
$p = new Event();
$p->update($_POST["id"],$_POST["date"],$_POST["titre"],$_POST["contenu"]);
header('Content-Type: application/json');
echo(json_encode(array('status' => 'ok')));
?>