<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'db/dbfunction.php';
        require_once 'db/dbRegister.php';






        $userid = isset($_POST['username']) ? $_POST['username'] : "";
        $email = isset($_POST['email']) ? $_POST['email'] : "";
        $pwd = isset($_POST['password1']) ? $_POST['password1'] : "";




        $con = open_connection();
        $registerInfo = registerUser($con, $userid, $email, $pwd); 
        close_connection($con);

        ?>
    </body>
</html>

