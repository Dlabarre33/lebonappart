<?php
$auth = true;
require "database.php";
include "_head.php";


?>

<main>

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Nos derniers biens disponibles</h1>
                <p class="lead text-muted">En location ou en achat.</p>
            </div>
        </div>
    </section>
    <?php
    include "_navbar.php";
    ?>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                //*boucle pour récupérer les annonces sur la BDD
                <?php
                foreach ($adverts as $advert) {
                ?>
                    <div class="col">

                        <div class="card shadow-sm">
                            <h1 class="card-title"><?php echo $advert['title']; ?></h1>
                            <div class="card-body">
                                <p class="card-text"><?php echo $advert['description']; ?></p>
                                <p class="card-text"><?php echo $advert['postal_code']; ?></p>
                                <p class="card-text"><?php echo $advert['city']; ?></p>
                                <p class="card-text"><?php echo $advert['price']; ?></p>
                                <p class="card-text"><?php echo $advert['type']; ?></p>
                            </div>
                        </div>

                    </div>
                <?php
                } ?>
            </div>

        </div>
    </div>


</main>
<?php


include "_footer.php";
?>