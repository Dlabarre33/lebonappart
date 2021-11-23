<?php

require 'dev.env.php';
try {
    $dbString = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME;
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ];
    $db = new PDO($dbString, USER, PASS, $options);
} catch (PDOException $erreur) {
    echo $erreur->getMessage();
}
