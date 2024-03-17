<?php 
session_start();

	if (isset($_SESSION['member_id']) && isset($_SESSION['email'])) {

 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
	  <meta charset="utf-8">      
      <link rel="stylesheet" href="Content.css">
	  <link rel="stylesheet" href="style.css" type="text/css"/>
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
	  <script src="script.js"></script>
	
	
	<title>C Programming</title>
	
	</head>
	
	<body>
	
	<!--course content-->
	
		<?php
			include 'SideBar.php';
		?>
	
	 
      <div class="content">
        
			
		<!--header section-->
		<?php
			include 'Header.php';
		?>
		
		<!--header section end-->
		
		<h1>C Introduction</h1>
		
		<hr/>
		
		<h2>History of C</h2>
		
		<ul>
			<li>C language was evolved from two previous  languages, BCPL and B by <strong>Dennis Ritchie</strong>
				at <strong>Bell Laboratories</strong> in 1972.</li><br/>
			<li>C initially became widely known as the developing language of the UNIX operating system.</li>
		</ul>
		
		<hr/>
		
		<h2>Why learn C</h2>	
		
		<ul>
			<li>If you know C, you will have no problem learning other popular programming languages such
				as Java, Python, C++, C#, etc, as the syntax is similar.</li><br/>
			<li>C is very fast, compared to other programming languages, like Java and Python.</li><br/>
			<li>C is very versatile; it can be used in both applications and technologies</li>
		</ul>
		
		<hr/>
		
		<h2>Get Started</h2>
			<p>This tutorial will teach you the very basics of C.</p><br/><br/>

			<p>It is not necessary to have any prior programming experience.</p><br/><br/>


		
		
		
		
		 
		</div>	
	
	<!--course content end-->
	
	 <script>
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



<?php 
}else{
     header("Location: Login.php");
     exit();
}
 ?>