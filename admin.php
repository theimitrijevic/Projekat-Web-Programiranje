<?php
    $view = "Admin";
    include_once("./inc/header.php");
    include_once("./controllers/login_controller.php");
?>

<div class="container my-3">
    <h1 class="mb-4">Login</h1>
    <form action="admin.php" method="POST">
        <div class="form-group my-2">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group my-2">
            <label for="pass">Password</label>
            <input type="password" id="pass" name="pass" class="form-control" required>
            <p class="text-danger">
                <?php if(in_array("User does not exist", $error_array)){
                    echo "User does not exist";
                } else {
                    echo "";
                }  
                
                ?>
            </p>
        </div>
        <p class="tos">
            <h5 class="text-danger">Warning!</h5>
            This page is only meant for the administrators of ths web site, if you came here by accident, please close this page.
        </p>

        <button type="submit" name="login_btn" id="login_btn" class="btn btn-primary my-3 mb-5">Login</button>
    </form>
</div>

<?php
    include_once("./inc/footer.php");
?>
