<?php

$username="bdan89"; $password="bd179an89"; $database="cs502bdan89";
mysql_connect('dbclass2.cs.nmsu.edu', $username, $password);
@mysql_select_db($database) or die( "Unable to select database\n");
//echo "\n fff \n";


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$pNum = trim($_POST['pNum']);
	$sName = trim($_POST['sName']);
	$sNum = trim($_POST['sNum']);
	$city = trim($_POST['city']);
	$state = trim($_POST['state']);
	$zip = trim($_POST['zip']);

} else {
	echo "Something went wong!!\n";
}

$temp=$_SESSION["currentUser"];

$result=mysql_query("SELECT MAX(OfficeID) FROM Office");
if(!$result){
	echo 'Could not run query: ' . mysql_error();
	exit;
}
$row=mysql_fetch_row($result);
$new=$row[0]+1;

$query = "insert into Office values ($new, $pNum,'$sName',$sNum, '$city', '$state', $zip)";
mysql_query($query);
echo "Office Added\n";

mysql_close();
?>


<!DOCTYPE html>
<html>
<head>
	<title> Add Office </title>
</head>

<html>
	<body>
		<a href = 'EditOffice.php'>Return to Office Page</a></br>
	</body>
</html>
