<?php

session_start();

$username="bdan89"; $password="bd179an89"; $database="cs502bdan89";
mysql_connect('dbclass2.cs.nmsu.edu', $username, $password);
@mysql_select_db($database) or die( "Unable to select database\n");
//echo "\n fff \n";


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$propID = trim($_POST['propID']);
	$apNum = trim($_POST['apNum']);
	$tenID = trim($_POST['tenID']);

} else {
	echo "Something went wong!!\n";
}

	$result= "UPDATE PropertyUnit SET Availability= 'N' where PropertyID=$propID and ApartmentNumber=$apNum";
	mysql_query($result);
	$result="INSERT into StayIn VALUES('$tenID', NOW(), $propID, $apNum, '1111-01-01')";
	mysql_query($result);
	echo "Tenant Added to Unit!\n";
	mysql_close();
?>

<!DOCTYPE html>
<html>
<head>
	<title> Update Unit </title>
</head>

<html>
	<body>
		<a href = 'ManagerDashboard.php'>Return to Manager Dashboard</a></br>
	</body>
</html>
