<?php 
  session_start();
  include_once(dirname(dirname(__FILE__)) . "/config/config.php");
  include_once(dirname(dirname(__FILE__)) . "/config/db.php");

  if(!isset($_SESSION["token"])) {
      header("Location: ../../index.php");
  }

?>
<!DOCTYPE html>
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

    <title>Admin Panel</title>
</head>
<body>
    <div class="container my-3">
        <h2>Admin Panel</h2>
        <h5><?php echo $_SESSION["token"] ?></h5>
        <div class="button">
            <a href="../../index.php" class="btn btn-outline-primary btn-sm mb-3">
                Go to Frontend
            </a>

            <a class="btn btn-danger btn-sm mb-3" href="logout.php">
                Logout
                <i class="fa fa-power-off"></i>
            </a>
        </div>
    </div>

