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
        
                

        
        
        $errorMessage = "Invalid username, please enter again";
        $userName = $_POST["username"];
        $userEmail = $_POST["useremail"];
        $userContact = $_POST["usercontact"];

        if (isset($userName) && (strlen(trim($userName)) > 0) && (is_numeric($userName) !== true)) {
            
        } else {
            echo "<script type='text/javascript'>alert('$errorMessage');</script>";
            exit();
        }

        if (empty($userEmail)) {
            $emailErr = "Email is required";
            echo "<script type='text/javascript'>alert('$emailErr');</script>";
            exit();
        } else {
            if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
                echo "<script type='text/javascript'>alert('$emailErr');</script>";
                exit();
            }
        }
        if (is_numeric($userContact) !== false) {
            
        } else {
            $contactErr = "Invalid contact number";
            echo "<script type='text/javascript'>alert('$contactErr');</script>";
            exit();
        }
        echo "<script>
             alert('message sent succesfully'); 
             window.history.go(-1);
     </script>";
        ?>
    </body>
</html>
