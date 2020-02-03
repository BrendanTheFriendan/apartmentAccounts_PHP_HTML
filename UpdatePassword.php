<?php
session_start();

$username="bdan89"; $password="bd179an89"; $database="cs502bdan89";
mysql_connect('dbclass2.cs.nmsu.edu', $username, $password);
@mysql_select_db($database) or die( "Unable to select database\n");

$temp=$_SESSION["currentUser"];

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$oldpass = trim($_POST['currentPass']);
	$newpass = trim($_POST['newPass']);
	$inputID=trim($_POST['inputID']);
	
} else {
	echo "Something went wong!!\n";
}
	$result=mysql_query("SELECT * FROM User WHERE UserID= '$inputID' and Password= '$oldpass'");
	if(mysql_num_rows($result) < 1){
		echo 'Password did not match username <br>';
		echo 'Update Successful! <br>';
	}
	else{
		if($temp==$inputID){
		echo 'Credentials Approved <br>';
		$query = "UPDATE User SET Password= '$newpass'WHERE UserID= '$inputID'";
		mysql_query($query);

		echo 'Update Successful! <br>';
		}
		else{
			echo 'Input UserID did not match logged in user <br>';
		}
	}
mysql_close();

?>

<!DOCTYPE html>
<html>
<head>
	<title> Password Update </title>
</head>
<html>
	<body>
		<a href = 'TenantDashboard.php'>Return to Tenant Dashboard</a></br>
	</body>
</html>
