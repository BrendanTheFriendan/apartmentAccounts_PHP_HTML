<?php
session_start();

$username="bdan89"; $password="bd179an89"; $database="cs502bdan89";
mysql_connect('dbclass2.cs.nmsu.edu', $username, $password);
@mysql_select_db($database) or die( "Unable to select database\n");

$temp=$_SESSION["currentUser"];

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$email = trim($_POST['email']);
} else {
	echo "Something went wong!!\n";
}

$query = "UPDATE User SET Email= '$email'WHERE UserID= '$temp'";
mysql_query($query);
mysql_close();
echo 'Update Successful! <br>';

?>


<!DOCTYPE html>
<html>
<head>
	<title> Email Update </title>
</head>

<html>
	<body>
		<a href = 'ManagerDashboard.php'>Return to Manager Dashboard</a></br>

	</body>
</html>
