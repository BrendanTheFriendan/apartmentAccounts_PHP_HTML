<?php

session_start();

$username="bdan89"; $password="bd179an89"; $database="cs502bdan89";
mysql_connect('dbclass2.cs.nmsu.edu', $username, $password);
@mysql_select_db($database) or die( "Unable to select database\n");
echo "\n fff \n";

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
} else {
	echo "Something went wong! (StaffCredentials) \n";
}

$_SESSION["currentUser"]= $username;

$result=mysql_query("SELECT * FROM Staff WHERE UserID= '$username'");
if(!$result){
	echo 'Could not run query: ' . mysql_error();
	exit;
}
if(mysql_num_rows($result) < 1){
	echo 'No Staff with that username found';
	header("Location: StaffFailedLogin.php");
}
else{
$result=mysql_query("SELECT * FROM User WHERE UserID= '$username' and Password= '$password'");
	if(mysql_num_rows($result) < 1){
		echo 'Password did not match username';
		header("Location: StaffFailedLogin.php");
	}
	else{
		

		header("Location: StaffDashboard.php");
		echo 'Login Successful';
	}
}

?>
