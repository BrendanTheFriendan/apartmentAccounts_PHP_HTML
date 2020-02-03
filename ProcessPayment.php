<?php

session_start();

$username="bdan89"; $password="bd179an89"; $database="cs502bdan89";
mysql_connect('dbclass2.cs.nmsu.edu', $username, $password);
@mysql_select_db($database) or die( "Unable to select database\n");
echo "\n fff \n";

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$payType = trim($_POST['paymentType']);
	$amount = trim($_POST['amount']);
} else {
	echo "Something went wong! (TenantCredentials) \n";
}

$temp=$_SESSION["currentUser"];


$result=mysql_query("SELECT count(*) cc FROM Payment");
if(!$result){
	echo 'Could not run query: ' . mysql_error();
	exit;
}
//look to InsertTenant for example

$row=mysql_fetch_row($result);
echo $row[0];

if($payType!='Credit' and $payType!='Debit' and $payType!='Check')
{
echo'Payment Type must be Credit, Check, or Debit account not created';

}
else
{
$result=mysql_query("SELECT * FROM StayIn where TenantUID = '$temp'");
$row2=mysql_fetch_array($result, MYSQL_ASSOC);
$pid=$row2['PropertyID'];
$apNum=$row2['ApartmentNumber'];
$query = "insert into Payment values ($row[0], '$payType', $amount, NOW())";
echo $query;
mysql_query($query);
$query = "insert into MakePayment values ('$temp',$pid, $apNum, $row[0])";
echo $query;
mysql_query($query);


echo 'Payment Made';
}

mysql_close();
echo "\nclosed\n";

?>

<!DOCTYPE html>
<html>
<head>
	<title> Payment Made</title>
</head>

<html>
	<body>
		<a href = 'TenantDashboard.php'>Return to Tenant Dashboard</a></br>

	</body>
</html>
