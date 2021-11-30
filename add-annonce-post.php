<?php

require './includes/database.php';





// //*1 Traitement et assainissement des valeurs des inputs
if (empty($_POST['title']) || empty($_POST['description']) || empty($_POST['postal_code']) || empty($_POST['city']) || empty($_POST['type']) || empty($_POST['price'])) {
    header('Location:add-annonce.php?error=missingInput');
    exit();
} else {

    $title = htmlspecialchars(trim($_POST['title']));
    $description = htmlspecialchars(trim($_POST['description']));
    $postal_code = intval(htmlspecialchars(trim($_POST['postal_code'])));
    $city = htmlspecialchars(trim($_POST['city']));
    $type = htmlspecialchars(trim($_POST['type']));
    $price = intval(htmlspecialchars(trim($_POST['price'])));
}

//!Méthode preparé pour inserer les données du formulaire dans la BDD
try {
    $sqlInsert = 'INSERT INTO advert (title,description,postal_code,city,type,price,reservation_message) VALUES (:title,:description,:postal_code,:city,:type,:price,:reservation_message)';

    $reqInsert = $connexion->prepare($sqlInsert);
    $reqInsert->bindValue(':title', $title, PDO::PARAM_STR);
    $reqInsert->bindValue(':description', $description, PDO::PARAM_STR);
    $reqInsert->bindValue(':postal_code', $postal_code, PDO::PARAM_INT);
    $reqInsert->bindValue(':city', $city, PDO::PARAM_STR);
    $reqInsert->bindValue(':type', $type, PDO::PARAM_STR);
    $reqInsert->bindValue(':price', $price, PDO::PARAM_INT);
    $reqInsert->bindValue(':reservation_message', $reservation_messsage, PDO::PARAM_STR);

    $reqInsert->execute();
    header('Location:add-annonce.php?success=insert');
} catch (PDOException $e) {
    echo $e->getMessage();
}
