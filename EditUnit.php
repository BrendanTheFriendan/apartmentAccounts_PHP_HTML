
<?php

session_start();
//echo $_SESSION["currentUser"];

$username="bdan89"; $password="bd179an89"; $database="cs502bdan89";
mysql_connect('dbclass2.cs.nmsu.edu', $username, $password);
@mysql_select_db($database) or die( "Unable to select database\n");
$temp=$_SESSION["currentUser"];

echo "Property Units:". "<br>";
$result=mysql_query("SELECT * FROM PropertyUnit");
while($row=mysql_fetch_array($result, MYSQL_ASSOC)){
	echo "PropertyID: ". $row['PropertyID']. "<br>";
	echo "Rent: ". $row['Rent']. "<br>";
	echo "Available? : ". $row['Availability']. "<br>";
	echo "Number of Bedrooms: ". $row['NumberOfBedRoom']. "<br>";
	echo "Number of Bathrooms: ". $row['NumberOfBathroom']. "<br>";
	echo "<br>";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Unit Info </title>
</head>

<html>
	<body>
		<form action = "AddPropertyUnit.php" method = "POST">
			<b> Create a new Unit Here: </b>
			<p> Property ID : <input type="text" name="pid" value=""/>
			</p>
			<b> Rent</b>
			<p> Enter Rent: <input type="text" name="rent" value=""/>
			</p>
			<b> Availability </b>
			<p> Enter 'Y' for yes, or 'N' for no: <input type="text" name="avail" value=""/>
			</p>
			<b> Bedrooms</b>
			<p> Number Bedrooms: <input type="text" name="bedrooms" value=""/>
			</p>
			<b> Bathrooms </b>
			<p> Number Bathrooms: <input type="text" name="bathrooms" value=""/>
			</p>
			<p> <input type="submit" name="submit" value="Submit"/>
			</p>
		</form>
		<form action = "UpdateUnit.php" method = "POST">
			<b> Enter PropertyID of Property to update </b>
			<p> PropertyID : <input type="text" name="PID" value=""/>
			</p>
			<b> Enter ApartmentNumber of unit to update </b>
			<p> Apartment Number : <input type="text" name="aNum" value=""/>
			</p>
			<b> Change Rent </b>
			<p> New Rent: <input type="text" name="rent" value=""/>
			</p>
			<p> <input type="submit" name="submit" value="Submit"/>
			</p>
		</form>
		<a href = 'StaffDashboard.php'>Return to Staff Dashboard</a></br>

	</body>
</html>
