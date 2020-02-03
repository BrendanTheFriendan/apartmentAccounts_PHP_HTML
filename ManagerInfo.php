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

$result=mysql_query("SELECT * FROM Manager WHERE UserID= '$temp'");
while($row=mysql_fetch_array($result, MYSQL_ASSOC)){
	echo "EmployeeID: ".$row['EmployeeID']. "<br>";
	$temp2=$row['OfficeID'];
	//Get the Office info
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
	//Now get all staff members
	$result2=mysql_query("SELECT * FROM Staff WHERE OfficeID= '$temp2'");
	while($row2=mysql_fetch_array($result2, MYSQL_ASSOC)){
		echo"<br>";
		echo "Staff EmployeeID: ". $row2['EmployeeID']. "<br>";
		echo "Staff Title: ". $row2['Title']. "<br>";
		$temp3=$row2['UserID'];
		$result3=mysql_query("SELECT * FROM User WHERE UserID= '$temp3'");
		while($row3=mysql_fetch_array($result3, MYSQL_ASSOC)){
			echo "Staff FirstName : ". $row3['FirstName']. "<br>";
			echo "Staff LastName : ". $row3['LastName']. "<br>";
			echo "Staff Birthday : ". $row3['Birthday']. "<br>";
			echo "Staff Email : ". $row3['Email']. "<br>";
		}
		$result3=mysql_query("SELECT * FROM UserPhoneNumber WHERE UserID= '$temp3'");
		while($row3=mysql_fetch_array($result3, MYSQL_ASSOC)){
			echo "Staff Phone # : ". $row3['PhoneNUmber']. "<br>";
		}
	}
}
mysql_close();
//echo "\nclosed\n";
?>

<!DOCTYPE html>
<html>
<head>
	<title> Manager Info </title>
</head>

<html>
	<body>
		<a href = 'ManagerDashboard.php'>Return to Manager Dashboard</a></br>

	</body>
</html>
