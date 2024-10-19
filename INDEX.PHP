<?php   
// Include function page
include_once('LIB/FUNCTIONS/userFunction.php'); // Changed backslashes to forward slashes for compatibility

// Handle the login functionality
if (isset($_POST['btnLogin'])) {
    // Make sure the form data is available and sanitized
    $result = Authentication($_POST['user_name'], $_POST['user_pass']);
    echo $result;
}
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Bootstrap CSS for styling and responsive design -->
    <link rel="stylesheet" href="CSS/bootstrap/css/bootstrap.min.css">
</head>
<body style="background-image: url('IMAGES/Background.jpg'); background-size: cover;">
    
    <!-- Main container for layout -->
    <div class="container" style="margin-top: 40px;">
        <div class="row">

            <!-- Login Section -->
            <div class="col-md-6">
                <div class="card" style="background-color: rgba(0, 0, 0, 0.4);">
                    <div class="card-header" style="color: white;">Login Section</div>
                    <div class="card-body">
                        <!-- Login form -->
                        <form action="" method="POST"> <!-- Update the action to the correct file path -->
                            <div class="form-group mt-3">
                                <label for="user_name" style="color:white;">Enter your User Name</label>
                                <input type="text" name="user_name" id="user_name" class="form-control"> <!-- Changed to match your database column -->
                            </div>
                            <div class="form-group mt-3">
                                <label for="user_pass" style="color:white;">Enter your Password</label>
                                <input type="password" name="user_pass" id="user_pass" class="form-control"> <!-- Changed to match your database column -->
                            </div>
                            <div class="form-group mt-3">
                                <input type="submit" value="Login" name="btnLogin" class="btn btn-outline-warning btn-sm">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Registration Section -->
            <div class="col-md-6">
                <div class="card" style="background-color: rgba(0, 0, 0, 0.4);">
                    <div class="card-header" style="color: white;">Registration Section</div>
                    <div class="card-body">
                        <!-- Registration form -->
                        <form action="LIB/ROUTE/USER/Registration.php" method="POST"> <!-- Update the action to the correct registration file -->
                            <div class="form-group mt-3">
                                <label for="user_name" style="color:white;">Enter your Name</label>
                                <input type="text" name="user_name" id="user_name" class="form-control"> <!-- Changed to match your database column -->
                            </div>
                            <div class="form-group mt-3">
                                <label for="user_email" style="color:white;">Enter your Email</label>
                                <input type="text" name="user_email" id="user_email" class="form-control"> <!-- Changed to match your database column -->
                            </div>
                            <div class="form-group mt-3">
                                <label for="user_pass" style="color:white;">Enter your Password</label>
                                <input type="password" name="user_pass" id="user_pass" class="form-control"> <!-- Changed to match your database column -->
                            </div>
                            <div class="form-group mt-3">
                                <label for="user_phone" style="color:white;">Enter your Phone</label>
                                <input type="text" name="user_phone" id="user_phone" class="form-control"> <!-- Changed to match your database column -->
                            </div>
                            <div class="form-group mt-3">
                                <label for="user_nic" style="color:white;">Enter your NIC</label>
                                <input type="text" name="user_nic" id="user_nic" class="form-control"> <!-- Changed to match your database column -->
                            </div>
                            <div class="form-group mt-3">
                                <input type="submit" name="btnSave" id="btnSave" value="Register" class="btn btn-outline-success btn-sm">
                                <input type="reset" value="Clear" class="btn btn-outline-danger btn-sm">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div> <!-- End of row -->
    </div> <!-- End of container -->

</body>
</html>
