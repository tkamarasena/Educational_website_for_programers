<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
	  <meta charset="utf-8">      
      <link rel="stylesheet" href="Content.css">
	  <link rel="stylesheet" href="style.css" type="text/css"/>
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>	  
	
	
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
		
		<h1>C Syntax</h1>
		
		<hr/>
		
		<img src="C_syntax.png" alt="Code structure">
		
		<ul>
			<li><span class="syntax">#include&lt;stdio.h&gt;</span> consists of the contents of the standard input 
			output files, which contains the definition of stdin, stdout, and stderr. Whenever the definitions 
			stdin, stdout, and stderr are used in a function, the statement <span class="syntax">
			#include&lt;stdio.h&gt;</span> need to be used. There are various header files available for different
			purposes. For example, # include &lt;math.h&gt;. It is used for mathematic functions in a 
			program.</li><br/>
			
			<p class="example">#include&lt;stdio.h&gt;</p>
			
			
			<li><span class="syntax">main()</span> is the first function to be executed by the computer.
			It is necessary for a code to include the <span class="syntax">main()</span>. It is like any 
			other function available in the C library.</li><br/>
			
			<p class="example">int main()</p>
			
			
			<li>The global section comprises of all the global declarations in the program. It is given by:</li>
			<br/>
			
			<p class="example">int i;</p>
			
			<li><span class="syntax">return()</span> function is generally the last section of a code. But,
			it is not necessary to include. It is used when we want to return a value. The return function 
			returns a value when the return type other than the void is specified with the function.</li><br/>
			
			<p class="example">return 0;</p>
			
			
		</ul>


		
		
		
		
		 
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