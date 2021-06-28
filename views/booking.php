<?php
    $view = "Home";
    include_once("../inc/header.php");
    include_once("../controllers/screening_controller.php");
    include_once("../controllers/booking_controller.php");
?>

<div class="container my-4">
    <?php 
        echo isset($flash) ? $flash : "";
    ?>
    <h1>Booking</h1>
    <form action="booking.php" method="POST">
        <div class="form-group my-4">
            <label for="bname">Booking Name</label>
            <input type="text" name="bname" id="bname" class="form-control" placeholder="e.g. Dusan Dimitrijevic" required>
        </div>
        <div class="form-group my-4">
            <label for="scr">Movie Screening</label>
            <select name="scr" id="scr" class="form-control">
                <?php foreach($result_scr as $r) { ?>
                    <option value="<?php echo $r["movie_id"] ?>">
                        <?php echo $r["movie_title"] . " at " . $r["screening_time"] . "h - Price per ticket is $" . $r["screening_price"]?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group my-4">
            <label for="num_tickets">No. of Tickets</label>
            <input type="number" name="num_tickets" id="num_tickets" class="form-control" placeholder="e.g. 2" required>
        </div>
        <button class="btn btn-primary" type="submit" name="book_btn">Confirm</button>
    </form>
</div>

<?php
    include_once("../inc/footer.php");
?>
