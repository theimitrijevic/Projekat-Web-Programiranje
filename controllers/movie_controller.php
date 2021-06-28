<?php

include_once(dirname(dirname(__FILE__)) . "/config/config.php");
include_once(dirname(dirname(__FILE__)) . "/config/db.php");

/*
 * Return all movies From the Database
 */
$sql_all = "SELECT * FROM movies";
$result = mysqli_query($conn, $sql_all);

/*
 * Proccess the Create form
 */
$title = "";
$desc = "";
$rating = "";
$error_array = [];

if(isset($_POST["movie_create"])) {
    // Title
    $title = filter_var($_POST["title"], FILTER_SANITIZE_STRING);
    $title = strip_tags($title);
    $_SESSION["title"] = $title;

    // Desc
    $desc = filter_var($_POST["desc"], FILTER_SANITIZE_STRING);
    $desc = strip_tags($desc);
    $_SESSION["desc"] = $desc;

    // Rating
    $rating = filter_var($_POST["rating"], FILTER_SANITIZE_STRING);
    $rating = strip_tags($rating);
    $_SESSION["rating"] = $rating;


    // Check if the movie exists
    if($stmt = $conn->prepare("SELECT * FROM movies WHERE movie_title = ?")) {
        $stmt->bind_param("s", $title);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            array_push($error_array, "Movie is already created.");
        }
        $stmt->close();
    } 

    // Insert into db
    if(empty($error_array)) {
        if($stmt = $conn->prepare("INSERT INTO movies (movie_title, movie_desc, movie_rating) VALUES (?, ?, ?)")) {
            $stmt->bind_param("sss", $title, $desc, $rating);
            $stmt->execute();
            $stmt->close();

            header("Location: ./adminMovies.php");
        }
    }
}

/*
 * Delete the movie from db   
 */ 
if(isset($_GET["id"])) {  
    $sql = "DELETE FROM movies WHERE movie_id = '" . $_GET["id"] . "'";
    $result = mysqli_query($conn, $sql);
    header("Location: ../views/auth/adminMovies.php");
}