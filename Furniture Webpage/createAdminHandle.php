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





$name = isset($_POST['name']) ? $_POST['name'] : "";
$userid = isset($_POST['userid']) ? $_POST['userid'] :"";
$password = isset($_POST['password']) ? $_POST['password'] :"";
$sqlquerycheckuser = "Select userid from admin";




$sqlquery = "INSERT INTO admin (Name, userid, Password) VALUES ('$name','$userid',(AES_ENCRYPT('$password','passw'))) ";
        




        
$result = mysqli_query($con,$sqlquery);
header('Location: createAdmin.php?msg=1');

?>

