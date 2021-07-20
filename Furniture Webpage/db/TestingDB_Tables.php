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
        require_once 'dbfunction.php';
        require_once 'dbCategory.php';
        
        $con=  open_connection();
        $catArr=  getAllCategory($con);
        close_connection($con);
        
        echo"<pre>";
        print_r($catArr);
        echo"</pre>";
        
        ?>
    </body>
</html>
