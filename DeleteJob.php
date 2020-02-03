<?php

session_start();

$username="bdan89"; $password="bd179an89"; $database="cs502bdan89";
mysql_connect('dbclass2.cs.nmsu.edu', $username, $password);
@mysql_select_db($database) or die( "Unable to select database\n");
//echo "\n fff \n";


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$job = trim($_POST['jobID']);
	$userID = trim($_POST['user']);
	$employID = trim($_POST['empID']);
	$pass = trim($_POST['pass']);
} else {
	echo "Something went wong!!\n";
}

$result=mysql_query("SELECT * FROM Manager WHERE UserID= '$userID' and EmployeeID='$employID'");
if(!$result){
	echo 'Could not run query: ' . mysql_error();
	exit;
}
if(mysql_num_rows($result) < 1){
	echo 'No Manager with those credentials found';
}
else{
$result=mysql_query("SELECT * FROM User WHERE UserID= '$userID' and Password= '$pass'");
	if(mysql_num_rows($result) < 1){
		echo 'Password did not match username';
	}
	else{

		echo "Credentials Approved \n";
		$result="DELETE FROM MaintainReq where JobID=$job";
		mysql_query($result);
		echo "Job Deleted \n";
		
	
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Delete Job </title>
</head>

<html>
	<body>
		<a href = 'MaintenanceView.php'>Return to Maintenance Page</a></br>
	</body>
</html>
