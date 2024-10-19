<?php 
function Connection() {
    $server = "localhost"; // Server address
    $user = "root"; // Database username
    $password = ""; // Database password
    $db_name = "ums"; // Database name

    // Create database connection using mysqli_connect
    $conn = mysqli_connect($server, $user, $password, $db_name);

    // Check for connection errors
    if (!$conn) {
        return "Database Connection Error: " . mysqli_connect_error(); // Detailed error message
    } else {
        return $conn; // Return the connection object
    }
}
?>
