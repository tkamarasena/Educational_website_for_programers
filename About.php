<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<link rel="stylesheet" href="Course.css" type="text/css"/>
	<title>About us</title>
	
	</head>
	
	<body>
	
	<!--header section-->
	<?php
		include 'Header.php';
	?>
		<!--end Header-->
		
		<div class="heading" style="background:url(about.jpeg) no-repeat">
			
		</div>
		<h1 class="heading-title">About us</h1>
		
		
		<!--About section start-->
		<section class="About">
			<div>
				<img src="homeAbout.jpg" alt="">
			</div>
			
			<div class="content">
			<h3>Why choose us?</h3>
			<p>Add content about site"Assume you are going to design a website for a company. You may 
              select any one of the areas as mentioned below to design the website. </p>
			<p>According to Peter Morville and Louis Rosenfeld (Information Architecture for the World
				Wide Web, 3rd edition)the IA of a websiteneeds to address different user needs.</p>
			</div>
			
		
		</section>
		
		<!--About section end-->
		
		<!--review section-->
		
		<section class="review">
			<h1 class="heading-title">Student Reviews</h1>
		
			<div class="swiper review-slider">
			
				<div class="swiper-wrapper">
					<div class="box-container">
						<div class="swiper-slider slide">
							<div class="stars"><!--add star img-->
								
							</div>
							<!--add review-->
							<p>Definitely gonna need this one, i am almost half-done with 8th grade and 
							i'm trying to get into a highschool that prioritizes programming and if they 
							start from C (which they usually do) then i will be a step ahead!</p>
							
							<h3>Tharinda Kaushalya</h3>
							<span>Undergraduate</span>
							<img src="profile1.jpg" alt=""/>
						
						</div>
						
						<div class="swiper-slider slide">
							<div class="stars"><!--add star img-->
								
							</div>
							<!--add review-->
							<p>i am actually a data science student. it was because of you that i fell in love
							with python. now that i am learning C i came back to watch once again your tutorial.
							keep going . you're the best so far.</p>
							
							<h3>Nuwan Ekanayeke</h3>
							<span>Undergraduate</span>
							<img src="profile2.jpg" alt=""/>
						
						</div>
						
						<div class="swiper-slider slide">
							<div class="stars"><!--add star img-->
								
							</div>
							<!--add review-->
							<p>great content! I appreciate how you've explained everything from scratch,
							that too in such a clear and precise manner. 3 hours down (took 6 to get here),
							and I'm still with you! your narration style is perfect, keeps you calm AND 
							engaged. thank you!</p>
							
							<h3>Dhananjya Supun</h3>
							<span>Undergraduate</span>
							<img src="profile3.jpg" alt=""/>
						
						</div>
					</div>
					
				</div>
			</div>
		</section>
		
		<!--review section end-->
		
		<!--footer section-->
		
		<?php
			include 'Footer.php';
		?>
	</body>
</html>