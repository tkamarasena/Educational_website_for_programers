<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<link rel="stylesheet" href="Course.css" type="text/css"/>
	<link rel="stylesheet" href="register.css" type="text/css"/>
	<title>Log in</title>
	
	

	
	</head>
	
	<body class="login-body">
	
	
		
		
		<!--start login-->
		<section class="login">
		
		<div class="center">
			<h1>Login</h1>
			<form method="POST" action="Login_check.php">
				<div class="text-field">
					<input type="text" name="username" required>
					<label>Username</label>
				</div>
				
				<div class="text-field">
					<input type="password" name="password" required>
					<label>Password</label>
				</div>
				
				<div class="pass">Forget Password?</div>
				<input type="submit" value="Login" class="login-button">
				<div class="signup-link">Not a member? <a href="Registration.php">Signup</a></div>
			</form>
			
		</div>
		
		
		
		
		
		
		
		</section>
		<!--end login-->
		
	</body>
</html>