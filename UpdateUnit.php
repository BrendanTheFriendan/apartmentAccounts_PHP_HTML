<?php
session_start();

$username="bdan89"; $password="bd179an89"; $database="cs502bdan89";
mysql_connect('dbclass2.cs.nmsu.edu', $username, $password);
@mysql_select_db($database) or die( "Unable to select database\n");

$temp=$_SESSION["currentUser"];

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$PID = trim($_POST['PID']);
	$aNum = trim($_POST['aNum']);
	$rent = trim($_POST['rent']);
} else {
	echo "Something went wong!!\n";
}

$query = "UPDATE PropertyUnit SET Rent= '$$rent'WHERE PropertyID= '$PID' and ApartmentNumber='$aNum'";
mysql_query($query);

mysql_close();
echo 'Update Successful! <br>';

?>


<!DOCTYPE html>
<html>
<head>
	<title> Unit Update </title>
</head>

<html>
	<body>
		<a href = 'EditUnit.php'>Return to Unit Edit</a></br>

	</body>
</html>
