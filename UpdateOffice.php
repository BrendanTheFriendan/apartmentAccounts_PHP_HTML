<?php
session_start();

$username="bdan89"; $password="bd179an89"; $database="cs502bdan89";
mysql_connect('dbclass2.cs.nmsu.edu', $username, $password);
@mysql_select_db($database) or die( "Unable to select database\n");

$temp=$_SESSION["currentUser"];

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$oid = trim($_POST['OID']);
	$pNum = trim($_POST['pNum']);
} else {
	echo "Something went wong!!\n";
}

$query = "UPDATE Office SET PhoneNumber= '$pNum'WHERE UserID= '$oid'";
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
		<a href = 'EditOffice.php'>Return to Office Edit</a></br>

	</body>
</html>
