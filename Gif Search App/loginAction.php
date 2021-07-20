<?php

require_once 'include/common.php';
$_SESSION['lastUrl'] = $_SERVER['REQUEST_URI'];

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password=$_POST['password'];
    unset($_SESSION['errors']);
    $_SESSION['errors']=[];
    $_SESSION['userInfo']=[];
    //authenticate

    //if fail header and alert('failed login')
    //success,redirect to index.html
    //index.html contains all gifs, able to like and update database
    //content.html contains all liked gifs
    $accountDAO = new AccountDAO();
    $accountArray = $accountDAO->retrieve($username);
    if($accountArray === null){
        array_push($_SESSION['errors'],"User does not exist");
        header('Location: login.php');

    }else{

        if($accountDAO->authenticate($username, $password)){
            $_SESSION['userInfo'] = $accountDAO->retrieve($username);
            header('Location: index.php');
            exit();
        }else{
            array_push($_SESSION['errors'],"Wrong password");
            header('Location: login.php');
            exit();

        }
    }

}else{
    header('Location: login.php');
    exit();
}



?>