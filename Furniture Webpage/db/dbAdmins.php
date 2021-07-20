<?php

function getAdmins($con){
    
    
    $sqlquery =  "SELECT Name FROM admin ";
    
    
    $result = mysqli_query($con,$sqlquery);

    
        
    if($record){
        while($currentRecord= mysqli_fetch_assoc($record)){
            $resultArr[]=$currentRecord;
        }
    }
    
    
    return $resultArr;
    
   
}




?>

