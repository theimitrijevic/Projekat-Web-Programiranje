<?php 
include_once(dirname(dirname(__FILE__)) . "/config/config.php");
include_once(dirname(dirname(__FILE__)) . "/config/db.php");

/*
 * Return all screenings From the Database
 */
$sql_book = "SELECT * FROM bookings INNER JOIN (screenings INNER JOIN movies on screenings.movie_id = movies.movie_id) on bookings.screening_id = screenings.screening_id";
$result_book = mysqli_query($conn, $sql_book);


/*
 *  Proccess the create form
 */
$name = "";
$num_tickets = null;
$book_price = null;
$screening_id = null;

if(isset($_POST["book_btn"])) {
    $name = filter_var($_POST["bname"]);
    $screening_id = $_POST["scr"];
    $num_tickets = filter_var($_POST["num_tickets"]);

    // Get the booking price
    $get_price = "SELECT * FROM screenings WHERE screening_id = '$screening_id'";
    $res = mysqli_query($conn, $get_price);

    foreach($res as $r) {
        $book_price =  $r["screening_price"] * $num_tickets;
    }

    // Insert into db
    if($stmt = $conn->prepare("INSERT INTO bookings(booking_name, booking_seats, booking_price, screening_id) VALUES (?, ?, ?, ?)")) {
        $stmt->bind_param("siii", $name, $num_tickets, $book_price, $screening_id);
        $stmt->execute();
        $stmt->close();

        // Create a flash session
        $flash = '<div class="alert alert-success" role="alert">Your ticket/s are booked! Please pick up your ticket/s in cinema, at least 30 minutes before the movie starts!</div>';
    }

}
/*
 * Delete the movie from db   
 */ 
if(isset($_GET["id"])) {  
    $sql = "DELETE FROM bookings WHERE booking_id = '" . $_GET["id"] . "'";
    $result = mysqli_query($conn, $sql);
    header("Location: ../views/auth/adminPanel.php");
}