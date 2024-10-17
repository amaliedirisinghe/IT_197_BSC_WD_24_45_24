<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Ensures proper rendering and touch zooming on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Link to Bootstrap CSS for responsive design and styling -->
    <link rel="stylesheet" href="CSS/bootstrap/css/bootstrap.min.css">
</head>
<body style="background-image: url('IMAGES/Background.jpg'); background-size: cover;">
    
    <!-- Main container for the layout -->
    <div class="container" style="margin-top: 40px;">  <!-- Fixed margin issue with 'margin-top' instead of 'margin: top' -->
        
        <div class="row"> <!-- Bootstrap grid system row -->

            <!-- First column for Login Section -->
            <div class="col-md-6"> <!-- Column takes up 6 out of 12 grid columns -->
                <!-- Card for login section with semi-transparent background -->
                <div class="card" style="background-color: rgba(0, 0, 0, 0.4);">
                    
                    <!-- Card header with white text -->
                    <div class="card-header" style="color: white;">
                        Login Section
                    </div>
                    
                    <!-- Card body for login form -->
                    <div class="card-body">
                        <form action="C:\xampp\htdocs\IT_197_BSC_WD_24_45_24\LIB\ROUTE\Registration.php" method="POST"> <!-- Login form with POST method -->

                            <!-- Form group for Username input -->
                            <div class="form-group mt-3">
                                <label for="UserName" style="color:white;">Enter your User Name</label>
                                <input type="text" name="UserName" id="UserName" class="form-control"> <!-- Fixed typo in class 'form-cntrol' to 'form-control' -->
                            </div>

                            <!-- Form group for Password input -->
                            <div class="form-group mt-3">
                                <label for="UserPass" style="color:white;">Enter your Password</label>
                                <input type="password" name="UserPass" id="UserPass" class="form-control"> <!-- Fixed typo in class 'form-cntrol' to 'form-control' -->
                            </div>

                            <!-- Form group for Submit button -->
                            <div class="form-group mt-3">
                                <input type="submit" value="Login" class="btn btn-outline-warning btn-sm"> <!-- Login button with Bootstrap styling -->
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            <!-- Second column for Registration Section -->
            <div class="col-md-6"> <!-- Column takes up 6 out of 12 grid columns -->
                <!-- Card for registration section with semi-transparent background -->
                <div class="card" style="background-color: rgba(0, 0, 0, 0.4);">
                    
                    <!-- Card header with white text -->
                    <div class="card-header" style="color: white;">
                        Registration Section
                    </div>
                    
                    <!-- Card body for registration form -->
                    <div class="card-body">
                        <form action="" method="POST"> <!-- Registration form with POST method -->
                            
                            <!-- Form group for Name input -->
                            <div class="form-group mt-3">
                                <label for="UserName" style="color:white;">Enter your Name</label>
                                <input type="text" name="UserName" id="UserName" class="form-control"> <!-- Fixed typo in class 'form-cntrol' to 'form-control' -->
                            </div>

                            <!-- Form group for Email input -->
                            <div class="form-group mt-3">
                                <label for="UserEmail" style="color:white;">Enter your Email</label>
                                <input type="text" name="UserEmail" id="UserEmail" class="form-control"> <!-- Fixed typo in class 'form-cntrol' to 'form-control' -->
                            </div>

                            <!-- Form group for Password input -->
                            <div class="form-group mt-3">
                                <label for="UserPass" style="color:white;">Enter your Password</label>
                                <input type="text" name="UserPass" id="UserPass" class="form-control"> <!-- Fixed typo in class 'form-cntrol' to 'form-control' -->
                            </div>

                            <!-- Form group for Phone input -->
                            <div class="form-group mt-3">
                                <label for="UserPhone" style="color:white;">Enter your Phone</label>
                                <input type="text" name="UserPhone" id="UserPhone" class="form-control"> <!-- Fixed typo in class 'form-cntrol' to 'form-control' -->
                            </div>

                            <!-- Form group for NIC input -->
                            <div class="form-group mt-3">
                                <label for="UserNIC" style="color:white;">Enter your NIC</label>
                                <input type="text" name="UserNIC" id="UserNIC" class="form-control"> <!-- Fixed typo in class 'form-cntrol' to 'form-control' -->
                            </div>

                            <!-- Form group for Submit and Reset buttons -->
                            <div class="form-group mt-3">
                                <input type="submit" name="btnSave" id="btnSave" value="Register" class="btn btn-outline-success btn-sm"> <!-- Register button with Bootstrap styling -->
                                <input type="reset" value="Clear" class="btn btn-outline-danger btn-sm"> <!-- Reset button with Bootstrap styling -->
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div> <!-- End of row -->
    </div> <!-- End of container -->

</body>
</html>
