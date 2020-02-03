<?php
session_start();

$username="bdan89"; $password="bd179an89"; $database="cs502bdan89";
mysql_connect('dbclass2.cs.nmsu.edu', $username, $password);
@mysql_select_db($database) or die( "Unable to select database\n");

$temp=$_SESSION["currentUser"];

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$phone = trim($_POST['phone']);
} else {
	echo "Something went wong!!\n";
}
$num_length=strlen((string)$phone);
if($num_length>10){
	mysql_close();
	echo 'Number must be no more than 10 digits, edit failed! <br>';
}
else
{
$query = "UPDATE UserPhoneNumber SET PhoneNUmber= '$phone'WHERE UserID= '$temp'";
mysql_query($query);
mysql_close();
echo 'Update Successful! <br>';
}

?>


<!DOCTYPE html>
<html>
<head>
	<title> Phone Number Update </title>
</head>

<html>
	<body>
		<a href = 'ManagerDashboard.php'>Return to Manager Dashboard</a></br>

	</body>
</html>
