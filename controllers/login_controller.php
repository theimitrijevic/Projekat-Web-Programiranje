<?php
// Data
$email = "";
$pass = "";
$error_array = [];
// If login button is clicked
if(isset($_POST["login_btn"])){
    // Get form data
    $email = $_POST["email"];
    $_SESSION["email"] = $email;

    $pass = $_POST["pass"];

    if($stmt = $conn->prepare("SELECT * FROM users WHERE user_email = ? AND user_pass = ?")) {
        $stmt->bind_param("ss", $email, $pass);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows == 0) {
           array_push($error_array, "User does not exist");
        } else {
            $_SESSION["token"] = $email;
            header("Location: ../views/auth/adminPanel.php");
        }
        $stmt->close();
    }

}
