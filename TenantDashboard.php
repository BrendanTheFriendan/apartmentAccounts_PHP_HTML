<?php

session_start();
//echo $_SESSION["currentUser"];

?>

<!DOCTYPE html>
<html>
<head>
	<title> Welcome Tenant! </title>
</head>

<html>
	<body>
		<a href = 'TenantView.php'>View</a></br>
		<a href = 'TenantEdit.php'>Edit</a></br>
		<a href = 'TenantPay.php'>Pay</a></br>
		<a href = 'index.php'>Logout</a></br>
	</body>
</html>
