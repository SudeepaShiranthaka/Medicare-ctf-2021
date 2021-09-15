<?php
	include_once 'config.php';
	
	if(isset($_POST['btn-send']))
	{
		$name = $_POST['name'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];
		
		$sql = "INSERT INTO contact_us (name,address,phone_number,message) VALUES('$name','$address','$phone','$message')";
		if(mysqli_query($conn, $sql))
		{
			//echo
			header("Location:index.html");
		}
		else
		{
			echo"<script>alert('ERROR:could not able to execute $sql. ')</script>";
		}
		//close connection
		mysqli_close($conn);
	}	
?> 