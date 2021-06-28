<?php
    $view = "Admin Panel";
    include_once("../inc/header.php");
?>

<h1 class="text-center my-2"><?php echo "Welcome, " . $_SESSION["email"]; ?></h1>


<?php
    include_once("../inc/footer.php");
?>

