
<?php

session_start();
//echo $_SESSION["currentUser"];

$username="bdan89"; $password="bd179an89"; $database="cs502bdan89";
mysql_connect('dbclass2.cs.nmsu.edu', $username, $password);
@mysql_select_db($database) or die( "Unable to select database\n");
$temp=$_SESSION["currentUser"];


echo "Property :". "<br>";
$result=mysql_query("SELECT * FROM Property");
while($row=mysql_fetch_array($result, MYSQL_ASSOC)){
	echo "PropertyID: ". $row['PropertyID']. "<br>";
	echo "Property Name: ". $row['PropertyName']. "<br>";
	echo "Street Name: ". $row['StreetName']. "<br>";
	echo "Street Number : ". $row['StreetNumber']. "<br>";
	echo "City: ". $row['City']. "<br>";
	echo "State: ". $row['State']. "<br>";
	echo "Zip: ". $row['Zip']. "<br>";
	echo "ManagerUID: ". $row['ManagerUID']. "<br>";
	echo "<br>";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Property Info </title>
</head>

<html>
	<body>
		<form action = "AddProperty.php" method = "POST">
			<b> Create a new Property Here: </b>
			<p> New Property Name : <input type="text" name="pName" value=""/>
			</p>
			<b> Address</b>
			<p> Property Street Name : <input type="text" name="sName" value=""/>
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
			<b> Manager of property </b>
			<p> ManagerUID: <input type="text" name="manID" value=""/>
			</p>
			<p> <input type="submit" name="submit" value="Submit"/>
			</p>
		</form>
		<form action = "UpdateProperty.php" method = "POST">
			<b> Enter PropertyID of Property to update </b>
			<p> PropertyID : <input type="text" name="PID" value=""/>
			</p>
			<b> Change Property Name </b>
			<p> New Name : <input type="text" name="pName" value=""/>
			</p>
			<b> Change Property Manager </b>
			<p> Manager UID : <input type="text" name="manID" value=""/>
			</p>
			<p> <input type="submit" name="submit" value="Submit"/>
			</p>
		</form>
		<a href = 'StaffDashboard.php'>Return to Staff Dashboard</a></br>

	</body>
</html>
