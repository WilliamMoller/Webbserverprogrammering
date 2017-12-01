<?php

	session_start();
	
	echo "hej".$_session['username'];
?>


<!doctype html>
<html>
	<head>
	
	
	</head>
	<body>
		<label><b>First_name </b></label>
		<input type="text" placeholder="Enter First_name" name="Fname" required>
		<br>		
		<label><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="psw" required>
		<br>
		<button type="submit" class="signupbtn">Submit</button>
	</body>
</html>