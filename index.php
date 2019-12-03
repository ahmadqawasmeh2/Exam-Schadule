<?php session_start();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<header class="top-header"style="background: linear-gradient(-135deg, #41925cd1, #7d7d7dd1);">

        <div class="container" >
            <div class="div_contentImg" style="    margin-left: -113px;">
                <img src="headerLogoNewEn.PNG" alt="LOGO" class="img-responsive" />
            </div>
        </div>
        
    </header>

	<div class="limiter">
		<div class="container-login100" style="min-height: 100vh;background-image: url(image.jpg);
		background-size:cover;">
		
			<div class="wrap-login100" style="width: 450px;margin-top:-89px;background: linear-gradient(-135deg,#4c8a60d1,#7d7d7dd1);">
				 
				<div class="login100-pic js-tilt" data-tilt>
					
				</div>

				<form class="login100-form validate-form" action="login.php" method="post" style=" margin-top: -100px;">
					<span class="login100-form-title">
						 LogIn
					</span>

							<div class="wrap-input100 validate-input" align="center" >
														 <select name="type">
												 	<option value="admin">admin</option>
													 <option value="lecture">lecture</option>
													  <option value="student">student</option>
													  </select>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							
						</span>
					</div>
					<br>

					<div class="wrap-input100 validate-input" data-validate = "Invalid user name">
						<input class="input100" type="text" name="log_user_name" placeholder="User Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password Invalid ">
						<input class="input100" type="password" name="log_password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn"  name="login">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>