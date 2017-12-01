<?php


	$dbc = mysqli_connect("localhost","root","","users");
	
	$Username = $_POST['Uname'];
	$FirstName = $_POST['Fname'];
	$LastName = $_POST['Lname'];
	$Email = $_POST['Email'];
	$Birthday = $_POST['Birthday'];
	$Password = $_POST['psw'];

	

	$query = "INSERT INTO form(Username,First_Name,Last_Name,Email,Birthday,Password) VALUES('$Username','$FirstName','$LastName','$Email','$Birthday','$Password');";
	
	mysqli_query($dbc,$query);
	
?>