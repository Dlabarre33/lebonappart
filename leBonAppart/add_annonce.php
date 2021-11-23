<?php
$auth = true;
require 'database.php';
include_once "_head.php";
include_once "_navbar.php";


?>
<div class="container">
    <h1 class="text-center">Ajouter une annonce</h1>
    <form class="row g-3" action="add_annonce-post.php" method="post">

        <div class="col-12">
            <label for="titlte" class="form-label">Titre de l'annonnce</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="col-12">
            <div class="form-floating" class="form-label">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" style="height: 100px"></textarea>

            </div>
        </div>
        <div class="col-md-6">
            <label for="city" class="form-label">Ville</label>
            <input type="text" class="form-control" name="city" id="city">
        </div>
        <div class="col-md-2">
            <label for="postal_code" class="form-label">Code postal</label>
            <input type="number" class="form-control" name="postal_code" id="postal_code">
        </div>
        <div class="col-md-2">
            <label for="type" class="form-label">Type d'annonce : vente ou location</label>
            <input type="text" class="form-control" name="type" id="type">

        </div>
        <div class="col-md-2">
            <label for="price" class="form-label">Prix</label>
            <input type="number" class="form-control" name="price" id="price">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
    </form>
</div>

<?php
include "_footer.php";
?>