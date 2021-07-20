<?php

session_start();

if (!isset($_SESSION['loginUser'])) {// not login
    //echo "should redirect";
    header('Location: loginPage.php?error=1');
} else {
    //echo"stay";
    $user = $_SESSION['loginUser'];
}
?>


<?php

require_once 'db/dbfunction.php';





$userid  = isset($_POST['selecteduserid']) ? $_POST['selecteduserid'] : "";


$password = isset($_POST['oldpassword']) ? $_POST['oldpassword'] : "";


$newpassword = isset($_POST['newpassword']) ? $_POST['newpassword'] : "";


/*
if (is_null($password && $newpassword)){

    header('Location: changePassword.php?msg=2');
} else {



    if ($password !== $user['Password']) {

        header('Location: changePassword.php?msg=1');
    } else {
*
 * 
 */



        $sqlquery = "update admin SET password=(AES_ENCRYPT('$newpassword','passw')) Where userid ='$userid' ";

        $result = mysqli_query($con, $sqlquery);
        header('Location: changePassword.php?msg=3');
    

?>

