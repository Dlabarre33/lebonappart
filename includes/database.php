<?php

require 'dev.env.php';

try {
    $connexion_string = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME;
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ];
    $connexion = new PDO($connexion_string, USER, PASSWORD, $options);

    echo 'Connexion établi';
} catch (PDOException $erreur) {
    echo $erreur->getMessage();
}
