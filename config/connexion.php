<?php

session_start();

function connexionBD()
{

    $PARAM_host = 'localhost';
    $PARAM_db_name = 'cisco';
    $PARAM_db_user = 'php';
    $PARAM_db_pass = 'Kf2aqybz()';

    try {
        $connexion = new PDO('mysql:host=' . $PARAM_host . '; dbname=' . $PARAM_db_name, $PARAM_db_user, $PARAM_db_pass);
    } catch (Exception $e) {
        echo 'Erreur : ' . $e->getMessage() . '<br />';
        echo 'N°: ' . $e->getCode();
    }
    return $connexion;
}

?>
