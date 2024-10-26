<?php 

// Include database connection
include_once('db_conn.php'); // Fixed to wrap db_conn.php in quotes for file inclusion

// Create user registration function
function userRegistration($user_name, $user_email, $user_pass, $user_phone, $user_nic){
    // Create database connection
    $db_conn = Connection();

    // Data insert query
    $insertSql = "INSERT INTO user_tbl (user_name, user_email, user_phone, user_nic, user_status) 
                  VALUES ('$user_name', '$user_email', '$user_phone', '$user_nic', 1);";

    // Execute the insert query
    $sqlResult = mysqli_query($db_conn, $insertSql);

    // Check for query execution errors
    if (!$sqlResult) {
        echo mysqli_error($db_conn); // Correct error check
        return;
    }

    // If registration is successful, insert data into the login table
    if ($sqlResult) {
        // Use MD5 to hash the password
        $hashedPassword = md5($user_pass);

        // Insert login credentials into login_tbl
        $insertLogin = "INSERT INTO login_tbl (login_email, login_pwd, login_role, login_status) 
                        VALUES ('$user_email', '$hashedPassword', 'user', 1);";

        $loginResult = mysqli_query($db_conn, $insertLogin);

        // Check for query execution errors for login_tbl
        if (!$loginResult) {
            echo mysqli_error($db_conn);
            return;
        }

        return "Your registration was successful!";
    } else {
        return "Please try again!";
    }
}

// User authentication (login) function
function Authentication($user_name, $user_pass){
    // Call database connection
    $db_conn = Connection();

    // Fetch user details from login_tbl based on email (login email is username)
    $sqlFetchUser = "SELECT * FROM login_tbl WHERE login_email='$user_name';";
    $sqlResult = mysqli_query($db_conn, $sqlFetchUser);

    // Check if query execution failed
    if (!$sqlResult) {
        echo mysqli_error($db_conn);
        return;
    }

    // Hash the input password for comparison
    $hashedPassword = md5($user_pass);

    // Check if the query returned any rows
    $norows = mysqli_num_rows($sqlResult);
    
    // If no rows returned, no user found
    if ($norows == 0) {
        return "No records found!";
    }

    // Fetch the result row as an associative array
    $rec = mysqli_fetch_assoc($sqlResult);

    // Validate the user's password
    if ($rec['login_pwd'] == $hashedPassword) {
        // Validate the user's account status
        if ($rec['login_status'] == 1) {
            // Check if the user is an admin
            if ($rec['login_role'] == "admin") {
                // Redirect admin to the admin dashboard
                header('Location: LIB/VIEWS/Dashboards/admin.php');
            } else {
                // Redirect user to the user dashboard
                header('Location: LIB\VIEWS\Dashboards\user.php');
            }
        } else {
            return "Your account has been deactivated!";
        }
    } else {
        return "Your password is incorrect. Please try again.";
    }
}

?>