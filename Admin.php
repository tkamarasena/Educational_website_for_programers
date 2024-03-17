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
	
	<h2>Students</h2>
	<hr/>
	<div class="example">
		<?php
		include 'db_connection.php';
		
		$result = mysqli_query($conn, "SELECT member_id,name, nic, email, mobile, photo FROM member");
		
		echo "<table border=px1 cellpadding=3px cellspacing=0px>
			<tr>
			<th>Student ID</th>
			<th>Name</th>
			<th>NIC</th>
			<th>E-mail</th>
			<th>Mobile Number</th>
			<th>Profile picture</th>
			</tr>";
		
		while($row = mysqli_fetch_array($result)){
			
			echo "<tr>";
			echo "<td>".$row['member_id']."</td><td>".$row['name']."</td><td>".$row['nic']."</td><td>"
				.$row['email']."</td><td>".$row['mobile']."</td><td>".$row['photo']."</td>";
			echo "</tr>";
			
		}
		echo "</table>";
		mysqli_close($conn);
	
	
	?>
	</div>
	
	
	<h2>Courses</h2>
	<hr/>
	<div class="example">
		<?php
		include 'db_connection.php';
		
		$result = mysqli_query($conn, "SELECT * FROM  course");
		
		echo "<table border=px1 cellpadding=0px cellspacing=0px>
			<tr>
			<th>Course ID</th>
			<th>Course Name</th>
			
			</tr>";
		
		while($row = mysqli_fetch_array($result)){
			
			echo "<tr>";
			echo "<td>".$row['course_id']."</td><td>".$row['course_name']."</td>";
			echo "</tr>";
			
		}
		echo "</table>";
		mysqli_close($conn);
	
	
	?>
	</div>
	
	
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