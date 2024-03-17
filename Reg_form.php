<?php
	include 'db_connection.php';
	
	$statumsg='';  //photo uplod to "uplodfile".
	$targetDir="uploads/";
	$fileName= baseName($_FILES["file"]["name"]);
	
	$targetFilePath=$targetDir.$fileName;
	$fileType= pathinfo($targetFilePath,PATHINFO_EXTENSION);
	
	//insert data to data base
	if(isset($_POST['submit']) && !empty($_FILES["file"]["name"]) ){
		$name=$_POST['name'];
		$nic=$_POST['nic'];
		$email=$_POST['email'];
		$mobile=$_POST['mobileno'];
		$password=$_POST['password1'];		
		$allowType= array('jpg', 'png', 'jpeg', 'gif','pdf');// image types
		
		
		
		$request= "INSERT INTO member (name, nic, email, mobile, password, photo) VALUES
		('$name','$nic','$email','$mobile','$password','$fileName')";
		
		
		
		mysqli_query($conn, $request);
		
		 
		
		header('location:Registration.php');
	}
	else{
		echo "Somthing went wrong! try again";
	}
	
	

?>