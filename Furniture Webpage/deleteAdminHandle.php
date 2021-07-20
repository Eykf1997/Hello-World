<?php


require_once 'db/dbfunction.php';



$selecteduserid  = isset($_POST['selecteduserid']) ? $_POST['selecteduserid'] : "";



$sqlquery = "delete from admin where userid='$selecteduserid'";

$result = mysqli_query($con, $sqlquery);
header('Location: deleteAdmin.php?msg=1');

?>

