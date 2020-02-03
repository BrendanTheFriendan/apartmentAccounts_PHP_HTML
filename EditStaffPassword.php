<!DOCTYPE html>

<html>
	<head>
		<title>Update Password </title>
	</head>
	
	<body>
		<form action = "UpdateStaffPassword.php" method = "POST">
			<b> Update Password </b>
			<p> Enter UserID : <input type="text" name="inputUID" value=""/>
			</p>
			<p> Enter EmployeeID : <input type="text" name="inputEID" value=""/>
			</p>
			<p> Current Password : <input type="text" name="currentPass" value=""/>
			</p>
			<p> New Password : <input type="text" name="newPass" value=""/>
			</p>
			<p> <input type="submit" name="submit" value="Submit"/>
			</p>
		</form>
	</body>
</html>
