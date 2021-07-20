<?php
$errorCode = isset($_GET["error"]) ? $_GET["error"] : "";

switch ($errorCode) {
    case 1:
        $errMsg = "<span style='color:red;'>Please Login</span>";
        break;
    case 2:
        $errMsg = "<span style='color:red; '>Login unsuccessful, Please try again</span>";
        break;

    default:
        $errMsg = "";
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>

        <?php include 'navBar.php'; ?>
        <div class="container">
            <form action="loginPageHandle.php" method="post">
                Email<input type="text" name="userid" size="30" /><br />
                Password<input type="password" name="pwd" size="30" /><br />
                <input type="submit" value="Login" />
            </form>
            <?= $errMsg ?>
            
            

        </div>
    </body>
</html>
