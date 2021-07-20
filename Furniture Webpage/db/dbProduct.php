<?php


function getProductByCatid($con,$catid,$status=0){
    
    $resultArr =[];
    
    $queryStr = "SELECT * FROM product WHERE categoryrecordid='{$catid}' AND status='{$status}';";
    

    $recordSet = mysqli_query($con, $queryStr);
    
    if($recordSet){
        while($currentRecord=  mysqli_fetch_assoc($recordSet)){
            $resultArr[]=$currentRecord;
        }
    }
    return $resultArr;
    
}

?>
