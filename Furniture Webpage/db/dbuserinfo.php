<?php

function getUser($con,$userid,$pwd){
    $userid = mysqli_real_escape_string($con,$userid);// handle all the illegal characters
    $pwd = mysqli_real_escape_string($con,$pwd);//
    
    $sqlStr = "SELECT * FROM admin where userid = '$userid' AND password =(AES_ENCRYPT('$pwd','passw')) ";
                
                
    $result = mysqli_query($con, $sqlStr);
    
    
    if($result){
        if($currentRecord = mysqli_fetch_assoc($result)){
            return $currentRecord;
        }
    }
    return false;
}
    





?>

    
