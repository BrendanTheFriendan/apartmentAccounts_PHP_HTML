<?php

session_start();
//echo $_SESSION["currentUser"];

?>

<!DOCTYPE html>
<html>
<head>
	<title> Welcome Manager! </title>
</head>

<html>
	<body>
		<a href = 'ManagerView.php'>View Your Info</a></br>
		<a href = 'ManagerEdit.php'>Edit Your Account Info</a></br>
		<a href = 'UpdateMaintenance.php'>Update Maintenance</a></br>
		<a href = 'ManageProperty.php'>Manage Property</a></br>
		<a href = 'index.php'>Logout</a></br>
	</body>
</html>
