<?php

//include database connection
include_once(db_conn.php);

//create user Registration function

function userRegistration($userName, $userEmail, $userpass, $userPhone, $userNic){
    //create database connection
    $db_conn = Connection();
    //data insert query
    $insertSql - "INSERT INTO user_tbl(user_name, user_email, user_phone, user_nic, user_status)
    VALUES('$userName','$userEmail','$userPhone','$userNic',1);";

    $sqlResult = mysqli_query($db_conn,$insertSql);

    //check database connection errors
    if(mysqli_connect_error($sqlResult)){
        echo(mysqli_connect_error($sqlResult));
    }

    //if the registration result is success we can feed data into the login table also
    if($sqlResult>0){
        //use MD5 method to our password
        $newPassword = md5($userpass);
        
        $insertLogin="INSERT INTO login_tbl(login_email,login_pwd,login_role,login_status)
        VALUES('$userEmail','$newPassword','user',1);";

        $loginResult=mysqli_query(db_conn,$insertLogin);

        //check database connection errors
    if(mysqli_connect_error($sqlResult)){
        echo(mysqli_connect_error($sqlResult));
    }
    return("Your Registration Success!!!");

    }
    else{
        return("Please Try Again!!");
    }


}


?>