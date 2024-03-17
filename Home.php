<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
	<title>Home</title>
	
	</head>
	
	<body>
	
	<!--header section-->
	<?php
		include 'Header.php';
	?>
	
		<!--header end-->
		
		<!--Home section-->
		
		<section class="home">
					<div class="slide" style="background:url(home_image.jpg) no-repeat">
						<div class="content">
							<span>Discover, Learn, Build</span>
							<h3>Learn & be a profession</h3>
							<a href="Registration.php" class="buton">Register Now</a>
						</div>
					</div>
					
		</section>    
		<!--Home section end-->
		
		<!--services section-->
		<section class="services">
		
			<h1 class="heading-title">Our Services</h1>
			<div class="box-container">
			
				<div class="box">
					<img src="cap.jpg" alt="Scholarships" />
					<h3>Scholarships Facility</h3>
				</div>
				
				<div class="box">
					<img src="tech.jpg" alt="Lectures" />
					<h3>Skilled Lectures</h3>
				</div>
				
				<div class="box">
					<img src="e-book.jpg" alt="e-Library" />
					<h3>e-Library and Store</h3>
				</div>
			</div>
		
		</section>
		<!--services section end-->
		
		
		
		<!--Home about section-->
		<section class="home-about">
			<div class="image">
				<img src="homeAbout.jpg" alt=""/>			
			</div>
			
			<div class="content">
			<h3>Yes.. We hope..</h3>
			<p>This is the best opportunity. You can start FROM BEGINING. Improve your codding skills with the 
				best lecture pannel, available learning methods and exclusive content. Learn, become a professional!  </p>
			<a href="About.php" class="buton">Read More</a>
			</div>
		</section>
		<!--Home  about section end-->
		
		<?php
			include 'Footer.php';
		?>
		
		
		
		<!--footer section-->
		
		
	</body>
</html>