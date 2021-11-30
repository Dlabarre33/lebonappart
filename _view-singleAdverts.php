<?php

$id = $_GET['id'];
echo "Bonjour";
//? Version préparée 
$viewAdvert = "SELECT * from advert WHERE advert_id = :advert_id";
$reqViewAdvert = $connexion->prepare($viewAdvert);
$reqViewAdvert->bindValue(':advert_id', $id);
$reqViewAdvert->execute();
$advert = $reqViewAdvert->fetch();

echo '<pre>';
print_r($advert);
echo '</pre>';

if (empty($viewAdvert)) {
    echo "Erreur";
    echo '<meta http-equiv="refresh" content="0;URL=viewAll-annonces.php?error=noId">';
    exit();
}
// echo '<pre>';
// print_r($advert);
// echo '</pre>';
