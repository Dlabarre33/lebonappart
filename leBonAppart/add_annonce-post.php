<?php
require 'includes/database.php';

//* Traitement et assainissement des valeurs des inputs

if (empty($_POST['title']) || empty($_POST['description']) || empty($_POST['city']) || empty($_POST['postal_code']) || empty($_POST['type']) || empty($_POST['price'])) {
    header('Location:add_annonce.php?error=missingInput');
    exit();
} else {
    $title = htmlspecialchars(strtoupper($_POST['title']));
    $description = htmlspecialchars(trim($_POST['description']));
    $city = htmlspecialchars(trim($_POST['city']));
    $postal_code = htmlspecialchars(intval($_POST['postal_code']));
    $type = htmlspecialchars(trim($_POST['type']));
    $price = htmlspecialchars(intval($_POST['price']));
}

//!Méthode preparé pour inserer les données du formulaire dans la BDD
try {
    $sqlInsert = 'INSERT INTO advert (title,description,city,postal_code,type,price) VALUES (:title,:description,:city,:postal_code,:type,:price)';

    $reqInsert = $db->prepare($sqlInsert);
    $reqInsert->bindValue(':title', $title, PDO::PARAM_STR);
    $reqInsert->bindValue(':description', $description, PDO::PARAM_STR);
    $reqInsert->bindValue(':city', $city, PDO::PARAM_STR);
    $reqInsert->bindValue(':postal_code', $postal_code, PDO::PARAM_INT);
    $reqInsert->bindValue(':type', $type, PDO::PARAM_INT);
    $reqInsert->bindValue(':price', $price, PDO::PARAM_INT);

    $reqInsert->execute();
    header('Location:add_annonce.php?success=insert');
} catch (PDOException $e) {
    echo $e->getMessage();
}
