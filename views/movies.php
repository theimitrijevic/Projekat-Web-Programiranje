<?php
    $view = "Home";
    include_once("../inc/header.php");
    include_once("../controllers/movie_controller.php");
?>

<div class="container">
    <h1>Movies</h1>
    <div class="row">
        <?php foreach($result as $r) { ?>
            <div class="col-md-4">
                <div class="card my-2" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $r["movie_title"] ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo "Rated " . $r["movie_rating"] ?></h6>
                        <p class="card-text"><?php echo $r["movie_desc"] ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php
    include_once("../inc/footer.php");
?>
