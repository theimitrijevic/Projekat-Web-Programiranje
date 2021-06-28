<?php 
include_once(dirname(dirname(__FILE__)) . "/config/config.php");
include_once(dirname(dirname(__FILE__)) . "/config/db.php");

/*
 * Return all screenings From the Database
 */
$sql_scr = "SELECT * FROM screenings INNER JOIN movies on screenings.movie_id = movies.movie_id";
$result_scr = mysqli_query($conn, $sql_scr);


/*
 * Return all movies From the Database
 */
$sql_mv = "SELECT * FROM movies";
$result_mv = mysqli_query($conn, $sql_mv);

/*
 *  Proccess the create form
 */
$time = "";
$price = null;
$movie_id = null;
if(isset($_POST["create_scr"])) {
    // Get data
    $time = $_POST["time"];
    $price = $_POST["price"];
    $movie_id = $_POST["movie_id"];

    if($stmt = $conn->prepare("INSERT INTO screenings (screening_time, screening_price, movie_id) VALUES (?, ?, ?)")) {
        $stmt->bind_param("sdi", $time, $price, $movie_id);
        $stmt->execute();
        $stmt->close();

        header("Location: ../auth/adminScreenings.php");
    }
}


/*
 * Delete the movie from db   
 */ 
if(isset($_GET["id"])) {  
    $sql = "DELETE FROM screenings WHERE screening_id = '" . $_GET["id"] . "'";
    $result = mysqli_query($conn, $sql);
    header("Location: ../views/auth/adminScreenings.php");
}