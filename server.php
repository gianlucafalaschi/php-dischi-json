<?php
$discs_json = file_get_contents('discs-list.json');
$discs = json_decode($discs_json, true);

header('Content-Type: application/json');
/* prende struttura dati php e trasforma in json */
echo json_encode($discs);



?>