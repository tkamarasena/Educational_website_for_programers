<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style.css" type="text/css"/>
		<link rel="stylesheet" href="Course.css" type="text/css"/>
		<link rel="stylesheet" href="register.css" type="text/css"/>
		<link rel="stylesheet" href="Content.css">
		
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
		
			<title>Admin</title>
	</head>

	<body>
	<!--sidebar-->
	<?php
		include 'Admin_sidebar.php';
	?>
	
	<!--content start-->	
	
	<div class="content">
	
	<h2>Check Student Details</h2>
	
	<hr/>
	
	<form method="POST" action="">
				<div class="text-field">
					<label>Student ID</label>
					<input type="text" name="stID" >
				</div>
				
				
				
				
				<input type="submit" value="Check" class="button" >
				
			</form>
			
			
	
	
	
	</div>
	
	
	
	
	
	
	
	
	
	
		
	
	
	
	
	
	
	
	
	<script> <!--sidemenu script-->
		$('.btn').click(function(){
           $(this).toggleClass("click");
           $('.sidebar').toggleClass("show");
         });
           $('.feat-btn').click(function(){
             $('nav ul .feat-show').toggleClass("show");
             $('nav ul .first').toggleClass("rotate");
           });
           $('.serv-btn').click(function(){
             $('nav ul .serv-show').toggleClass("show1");
             $('nav ul .second').toggleClass("rotate");
           });
           $('nav ul li').click(function(){
             $(this).addClass("active").siblings().removeClass("active");
           });
	</script>
	
	
	
	</body>


</html>
