<?php

function registerUser($con, $userid, $email, $pwd) {

    $userid = mysqli_real_escape_string($con, $userid); // handle all the illegal characters
    $email = mysqli_real_escape_string($con, $email);
    $pwd = mysqli_real_escape_string($con, $pwd);



    $sql = "INSERT INTO admin (Name, Email, Password) "
            . "VALUES ('$userid', '$email', (AES_ENCRYPT('$pwd','passw')))";


    if (mysqli_query($con, $sql)) {
        echo "Records added successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }
}




?>

