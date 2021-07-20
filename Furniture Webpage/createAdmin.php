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
$msgCode = isset($_GET["msg"]) ? $_GET["msg"] : "";

switch ($msgCode) {
    case 1:
        $Msg = "<span style='color:red;'>Admin Created</span>";
        break;


    default:
        $Msg = "";
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="bootstrap3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <title></title>
    </head>
    <body>
        <?php include 'navBar.php'; ?>




        <div class="container">
            <form action='createAdminHandle.php' method='POST'>
                Name:    <input type='text' name='name'><p><br>
                    Email:    <input type='text' name='userid'><p><br>
                    Password:	<input type='password' name='password'><p><br>
                    <input type='submit' name='submit' value='Create account'>
            </form>
            <?= $Msg ?>
        </div>
    </body>
</html>
