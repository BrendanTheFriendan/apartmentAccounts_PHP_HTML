
<?php

session_start();
//echo $_SESSION["currentUser"];

$username="bdan89"; $password="bd179an89"; $database="cs502bdan89";
mysql_connect('dbclass2.cs.nmsu.edu', $username, $password);
@mysql_select_db($database) or die( "Unable to select database\n");
$temp=$_SESSION["currentUser"];

echo "All Offices:". "<br>";
$result=mysql_query("SELECT * FROM Office");
while($row=mysql_fetch_array($result, MYSQL_ASSOC)){
	echo "OfficeID: ". $row['OfficeID']. "<br>";
	echo "Phone Number: ". $row['PhoneNumber']. "<br>";
	echo "Street Name: ". $row['StreetNumber']. "<br>";
	echo "City: ". $row['CIty']. "<br>";
	echo "State: ". $row['State']. "<br>";
	echo "Zip: ". $row['Zip']. "<br>";
	echo "<br>";
}

?>


<!DOCTYPE html>
<html>
<head>
	<title> Office Info </title>
</head>

<html>
	<body>
		<form action = "AddOffice.php" method = "POST">
			<b> Create a new Office Here: </b>
			<p> Office Phone Number : <input type="text" name="pNum" value=""/>
			</p>
			<b> Street Name</b>
			<p> Office Street Name : <input type="text" name="sName" value=""/>
			</p>
			<b> Street Number </b>
			<p> Street Number : <input type="text" name="sNum" value=""/>
			</p>
			<b> City of property </b>
			<p> City: <input type="text" name="city" value=""/>
			</p>
			<b> State of property (2 character value)</b>
			<p> State: <input type="text" name="state" value=""/>
			</p>
			<b> Zip of property </b>
			<p> Zip: <input type="text" name="zip" value=""/>
			</p>
			<p> <input type="submit" name="submit" value="Submit"/>
			</p>
		</form>
		<form action = "UpdateOffice.php" method = "POST">
			<b> Enter OfficeID of Office to update </b>
			<p> PropertyID : <input type="text" name="OID" value=""/>
			</p>
			<b> Change Office Phone Number </b>
			<p> New Number : <input type="text" name="pNum" value=""/>
			</p>
			<p> <input type="submit" name="submit" value="Submit"/>
			</p>
		</form>
		<a href = 'StaffDashboard.php'>Return to Staff Dashboard</a></br>

	</body>
</html>
