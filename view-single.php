<?php
$auth = true;
require './includes/database.php';
include_once '_view-single.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title><?php echo htmlspecialchars_decode(strtoupper($viewAdvert['title'])); ?></title>
</head>

<body>
    <?php
    require 'public/navbar.php';
    ?>

    <!-- Conteneur -->
    <div class="container">
        <?php
        include_once '_view-single.php';

        ?>
        <!-- Consulter les annonce -->
        <h1><?php echo htmlspecialchars_decode(strtoupper($viewAdvert['title'])); ?></h1>

        <div class="row">

            <div class="col-sm-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Titre : <?php echo htmlspecialchars_decode(strtoupper($viewAdvert['title'])); ?></h3>
                        <p class="card-text">Description : <?php echo $viewAdvert['description']; ?></p>
                        <p class="card-text">Code postal : <?php echo $viewAdvert['postal_code']; ?></p>
                        <p class="card-text">Ville : <?php echo $viewAdvert['city']; ?></p>
                        <p class="card-text">Type de transaction : <?php echo $viewAdvert['type']; ?></p>
                        <p class="card-text">Référence de l'annonce : <?php echo $viewAdvert['id']; ?></p>
                        <h6 class="card-text">Prix en € : <?php echo $viewAdvert['price']; ?></h6>
                        <a href="#" class="btn btn-primary">Reserver</a>
                        <a href="views-annonces.php" class="btn btn-primary">Revenir à l'accueil</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>