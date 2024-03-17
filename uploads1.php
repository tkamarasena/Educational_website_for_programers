<!DOCTYPE html>
<html>
<body>
	<?php
	include 'db_connection.php';	
	$statumsg='';
	$targetDir="uploads/";
	$fileName= baseName($_FILES["file"]["name"]);
	
	$targetFilePath=$targetDir.$fileName;
	$fileType= pathinfo($targetFilePath,PATHINFO_EXTENSION);
	
	if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
		$allowType= array('jpg', 'png', 'jpeg', 'gif','pdf');
		
		if(in_array($fileType,$allowType)){
			
			if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
				$insert= $conn->query("INSERT INTO images (file_name, uploaded_on, status)");
				
				if($insert){
					$statumsg= "The file ".fileName." has been uploaded";
				}
				else{
					$statumsg="File upload is faild, Pease try agin";
				}
				
			}
			else $statumsg="Sorry, only JPG, JPEG, PNG, GIF, PDF are allowed to upload.";
			
		}
	}
	else{
		$statumsg="Please select a file to upload.";
	}
	
		
	?>
	
	


</body>
</html>