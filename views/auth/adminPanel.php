<?php
    $view = "Admin Panel";
    include_once("../../inc/admin-header.php");
    include_once("../../controllers/booking_controller.php");
?>

<div class="container my-3">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="#">Bookings</a>
        </li> 
        <li class="nav-item">
            <a class="nav-link" href="adminMovies.php">Movies</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="adminScreenings.php">Screenings</a>
        </li>
    </ul>
</div>
<div class="container">
    <table class="table table-bordered">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Movie</th>
            <th>No. of seats</th>
            <th>Price</th>
            <th></th>
        </thead>
        <tbody>
            <?php foreach($result_book as $r) { ?>
            <tr>
                <td><?php echo $r["booking_id"] ?></td>
                <td><?php echo $r["booking_name"] ?></td>
                <td><?php echo $r["movie_title"] ?></td>
                <td><?php echo $r["booking_seats"] ?></td>
                <td><?php echo "$" . $r["booking_price"] ?></td>
                <td>
                    <a href="<?php echo APP_URL; ?>controllers/booking_controller.php?id=<?php echo $r["booking_id"] ?>" class="btn btn-primary btn-sm">
                        Complete
                        <i class="fa fa-check"></i>
                    </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


<?php
    include_once("../../inc/admin-footer.php");
?>


