<?php

require_once 'db/dbfunction.php';







$selecteduserid = isset($_POST['selecteduserid']) ? $_POST['selecteduserid'] : "";

$newusername = isset($_POST['newusername']) ? $_POST['newusername'] : "";

$newuserid = isset($_POST['newuserid']) ? $_POST['newuserid'] : "";

$newpassword = isset($_POST['newpassword']) ? $_POST['newpassword'] : "";




$sqlquery = "UPDATE admin SET Name='$newusername', userid='$newuserid',password=(AES_ENCRYPT('$newpassword','passw')) Where userid='$selecteduserid'";    



$result= mysqli_query($con, $sqlquery);
header('Location: editAdmin.php?msg=1');
    



?>

