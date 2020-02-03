<?php

session_start();

$username="bdan89"; $password="bd179an89"; $database="cs502bdan89";
mysql_connect('dbclass2.cs.nmsu.edu', $username, $password);
@mysql_select_db($database) or die( "Unable to select database\n");
//echo "\n fff \n";


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$job = trim($_POST['jobID']);
	$type = trim($_POST['jobType']);

} else {
	echo "Something went wong!!\n";
}

$result=mysql_query("SELECT * FROM MaintainReq WHERE JobID= $job");
if(!$result){
	echo 'Could not run query: ' . mysql_error();
	exit;
}
if(mysql_num_rows($result) < 1){
	echo 'No Job with that ID found';
}
else{

if($type!='carpet shampoo' and $type!='repairs' and $type!='replacement')
{
	echo" Job type must be 'carpet shampoo', 'repairs', or 'replacement', update failed.";

}
else{
	$result= "UPDATE MaintainReq SET RequestedJob= '$type' where JobID=$job";
	mysql_query($result);
	echo 'Job Updated!';
}

}
mysql_close();
?>

<!DOCTYPE html>
<html>
<head>
	<title> Update Job </title>
</head>

<html>
	<body>
		<a href = 'MaintenanceView.php'>Return to Maintenance Page</a></br>
	</body>
</html>
