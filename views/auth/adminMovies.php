<?php
    include_once("../../inc/admin-header.php");
    include_once("../../controllers/movie_controller.php");
?>

<div class="container my-3">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="adminPanel.php">Bookings</a>
        </li> 
        <li class="nav-item">
            <a class="nav-link active" href="#">Movies</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="adminScreenings.php">Screenings</a>
        </li>
    </ul>
</div>   
<div class="container my-3">
    <table class="table table-bordered">
        <thead>
            <th>Id</th>
            <th>Title</th>
            <th>Rated</th>
            <th></th>
        </thead>
        <tbody>
           <?php foreach($result as $r) { ?>
                <tr>
                    <td><?php echo $r["movie_id"]?></td>
                    <td><?php echo $r["movie_title"]?></td>
                    <td><?php echo $r["movie_rating"]?></td>
                    <td>
                        <a href="<?php echo APP_URL; ?>controllers/movie_controller.php?id=<?php echo $r["movie_id"] ?>" class="btn btn-danger btn-sm">
                            Delete
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
           <?php } ?>
        </tbody>
    </table>

    <h2>Add new Movie</h2>
    <form action="adminMovies.php" method="POST">
        <div class="form-group my-2">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" placeholder="eg. Samurai Cop 2" required>
        </div>
        <div class="form-group my-2">
            <label for="desc">Description</label>
            <textarea name="desc" id="" cols="30" rows="10" class="form-control" required></textarea>
        </div>
        <div class="form-group my-2">
            <label for="rating">Rating</label>
            <input type="text" id="rating" name="rating" class="form-control" placeholder="eg. R or PG-13 ..." required>
        </div>
        <b>
            <p class="text-danger">
                <?php
                    if(in_array("Movie is already created.", $error_array)) {
                        echo "Movie is already created.";
                    }
                ?>
            </p>
        </b>
        <button type="submit" class="btn btn-primary my-2" name="movie_create">Create</button>
    </form>
</div>


<?php
    include_once("../../inc/admin-footer.php");
?>


