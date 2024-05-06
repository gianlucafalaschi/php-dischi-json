<?php
/* il contenuto (dati in formato json) di discs-list.json viene letto tramite la funzione file_get_contents() 
che restituisce una stringa  */
$discs_json = file_get_contents('discs-list.json');
/* il contenuto della stringa viene trasformato in un array associativo di PHP
tramite la funzione json_decode()  */
$discs = json_decode($discs_json, true);


/* indica che il contenuto inviato al client e' in formato json */
header('Content-Type: application/json');

/* prende struttura dati php e trasforma in json.
 Il contenuto di discs-list.json verra' mandato indietro al client come json*/

echo json_encode($discs);



?>