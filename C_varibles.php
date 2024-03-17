
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
	  <meta charset="utf-8">      
      <link rel="stylesheet" href="Content.css">
	  <link rel="stylesheet" href="style.css" type="text/css"/>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/styles/atom-one-dark.min.css">
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
		
		<h1>C Variables</h1>
		
		<hr/>		
		
		
		<ul>
			<li>Variable is a location in memory where a value can be stored for use by a program.</li><br/>			
				
			<li>Variables must be declared, before they can be given a value. When declaring a variable, its
				<strong>name</strong> and <strong>data type</strong> should be specified. Every variable has 
				a name, type and a value.</li><br/>
			
			<li>The declaration allocates the storage location of the appropriate size and associates 
				the name and data type with that location.</li><br/>
			
			<li>The format for the declaration of a variable</li><br/>
			
				<p class="example">&lt;<span class="syntax">data type</span>&gt; 
					&lt;<span class="syntax">Name of the variable</span>&gt;;</p>
			
			<li>Examples: </li><br/>
				<p class="example"><span class="syntax">int</span> quantity;<br/>
					<span class="syntax">float</span> price;<br/>
					<span class="syntax">double</span> number;<br/>
					<span class="syntax">char</span> letter;</p></br>
				
		</ul>
		
		
		
		<div class="example">
			<pre>
				<code>
# include &lt;stdio.h&gt;
# include &lt;conio.h&gt;
int main (){
	
	int i=30;
	double p;
	p=i;
	
	printf(&quot;Implicit value is %f&quot;, p);	
	
	getch();
	return 0;
}
				</code>
			</pre>
		</div>
		
		
		
		<hr/>
		
		<h2>Data Types</h2>
		
		<img src="Data-types-in-C-1.png" alt="Code structure">
		
		
		<hr/>
		
		<h2>Storing values into variables</h2>
		
		<ol type="1" size="15px">
			<li><strong>Variable declaration</strong><br/>
				<ul >
					<li> variables must be declared before using them.</li><br/>
					
					
					<li> int num1,num2; //two integer type variables</li><br/>
				</ul>
			</li><br/>
			
			<li><strong>Variable initialization</strong><br/>
				<ul>
					<li> Once a variable is declared it can be assigned with a valid value.</li><br/>				
					<li> The assignment operation can be used to store a value in a variable or to change
					the value stored in a variable.</li><br/>
					<li>The assignment operator is the equal sign " <span class="syntax">=</span> ".</li><br/>
					
				</ul>
			</li>
			
		</ol><br/>
		
		
		
		
		
		
		
		 
		</div>	
	
	<!--course content end-->
	
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
	
	<!--color code script-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.4.0/highlight.min.js"></script>
	<script>hljs.highlightAll();</script>
	
	
	
	
	
	</body>
</html>