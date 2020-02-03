<?php

$username="bdan89"; $password="bd179an89"; $database="cs502bdan89";
mysql_connect('dbclass2.cs.nmsu.edu', $username, $password);
@mysql_select_db($database) or die( "Unable to select database\n");
//echo "\n fff \n";


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$user = trim($_POST['username']);
	$password = trim($_POST['password']);
	$fname = trim($_POST['fname']);
	$lname = trim($_POST['lname']);
	$email = trim($_POST['email']);
	$dob = trim($_POST['dob']);
} else {
	echo "Something went wong!!\n";
}

$result=mysql_query("SELECT count(*) cc FROM Tenant");
if(!$result){
	echo 'Could not run query: ' . mysql_error();
	exit;
}
$row=mysql_fetch_row($result);


if(strlen($user)<8 or strlen($user)>16)
{
echo'username must be between 8 and 16 characters, account not created';

}
else
{
$result=mysql_query("SELECT count(*) FROM User where UserID = '$user'");
$row2=mysql_fetch_row($result);
echo $row2[0];
if($row2[0]>0){
	echo'username already exists, please try again';
}
else{

$query = "insert into User values ('$user','$password','$fname','$lname','$dob','$email')";
mysql_query($query);
$query = "insert into Tenant values ('$user','$row[0]')";
mysql_query($query);
$query = "insert into UserPhoneNumber values ('$user', 0000000000)";
mysql_query($query);
echo 'User Added!';
}
//echo 'hhhh';
}

mysql_close();
//echo "\nclosed\n";


?>

<!DOCTYPE html>
<html>
<head>
	<title> Request Made! </title>
</head>

<html>
	<body>
		<a href = 'index.php'>Return to Start</a></br>
		<a href = 'TenantIndex.php'>Return to Tenant Page</a></br>
	</body>
</html>
