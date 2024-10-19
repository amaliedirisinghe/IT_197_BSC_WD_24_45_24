<?php  

// Include the file where the user registration function is defined
include_once('../../FUNCTIONS/userFunction.php');

// Check if the form fields are set before calling the function to prevent undefined variable warnings
if (isset($_POST['user_name'], $_POST['user_email'], $_POST['user_pass'], $_POST['user_phone'], $_POST['user_nic'])) {
    // Call the userRegistration function and pass form data
    $result = userRegistration($_POST['user_name'], $_POST['user_email'], $_POST['user_pass'], $_POST['user_phone'], $_POST['user_nic']);

    // Output the result of the registration process
    echo $result;
} else {
    // If required form fields are missing, return an error message
    echo "Required form data is missing!";
}

?>
