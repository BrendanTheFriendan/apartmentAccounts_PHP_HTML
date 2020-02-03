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
	$inputUID=trim($_POST['inputUID']);
	$inputEID=trim($_POST['inputEID']);
	
} else {
	echo "Something went wong!!\n";
}
	$result=mysql_query("SELECT * FROM User WHERE UserID= '$inputUID' and Password= '$oldpass'");
	if(mysql_num_rows($result) < 1){
		echo 'Password did not match username <br>';
		echo 'Update Successful! <br>';
	}
	else{
		$result=mysql_query("SELECT * FROM Manager WHERE UserID= '$inputUID' and EmployeeID= '$inputEID'");
		if(mysql_num_rows($result) < 1){
		echo 'EmployeeID did not match UserID <br>';
		echo 'Update Failed! <br>';
		}
		else{
			if($temp==$inputUID){
			echo 'Credentials Approved <br>';
			$query = "UPDATE User SET Password= '$newpass'WHERE UserID= '$inputUID'";
			mysql_query($query);

			echo 'Update Successful! <br>';
			}
			else{
				echo 'Input UserID did not match logged in user <br>';
			}
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
		<a href = 'ManagerDashboard.php'>Return to Manager Dashboard</a></br>
	</body>
</html>
