`   <?php


function getAllCategory($con,$status=0){
    $resultArr=[];
    
    $queryStr = "SELECT * FROM category WHERE status='{$status}';";
    $recordSet = mysqli_query($con,$queryStr);
    
    
    
    if($recordSet){
        while($currentRecord= mysqli_fetch_assoc($recordSet)){
            $resultArr[]=$currentRecord;
        }
    }
    
    
    return $resultArr;
    
   
}



?>