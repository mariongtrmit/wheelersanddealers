<?php
	
	
	// Database connection
	require 'conn.php';

	// grab users email id
	$email_id = $_POST['postaddress'];
	
	// main query
	$queryRecords = "SELECT * FROM users WHERE `customer_email` = '{$email_id}'";
	$result = mysqli_query($conn, $queryRecords);
	
	// Test query error
	if(!$result){
			die("Database query failed. ");
	}

	while($row = mysqli_fetch_assoc($result)){
		
		$access_levels = $row[access_level];	
		
	}
	
	if($access_levels == 0) {
		
		echo "0";
	}
	
	if($access_levels == 1) {
		
		echo "1";
	}
	
	if($access_levels == 2) {
		
		echo "2";
		
	}
	
	if($access_levels == 3) {
		
		echo "3";
	}
	
	if($access_levels == 4) {
		
		echo "4";
	}
	
	
?>



