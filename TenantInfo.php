<?php

session_start();
//echo $_SESSION["currentUser"];

$username="bdan89"; $password="bd179an89"; $database="cs502bdan89";
mysql_connect('dbclass2.cs.nmsu.edu', $username, $password);
@mysql_select_db($database) or die( "Unable to select database\n");
$temp=$_SESSION["currentUser"];
//echo $temp;

$result=mysql_query("SELECT * FROM User WHERE UserID= '$temp'");
while($row=mysql_fetch_array($result, MYSQL_ASSOC)){
	echo "UserID: ". $row['UserID']. "<br>";
	echo "Password: ".$row['Password']. "<br>";
	echo "FirstName: ".$row['FirstName']. "<br>";
	echo "LastName: ".$row['LastName']. "<br>";
	echo "Birthday: ".$row['Birthday']. "<br>";
	echo "Email: ".$row['Email']. "<br>";
}
$result=mysql_query("SELECT * FROM StayIn WHERE TenantUID= '$temp'");
while($row=mysql_fetch_array($result, MYSQL_ASSOC)){
	echo"<br>";
	echo "Residence StartDate: ". $row['StartDate']. "<br>";
	echo "PropertyID: ".$row['PropertyID']. "<br>";
	echo "ApartmentNumber: ".$row['ApartmentNumber']. "<br>";
	echo "Residence EndDate: ".$row['EndDate']. "<br>";

}

$result=mysql_query("SELECT * FROM MakePayment WHERE TenantUID= '$temp'");
while($row=mysql_fetch_array($result, MYSQL_ASSOC)){
	$transaction=$row['TransactionID'];
	$result2=mysql_query("SELECT * FROM Payment WHERE TransactionID= '$result2'");
	while($row2=mysql_fetch_array($result2, MYSQL_ASSOC)){
		echo"<br>";
		echo "TransactionID: ". $row2['TransactionID']. "<br>";
		echo "PaymentMethod: ". $row2['PaymentMethod']. "<br>";
		echo "Amount: ". $row2['Amount']. "<br>";
		echo "Date Paid: ". $row2['Date']. "<br>";
	}
}


$result=mysql_query("SELECT * FROM StayIn WHERE TenantUID= '$temp'");
while($row=mysql_fetch_array($result, MYSQL_ASSOC)){
	$temp2=$row['PropertyID'];
	$result2=mysql_query("SELECT * FROM Property WHERE PropertyID= '$temp2'");
	while($row2=mysql_fetch_array($result2, MYSQL_ASSOC)){
		echo"<br>";
		echo "PropertyManager: ". $row2['ManagerUID']. "<br>";
		$temp=$row2['ManagerUID'];
	}
	
}

$result=mysql_query("SELECT * FROM Manager WHERE UserID= '$temp'");
while($row=mysql_fetch_array($result, MYSQL_ASSOC)){
	$temp2=$row['OfficeID'];
	$result2=mysql_query("SELECT * FROM Office WHERE OfficeID= '$temp2'");
	while($row2=mysql_fetch_array($result2, MYSQL_ASSOC)){
		echo"<br>";
		echo "OfficeID: ". $row2['OfficeID']. "<br>";
		echo "Office Phone: ". $row2['PhoneNumber']. "<br>";
		echo "Office StreetName: ". $row2['StreetName']. "<br>";
		echo "Office StreetNumber: ". $row2['StreetNumber']. "<br>";
		echo "Office City: ". $row2['CIty']. "<br>";
		echo "Office State: ". $row2['State']. "<br>";
		echo "Office Zip: ". $row2['Zip']. "<br>";
	}
}
mysql_close();
//echo "\nclosed\n";
?>

<!DOCTYPE html>
<html>
<head>
	<title> Tenant Info </title>
</head>

<html>
	<body>
		<a href = 'TenantDashboard.php'>Return to Tenant Dashboard</a></br>

	</body>
</html>
