<?php
require_once 'include/common.php';
$_SESSION['lastUrl'] = $_SERVER['REQUEST_URI'];
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
if(isset($_POST['submitEmail'])){

    $_SESSION['errors']=[];

    if(isset($_POST['email'])){
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($_SESSION['errors'],"Not valid email");
            header("location:forgetPassword.php");
            exit();
        }else{
            $accountDAO = new AccountDAO();
            $emailRetrieved = $accountDAO->getEmail($email);
            if($emailRetrieved === null){
                array_push($_SESSION['errors'],"Email is not registered");
                header("location:forgetPassword.php");
                exit();

            }else{
                $name = $emailRetrieved->getName();
                $userEmail = $emailRetrieved->getEmail();
                header("location:sendEmailAction.php?name=$name&email=$userEmail");
                exit();
            }
        }
    }else{
        array_push($_SESSION['errors'],"Input field is empty");
        header("location:forgetPassword.php");
        exit();
    }
}else{
    header("location:forgetPassword.php");
    exit();
}
$_SESSION['lastUrl'] = $_SERVER['REQUEST_URI'];
?>