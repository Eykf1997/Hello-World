<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="bootstrap3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>

        <?php include 'navBar.php'; ?>
        <?php 
        require_once 'db/dbfunction.php';
        require_once 'db/dbRegister.php';
        
        ?>
        <div class="container">
            <form action="registerHandlePage.php" method="post">
                <fieldset>
                    <legend>Personal information:</legend>
                    Name:<br>
                    <input type="text" name="username"><br>
                    Email:<br>
                    <input type="text" name="email"><br>
                    Password:<br>
                    <input type="password" name="password1"><br>
                    <input type="submit" value="Send">
                </fieldset>
            </form>
        </div>
    </body>
</html>
