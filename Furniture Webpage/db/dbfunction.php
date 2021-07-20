<?php

require_once 'dbconfig.php';

function open_connection(){
    $connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
    
    if(mysqli_connect_errno()){
        return false;
    } else{
        return $connection;
    }
}

function close_connection($con){
    if(isset($con)){
        mysqli_close($con);
    }
}



$con = open_connection();
/*
if($con){
    echo "<pre>";
    print_r($con);
    echo"</pre>";
} else{
    echo "Failed";
}
 
 */
?>