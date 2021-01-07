<?php
include("../../model/Event.php");
$p = new Event();
$events = $p->read();
header('Content-Type: application/json');
echo(json_encode($events));

?>