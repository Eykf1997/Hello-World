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
<html>
    <head>
        <meta charset="UTF-8">
        <link href="bootstrap3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <title></title>
    </head>
    <body>
        <?php include 'navBar.php'; ?>
        <div class="container">
        <h3>You can see this only if you are logged in.</h3>
        <h1>Welcome Admin <?= $user["Name"] ?></h1>
        <a href="changePassword.php">[Change Password]</a>
        <a href="createAdmin.php">[Create Admin]</a>
        <a href="editAdmin.php">[Edit Admin]</a>
        <a href="deleteAdmin.php">[Delete Admin]</a>
        <a href="logoutHandle.php">[ Logout ]</a>
        </div>
    </body>
</html>
