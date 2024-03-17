<?php 
session_start(); 
$servername="localhost";
	$username="root";
	$password="";
	$dbname="assignment_db";
	$adminname="admin";
	$adminpassword="admin1234";
	
	
	$conn=mysqli_connect($servername,$username,$password,$dbname);

if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$password = validate($_POST['password']);
	$adminname="admin";
	$adminpassword="admin1234";

	if (empty($username)) {
		header("Location: Login.php?error=User Name is required");
	    exit();
	}else if(empty($password)){
        header("Location: Login.php?error=Password is required");
	    exit();
	}else if ($username === $admin && $adminpassword === $password){
		header("Location: Admin.php");
		exit();
		
		
	}else{
		$sql = "SELECT * FROM member WHERE email='$username' AND password='$password'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $username && $row['password'] === $password) {
            	$_SESSION['email'] = $row['email'];            	
            	$_SESSION['member_id'] = $row['member_id'];
            	header("Location: C_programming.php");
		        exit();
            }else{
				echo "Incorect User name or password";
				header("Location: Login.php?error=Incorect User name or password");
				
		        exit();
			}
		}else{
			echo 'alert("Incorect User name or password")';
			header("Location: Login.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: Login.php");
	exit();
}











?>