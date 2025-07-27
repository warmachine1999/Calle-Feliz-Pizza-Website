<?php
	$Customer_firstname = $_POST['Customer_firstname'];
	$Customer_middlename = $_POST['Customer_middlename'];
	$Customer_lastname = $_POST['Customer_lastname'];
	$Customer_address = $_POST['Customer_address'];
	$Customer_zipcode = $_POST['Customer_zipcode'];
	$Customer_phone = $_POST['Customer_phone'];
	$reference = $_POST['reference'];

	// Database connection
	$conn = new mysqli('localhost','root','','product_detail');
	if($conn -> connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		
		$stmt = $conn->prepare("insert into customer_table(Customer_firstname,Customer_middlename,Customer_lastname,customer_address,Customer_zipcode,Customer_phone,reference) 
		values(?, ?, ?, ?, ?,?,?)");
		$stmt->bind_param("ssssiii", $Customer_firstname, $Customer_middlename, 
		$Customer_lastname, $Customer_address,$Customer_zipcode,$Customer_phone,$reference);
		$execval = $stmt->execute();
		
		echo"
		<html>
				<body>
				<script>
				window.alert('CHECKOUT SUCCESSFUL');
				window.location.replace('../pages/pizzas.php')</script>
				</body>
				</html>
		";
		$stmt->close();
		$conn->close();
		
		
		
	}

?>