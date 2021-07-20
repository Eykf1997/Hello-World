<?php

require_once 'include/common.php';
$_SESSION['lastUrl'] = $_SERVER['REQUEST_URI'];

?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Create Account</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="css/styles.css">
    <style>

    *{
        text-align:center;
    }        

    button{
        margin-top: 10px;
        color: #007bff;
        text-decoration: none;
        background-color: transparent;
        border: 1px;

    }
    #errors{
        margin-top:25px;
        
    }
    p{
        margin-bottom: 0rem;
    }
    </style>

</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Reset Password</h3>
            </div>
			<div class="card-body">
                <div id="errors" >
                    
            <?php
                        if(isset($_SESSION['errors'])){
                            
                                foreach($_SESSION['errors'] as $error){
                                    echo"<p style='color:red; '>$error</p>";
                                }							
                                unset($_SESSION['errors']);
                        }else{
                            echo"<p></p>";
                        }


                    ?>
			    </div>
                <form action='forgetPasswordAction.php' method="post">
                    <input type='text' name='email' placeholder='Email Address'>
                    <br>

                    <button name='submitEmail'>Send Email</button>
                </form>
			</div>

		</div>
	</div>
                    </div>
</body>
</html>

