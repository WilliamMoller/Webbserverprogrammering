<!doctype html>

<html>
	<head>
		<link href="submit.php" rel="stylesheet">
		
		
		
		
	
	</head>
	<body>
		
			<form action="submit.php" method="POST">
				<div class="container">
					<label><b>Username</b></label>
					<input type="text" placeholder="Enter Username" name="Uname" required>

					<label><b>First_name </b></label>
					<input type="text" placeholder="Enter First_name" name="Fname" required>

					<label><b>Last_name</b></label>
					<input type="text" placeholder="Enter Last_name" name="Lname" required>
					
					<label><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="psw" required>
					
					<label><b>Email</b></label>
					<input type="text" placeholder="Email" name="Email" required>
					
					<label><b>Birthday</b></label>
					<input type="date" placeholder="date" name="Birthday" required>

				<div class="clearfix">
					<button type="submit" class="signupbtn">Submit</button>
				</div>
			</div>
		</form>
		
		
	</head>
</html>