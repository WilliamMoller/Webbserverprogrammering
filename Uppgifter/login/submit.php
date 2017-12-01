<?php
	$dbc = mysqli_connect("localhost","root","","users");
	
	$FirstName = $_POST['Fname'];
	$Password = $_POST['psw'];
	
	$query = "SELECT * FROM form WHERE First_Name='$FirstName' AND Password='$Password';";
	
	mysqli_query($dbc,$query);
	
	
	$result = mysqli_query($dbc,$query);
	
	if($row = mysqli_fetch_array($result)){
		
		echo "Logged in successfully!";
		
	}
	else{
		echo "Failed to login, wrong name or password";
	}
?>