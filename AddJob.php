<!DOCTYPE html>

<html>
	<head>
		<title>Job Add </title>
	</head>
	
	<body>
		<form action = "InsertJob.php" method = "POST">
			<b> Add new Job </b>
			<p> Requested job (carpet shampoo, repairs, or replacement) : <input type="text" name="type" value=""/>
			</p>
			<p> PropertyID : <input type="text" name="propID" value=""/>
			</p>
			<p> ApartmentNumber : <input type="text" name="aNum" value=""/>
			</p>
			<p> <input type="submit" name="submit" value="Submit"/>
			</p>
		</form>

		<a href = 'MaintenanceView.php'>Return to Maintenance Page</a></br>
	</body>
</html>


