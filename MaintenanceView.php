<?php

session_start();
//echo $_SESSION["currentUser"];

$username="bdan89"; $password="bd179an89"; $database="cs502bdan89";
mysql_connect('dbclass2.cs.nmsu.edu', $username, $password);
@mysql_select_db($database) or die( "Unable to select database\n");
$temp=$_SESSION["currentUser"];
//echo $temp;


$result=mysql_query("SELECT * FROM PropertyUnit");
while($row=mysql_fetch_array($result, MYSQL_ASSOC)){
	echo "PropertyID: ". $row['PropertyID']. "<br>";
	echo "ApartmentNumber: ".$row['ApartmentNumber']. "<br>";
	$prop=$row['PropertyID'];
	$apNum=$row['ApartmentNumber'];
	$result2=mysql_query("SELECT * FROM MaintainReq where PropertyID= $prop and ApartmentNumber=$apNum");
	while($row2=mysql_fetch_array($result2, MYSQL_ASSOC)){
		echo "Maintenance JobID: ".$row2['JobID']. "<br>";
		echo "JobDate: ".$row2['JobDate']. "<br>";
		echo "Requested Job: ".$row2['RequestedJob']. "<br> <br>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Maintenance Info </title>
</head>

<html>
	<body>
		<form action = "DeleteJob.php" method = "POST">
			<b> Enter JobID to delete job </b>
			<p> Maintenance JobID : <input type="text" name="jobID" value=""/>
			</p>
			<b> Enter UserID </b>
			<p> Manager UserID : <input type="text" name="user" value=""/>
			</p>
			<b> Enter EmployeeID </b>
			<p> Manager EmployeeID : <input type="text" name="empID" value=""/>
			</p>
			<b> Enter Password </b>
			<p> Manager Password: <input type="text" name="pass" value=""/>
			</p>
			<p> <input type="submit" name="submit" value="Submit"/>
			</p>
		</form>
		<form action = "UpdateJob.php" method = "POST">
			<b> Enter JobID of job to update </b>
			<p> Maintenance JobID : <input type="text" name="jobID" value=""/>
			</p>
			<b> Change Job Type (carpet shampoo, repairs, or replacement) </b>
			<p> New Job Type : <input type="text" name="jobType" value=""/>
			</p>
			<p> <input type="submit" name="submit" value="Submit"/>
			</p>
		</form>
		<a href = 'AddJob.php'>Request New Job</a></br>
		<a href = 'ManagerDashboard.php'>Return to Manager Dashboard</a></br>

	</body>
</html>
