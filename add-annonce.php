<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Ajouter une annonce</title>
</head>

<body>
    <?php
    require 'public/navbar.php';
    ?>

    <!-- Conteneur -->
    <div class="container">
        <!-- Formulaire -->
        <h1>Ajouter une annonce</h1>
        <form action="add-annonce-post.php" method="post">
            <div class="mb-3">
                <label for="title" class="form-label">Titre de l'annonce</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="title" required>
            </div>
            <div class="mb-3">
                <label for="description">Description</label>
                <textarea class="form-control" placeholder="Description du bien" name="description" id="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="postal_code" class="form-label">Code postal</label>
                <input type="number" class="form-control" name="postal_code" id="postal_code" aria-describedby="postal_code" required>
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">Ville</label>
                <input type="text" class="form-control" name="city" id="city" aria-describedby="city" required>
            </div>
            <div class="mb-3">
                <label for="type">Type d'annonce</label>
                <select name="type" id="type" class="form-select" required>
                    <option value="Location">Location</option>
                    <option value="Vente">Vente</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prix</label>
                <input type="number" class="form-control" name="price" id="price" aria-describedby="price">
            </div>

            <input type="submit" class="btn btn-primary" value="Envoyer"></input>
        </form>
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