<?php

session_start();

$PARAM_host = 'localhost';
$PARAM_db_name = 'cisco_tuto';
$PARAM_db_user = 'root';
$PARAM_db_pass = '';

try{
    $connexion = new PDO('mysql:host='.$PARAM_host.'; dbname='.$PARAM_db_name, $PARAM_db_user, $PARAM_db_pass);
}
catch(Exception $e){
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N°: '.$e->getCode();
}

?>
