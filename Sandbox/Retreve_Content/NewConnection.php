<?php
	$servername = "localhost:3308";
	$username = "student";
	$password = "123456";
 // Create Connection
	$conn = new mysqli($servername, $username, $password);
// Check Connection
	if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}
//Create Database
	$sql = "CREATE DATABASE myDB";
	if ($conn->query($sql) === TRUE)
	{
		echo "Database created successfully";
	}
	else 
	{
		echo "Error creating database: " . $conn->error;
	}
	$conn->close();

?>