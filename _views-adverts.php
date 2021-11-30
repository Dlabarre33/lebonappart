<?php


//* Version preparée : Récupération des données de advert
$viewAdverts = "SELECT * FROM advert";
$reqViewAdverts = $connexion->query($viewAdverts);
$adverts = $reqViewAdverts->fetchAll();
