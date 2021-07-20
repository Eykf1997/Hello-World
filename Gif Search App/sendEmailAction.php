<?php
require_once 'include/common.php';
if($_SESSION['lastUrl']=="/self%20study/Gif%20Search%20App/forgetPasswordAction.php"){
    $email = $_GET['email'];
    $to = $email; 
    $from = 'sender@example.com'; 
    $fromName = 'SenderName'; 
     
    $subject = "Send HTML Email in PHP by CodexWorld"; 
     
    $htmlContent = file_get_contents("email/emailTemplate.html"); 
     
    // Set content-type header for sending HTML email 
    $headers = "MIME-Version: 1.0" . "\r\n"; 
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
     
    // Additional headers 
    $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
    $headers .= 'Cc: welcome@example.com' . "\r\n"; 
    $headers .= 'Bcc: welcome2@example.com' . "\r\n"; 
     
    // Send email 
    if(mail($to, $subject, $htmlContent, $headers)){ 
        echo 'Email has sent successfully.'; 
    }else{ 
       echo 'Email sending failed.'; 
    }
}else{

    header("location: forgetPasswordAction.php");
    exit();
}



?>