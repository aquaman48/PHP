<?php
	$servername = "localhost:3308";
	$username = "student";
	$password = "123456";
	$connection = mysqli_connect($servername, $username, $password);
	if ($connection==FALSE)
		echo "<p>Unable to execute the query.</p>" . "<p>Error code " . mysql_errno($connection);
	else echo "<p>Successfully connected. </p>";
	
	
	mysqli_close($connection);



?>