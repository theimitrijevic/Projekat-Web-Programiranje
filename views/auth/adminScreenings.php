<?php
    include_once("../../inc/admin-header.php");
    include_once("../../controllers/screening_controller.php");
?>

<div class="container my-3">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="adminPanel.php">Bookings</a>
        </li> 
        <li class="nav-item">
            <a class="nav-link" href="adminMovies.php">Movies</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Screenings</a>
        </li>
    </ul>
</div>
<div class="container">
    <table class="table table-bordered">
        <thead>
            <th>Id</th>
            <th>Movie</th>
            <th>Time</th>
            <th>Price per ticket</th>
            <th></th>
        </thead>
        <tbody>
            <?php foreach($result_scr as $r) { ?>
                <tr>
                    <td><?php echo $r["screening_id"] ?></td>
                    <td><?php echo $r["movie_title"] ?></td>
                    <td><?php echo $r["screening_time"] . "h" ?></td>
                    <td><?php echo "$" . $r["screening_price"] ?></td>
                    <td>
                        <a href="<?php echo APP_URL ?>controllers/screening_controller.php?id=<?php echo $r["screening_id"] ?>" class="btn btn-danger btn-sm">
                            Delete
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <h2>Add new Screening</h2>
    <form action="adminScreenings.php" method="POST">
        <div class="form-group my-2">
            <label for="time">Time</label>
            <input type="text" class="form-control" name="time" id="time" placeholder="eg. 14.50" required>
        </div>
        <div class="form-group my-2">
            <label for="price">Price per ticket</label>
            <input type="number" step="0.01" class="form-control" name="price" id="price" placeholder="eg. 5.99" required>
        </div>
        <div class="form-group my-2">
            <label for="movie_id">Movie</label>
            <select name="movie_id" id="movie_id" class="form-control">
                <?php foreach($result_mv as $r) { ?>    
                    <option value="<?php echo $r["movie_id"]?>"><?php echo $r["movie_title"]?></option>
                <?php } ?>    
            </select>
        </div> 
        <button type="submit" class="btn btn-primary my-2" name="create_scr">Create</button>
    </form>
</div>


<?php
    include_once("../../inc/admin-footer.php");
?>


