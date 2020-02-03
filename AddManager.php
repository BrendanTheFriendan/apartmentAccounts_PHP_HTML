<!DOCTYPE html>

<html>
	<head>
		<title> Manager Signup </title>
	</head>
	
	<body>
		<form action = "InsertManager.php" method = "POST">
			<b> Add new Manager </b>
			<p> UserName : <input type="text" name="username" value=""/>
			</p>
			<p> Password : <input type="text" name="password" value=""/>
			</p>
			<p> FirstName : <input type="text" name="fname" value=""/>
			</p>
			<p> LastName : <input type="text" name="lname" value=""/>
			</p>
			<p> Email : <input type="text" name="email" value=""/>
			</p>
			<p> DOB (YYYYMMDD) : <input type="text" name="dob" value=""/>
			</p>
			<p> <input type="submit" name="submit" value="Submit"/>
			</p>
		</form>
	</body>
</html>
