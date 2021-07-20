<?php

require_once 'include/common.php';
$_SESSION['lastUrl'] = $_SERVER['REQUEST_URI'];

?>

<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<style>
		button{
			color: #007bff;
			text-decoration: none;
			background-color: transparent;
			border:0px;
		}


	</style>
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>

			</div>
			<div class="card-body">
				<form action="loginAction.php" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="username" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="password" placeholder="password">
					</div>
					<!-- <div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div> -->
					<div id="errors" style='color:red; margin-bottom:0px; display:flex;   flex-wrap: wrap;'>
					<p> </p>
						<?php
							if(isset($_SESSION['errors'])){
								foreach($_SESSION['errors'] as $error){
									echo"<p>$error</p>";
								}							
								unset($_SESSION['errors']);

							}
						?>
					</div>
					<div class="form-group">
						<input type="submit" value="Login" name='login' class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
                <form action="createAccount.php" method="post">
                    <div class="d-flex justify-content-center" style="color:white;">
                        Don't have an account?<button name='create'>Sign Up</button>
                    </div>
                </form>
				<form action="forgetPassword.php" method="post">
                    <div class="d-flex justify-content-center">
                        <button name='forget'>Forgot your password?</button>
                    </div>
                </form>
			</div>
		</div>
	</div>
</div>


</body>
</html>