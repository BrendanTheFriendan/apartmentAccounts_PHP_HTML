<?php

$username="bdan89"; $password="bd179an89"; $database="cs502bdan89";
mysql_connect('dbclass2.cs.nmsu.edu', $username, $password);
@mysql_select_db($database) or die( "Unable to select database\n");
//echo "\n fff \n";


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$pName = trim($_POST['pName']);
	$sName = trim($_POST['sName']);
	$sNum = trim($_POST['sNum']);
	$city = trim($_POST['city']);
	$state = trim($_POST['state']);
	$zip = trim($_POST['zip']);
	$manID = trim($_POST['manID']);

} else {
	echo "Something went wong!!\n";
}

$temp=$_SESSION["currentUser"];

$result=mysql_query("SELECT MAX(PropertyID) FROM Property");
if(!$result){
	echo 'Could not run query: ' . mysql_error();
	exit;
}
$row=mysql_fetch_row($result);
$new=$row[0]+1;


$result=mysql_query("SELECT * FROM Manager where UserID=$manID");
$row2=mysql_fetch_row($result);
	//echo $row2[0];
	if($row2[0]<1){
	echo'ManagerID doesnt exist';
	}
	else{
	$query = "insert into Property values ($new, '$pName','$sName',$sNum, '$city', '$state', $zip, '$manID')";
	mysql_query($query);
	echo "Property Added\n";
	}
mysql_close();
?>


<!DOCTYPE html>
<html>
<head>
	<title> Add Property </title>
</head>

<html>
	<body>
		<a href = 'EditProperty.php'>Return to Property Page</a></br>
	</body>
</html>
