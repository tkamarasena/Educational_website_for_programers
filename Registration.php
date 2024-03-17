<!DOCTYPE html>
<html>
	<head>
	
		<link rel="stylesheet" href="style.css" type="text/css"/>
		<link rel="stylesheet" href="Course.css" type="text/css"/>
		<link rel="stylesheet" href="register.css" type="text/css"/>
			<title>Registration</title>
			
			<script>
				function inputValidation(){
					
					
					//to validate the email address
					var email = document.getElementById("email").value;
					var atposition=email.indexOf("@");
					var dotposition=email.lastIndexOf(".");
					
		
					if(atposition<1 || dotposition<atposition+2 || dotposition+2 >=email.length){
						document.getElementById("err_email").innerHTML="*Invalid email.Re-enter the email address";
						document.getElementById("err_email").style.color="red";
						email.focus();
						email.select();
						return false;
					}
					
					//to validate password length 
					var password = document.getElementById("password1");
					if(password1.value.length<8){
						document.getElementById("err_pswd1").innerHTML="*At least 8 characters are required";
						document.getElementById("err_pswd1").style.color="red";
						password1.focus();
						password1.select();
						return false;
					}
					
					//to match with the re-entered password
					var re_password = document.getElementById("password2");
					
					if(password.value == re_password.value){
						document.getElementById("err_pswd2").innerHTML="*Passwords are matching";
						document.getElementById("err_pswd2").style.color="green";
					}
					else{
						document.getElementById("err_pswd2").innerHTML="*Passwords are not matching. Re-enter the password";
						document.getElementById("err_pswd2").style.color="red";
						
						password2.focus();
						password2.select();
						return false;
					}
						
					
					//to validate new or old NIC numbers
					
					var nic = document.getElementById("nic");
					
					var oldnic_pat = /^[0-9]{9}[vVxX]$/;
					var newnic_pat = /^[0-9]{12}$/;
					
					if (!nic.value.match(oldnic_pat) && !nic.value.match(newnic_pat) ){
						document.getElementById("err_nic").innerHTML="*Please enter a valid NIC number";
						document.getElementById("err_nic").style.color="red";
						
						nic.focus();
						nic.select();
						return false;
					}
					
					//to validate mobile number
					
					var mobno = document.getElementById("mobileno");
					var mobileno_pat=/^07[0-9]{8}$/;
					
					if (!mobno.value.match(mobileno_pat)){
						document.getElementById("err_mbno").innerHTML="*Please enter a valid mobile number";
						document.getElementById("err_mbno").style.color="red";
						
						mobileno.focus();
						mobileno.select();
						return false;
					}
					
					//to validate photo extension
					
					var ph_ext= document.getElementById("file");
					
					var photo_path=ph_ext.value;
					
					var extensions =  /(\.jpg|\.jpeg|\.png|\.gif)$/i; 
						
						if (!extensions.exec(photo_path)) {
							
							document.getElementById("err_exts").innerHTML="File extension is not supported!";
							document.getElementById("err_exts").style.color="red";
						
							file.focus();
							file.select();
							return false;
						}
						
            }
				
			</script>
			
	</head>

	
	<body>
	
	<!--header section-->
	<?php
		include 'Header.php';
	?>
		<!--end Header-->
		
		
		
		
		<!--Registration-->
		
		<section class="registration">			
			<h1 class="heading-title">Register Now!</h1>
			
			<form action="Reg_form.php" method="post" enctype="multipart/form-data" class="reg-form">
			
				<div class="flex">				
					<div class="input-box">
						<span>Name :</span>
						<input type="text" name="name" id="name" placeholder="Enter your name" required>
						<span id="err_name"></span>
					</div>
					
					
					
					<div class="input-box">
						<span>NIC :</span>
						<input type="text" name="nic" id="nic" placeholder="Enter your NIC" required>
						<span id="err_nic"></span>
						
					</div>
					
					<div class="input-box">
						<span>E-mail :</span>
						<input type="text" name="email" id="email" placeholder="Enter your e-mail" required>
						<span id="err_email"></span>
					</div>
					
					<div class="input-box">
						<span>Mobile Number :</span>
						<input type="text" name="mobileno" id="mobileno" placeholder="Enter your mobile number" required>
						<span id="err_mbno"></span>
					</div>
					
					<div class="input-box">
						<span>Password :</span>
						<input type="password" name="password1" id="password1" placeholder="Enter password" required>
						<span id="err_pswd1"></span>
					</div>
					
					<div class="input-box">
						<span>Re-enter Password :</span>
						<input type="password" name="password2" id="password2" placeholder="Re-enter password" required>
						<span id="err_pswd2"></span>
						
					</div>
					
					<div class="input-box">
						<span>Photo :</span>
						<input type="file" name="file" id="file" required>
						<span id="err_exts"></span>
					</div>
					
					
				</div>
				
				<input type="reset" name="reset" id="reset" value="Clear" class=" buton btn-danger form-control"/>
				
				<input type="submit" name="submit" id="submit" value="upload" 
					class=" buton btn-success form-control" onclick="return inputValidation();">
				
			</form>
				
				
				
				
				
				
		</section>
		
		<!-- end Registration-->		
			
			
			
			<!--footer section-->
		
		<?php
			include 'Footer.php';
		?>
			
			
			
	</body>


</html>