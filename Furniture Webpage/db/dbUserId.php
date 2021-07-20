<?php


require_once 'dbfunction.php';




$sqlquery = "select userid from admin";




$result= mysqli_query($con, $sqlquery);
mysqli_fetch_array($result);
while($row = mysqli_fetch_array($result)){ 
echo '<option value="' .$row['userid']. '">'. $row['userid']. '</option>' ;
}

?>