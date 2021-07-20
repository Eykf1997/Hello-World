<?php

require_once 'db/dbfunction.php';
require_once 'db/dbuserInfo.php';

$userid = isset($_POST['userid']) ? $_POST['userid'] : "";
$password = isset($_POST['pwd']) ? $_POST['pwd'] : "";

$con = open_connection();
$userInfo = getUser($con, $userid, $password);
close_connection($con);

if ($userInfo) {//login success
    /* echo "<pre>";
      print_r($userInfo);
      echo"</pre>"; */
    session_start();
    $_SESSION["loginUser"] = $userInfo;
    header('Location: adminHomePage.php');
} else {//login fail
    //echo "fail";
    header('Location: loginPage.php?error=2');
}
?>