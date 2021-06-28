<?php 
  session_start();
  include_once(dirname(dirname(__FILE__)) . "/config/config.php");
  include_once(dirname(dirname(__FILE__)) . "/config/db.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <!-- Custom CSS -->
    <link rel="stylesheet" href="../public/css/style.css">

    <title><?php echo APP_NAME . " | " . $view ?></title>
  </head>
  <body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php APP_NAME ?>/index.php">Bioskop <i class="fa fa-popcorn text-danger"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo APP_URL; ?>index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo APP_URL; ?>views/contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo APP_URL; ?>views/booking.php">Booking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo APP_URL; ?>views/movies.php">Movies</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



 