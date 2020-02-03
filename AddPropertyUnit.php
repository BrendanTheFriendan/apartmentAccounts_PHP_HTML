<?php

$username="bdan89"; $password="bd179an89"; $database="cs502bdan89";
mysql_connect('dbclass2.cs.nmsu.edu', $username, $password);
@mysql_select_db($database) or die( "Unable to select database\n");
//echo "\n fff \n";


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$pid = trim($_POST['pid']);
	$rent = trim($_POST['rent']);
	$avail = trim($_POST['avail']);
	$bedrooms = trim($_POST['bedrooms']);
	$bathroom = trim($_POST['bathroom']);

} else {
	echo "Something went wong!!\n";
}

$temp=$_SESSION["currentUser"];

$result=mysql_query("SELECT MAX(ApartmentNumber) FROM PropertyUnit where PropertyID=$pid");
if(!$result){
	echo 'Could not run query: ' . mysql_error();
	exit;
}
$row=mysql_fetch_row($result);
$new=$row[0]+1;

$query = "insert into PropertyUnit values ($pid, $new ,$rent, '$avail', $bedrooms, $bathroom)";
mysql_query($query);
echo "Unit Added\n";

mysql_close();
?>


<!DOCTYPE html>
<html>
<head>
	<title> Add Property </title>
</head>

<html>
	<body>
		<a href = 'EditUnit.php'>Return to PropertyUnit Page</a></br>
	</body>
</html>
