<?php
session_start();

$username="bdan89"; $password="bd179an89"; $database="cs502bdan89";
mysql_connect('dbclass2.cs.nmsu.edu', $username, $password);
@mysql_select_db($database) or die( "Unable to select database\n");
//echo "\n fff \n";


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$type = trim($_POST['type']);
	$pid = trim($_POST['propIP']);
	$aNum = trim($_POST['aNum']);

} else {
	echo "Something went wong!!\n";
}

$temp=$_SESSION["currentUser"];

$result=mysql_query("SELECT MAX(JobID) FROM MaintainReq");
if(!$result){
	echo 'Could not run query: ' . mysql_error();
	exit;
}
$row=mysql_fetch_row($result);
$new=$row[0]+1;

if($type!='carpet shampoo' and $type!='repairs' and $type!='replacement')
{
	echo" Job type must be 'carpet shampoo', 'repairs', or 'replacement', update failed.";

}
else{

$query = "insert into MaintainReq values ($new, NOW(),'$type','$temp', $pid, $aNum)";
mysql_query($query);
echo "Job Added\n";

}
//echo 'hhhh';

mysql_close();
//echo "\nclosed\n";


?>

<!DOCTYPE html>
<html>
<head>
	<title> Add Job </title>
</head>

<html>
	<body>
		<a href = 'MaintenanceView.php'>Return to Maintenance Page</a></br>
	</body>
</html>
