<!DOCTYPE html>

<html>
	<head>
		<title>Make Payment </title>
	</head>
	
	<body>
		<form action = "ProcessPayment.php" method = "POST">
			<b> Make Payment </b>

			<p> Insert payment method (Credit, Debit, or Check) : <input type="text" name="paymentType" value=""/>
			</p>
			<p> Insert payment amount : <input type="text" name="amount" value=""/>
			</p>
			<p> <input type="submit" name="submit" value="Submit"/>
			</p>
		</form>
	</body>
</html>
