
<?php

session_start();
//echo $_SESSION["currentUser"];

$username="bdan89"; $password="bd179an89"; $database="cs502bdan89";
mysql_connect('dbclass2.cs.nmsu.edu', $username, $password);
@mysql_select_db($database) or die( "Unable to select database\n");
$temp=$_SESSION["currentUser"];
echo "Tenants without assigned property:\n";



$result=mysql_query("SELECT * FROM Tenant");
while($row=mysql_fetch_array($result, MYSQL_ASSOC)){
	$temp2=$row['UserID'];
	$result=mysql_query("SELECT count(*) FROM StayIn where TenantUID = '$temp2'");
	$row2=mysql_fetch_row($result);
	//echo $row2[0];
	if($row2[0]>0){
	//echo "$temp2 already assigned to Unit \n";
	}
	else{
		echo "UserID: ". $row['UserID']. "<br>";
	}
}

echo "\n Available Property Units:\n";
$result=mysql_query("SELECT * FROM PropertyUnit where Availability='Y'");
while($row=mysql_fetch_array($result, MYSQL_ASSOC)){
	echo "PropertyID: ". $row['PropertyID']. "<br>";
	echo "Apartment Number: ". $row['ApartmentNumber']. "<br>";
	echo "Rent: ". $row['Rent']. "<br>";
	echo "Number of Bedrooms: ". $row['NumberOfBedRoom']. "<br>";
	echo "Number of Bathrooms: ". $row['NumberOfBathroom']. "<br>";
	echo "<br>";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Manage Property </title>
</head>

<html>
	<body>
		<form action = "AssignUnit.php" method = "POST">
			<b> Enter PropertyID to assign a tenant to </b>
			<p> PropertyID : <input type="text" name="propID" value=""/>
			</p>
			<b> Enter Appartment Number</b>
			<p> Appartment Number : <input type="text" name="apNum" value=""/>
			</p>
			<b> Enter Tenant's UserID to add them to unit</b>
			<p> Tenant UserID : <input type="text" name="tenID" value=""/>
			</p>
			<p> <input type="submit" name="submit" value="Submit"/>
			</p>
		</form>
		<a href = 'ManagerDashboard.php'>Return to Manager Dashboard</a></br>

	</body>
</html>
