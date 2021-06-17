<?php
	$conn = new mysqli('localhost', 'root', '', 'test'); // This piece of code connects to MySql
	if($conn->connect_error) 
	{ 
		// This is checking if there was any error in connecting
		die("Connection failed: " . $conn->connect_error); // This will kill all processes of mysqli
	}
?> 
