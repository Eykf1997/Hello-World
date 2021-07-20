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
        $Msg = "<span style='color:red;'>Admin Details Edited</span>";
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
        <?php
        // put your code here
        ?>

        <?php include 'navBar.php'; ?>
        <div class="container">

            <?php
            /*
              require_once 'db/dbfunction.php';
              require_once 'db/dbUserId.php';
              getUserId($con);
             * 
             */
            ?>

            <form action='editAdminHandle.php' method='POST'>
                User <select name="selecteduserid" id="selecteduserid">
                    <?php
                    require_once 'db/dbconfig.php';
                    $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
                    mysqli_select_db($con, "admin");
                    $sqlquery = "select userid from admin";




                    $result = mysqli_query($con, $sqlquery);
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<option value="' . $row['userid'] . '">' . $row['userid'] . '</option>';
                    }
                    ?>
                </select><br>

                    Name:    <input type='text' name='newusername'><p>
                    Userid:    <input type='text' name='newuserid'><p>
                    Password:	<input type='password' name='newpassword'><p><br>
                    <input type='submit' name='submit' value='Edit Details'>

            </form>
            <?= $Msg ?>
        </div>
    </body>
</html>
