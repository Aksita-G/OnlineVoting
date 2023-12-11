<?php
	$conn = new mysqli('voting1.mysql.database.azure.com', 'azureuser', 'database@2023', 'voting1');
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
?>