
        <?php
       function getImageByProductid($con,$productid,$status=0){
    
    $resultArr =[];
    
    $queryStr = "SELECT * FROM productimage WHERE productid='{$productid}' AND status='{$status}';";
    
    //echo $queryStr;
    //die();
    $recordSet = mysqli_query($con, $queryStr);
    
    if($recordSet){
        while($currentRecord=  mysqli_fetch_assoc($recordSet)){
            $resultArr[]=$currentRecord;
        }
    }
    return $resultArr;
    
}
        ?>

