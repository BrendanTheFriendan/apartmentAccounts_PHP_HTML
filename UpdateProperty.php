<?php
session_start();

$username="bdan89"; $password="bd179an89"; $database="cs502bdan89";
mysql_connect('dbclass2.cs.nmsu.edu', $username, $password);
@mysql_select_db($database) or die( "Unable to select database\n");

$temp=$_SESSION["currentUser"];

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$PID = trim($_POST['PID']);
	$pName = trim($_POST['pName']);
	$manID = trim($_POST['manID']);
} else {
	echo "Something went wong!!\n";
}

$query = "UPDATE Property SET PropertyName= '$pName'WHERE PropertyID= '$PID'";
mysql_query($query);
$query = "UPDATE Property SET ManagerUID= '$manID'WHERE PropertyID= '$PID'";
mysql_query($query);
mysql_close();
echo 'Update Successful! <br>';

?>


<!DOCTYPE html>
<html>
<head>
	<title> Office Update </title>
</head>

<html>
	<body>
		<a href = 'EditProperty.php'>Return to Property Edit</a></br>

	</body>
</html>
