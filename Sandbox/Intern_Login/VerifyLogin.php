<!DOCTYPE>
<html>
<header>
<title>Verify Intern Login</title>
<body>
<h1>College Internship</h1>
<h2>Verify Intern Login</h2>
<?php
$errors = 0;
$DBConnect = @mysqli_connect("localhost:3308", "student", "123456");
if ($DBConnect === FALSE) {
     echo "<p>Unable to connect to the database server. " .
          "Error code " . mysql_errno() . ": " .
          mysql_error() . "</p>\n";
     ++$errors;
} 
else {
     $DBName = "internships";
     $result = @mysqli_select_db($DBConnect, $DBName);
     if ($result === FALSE) {
          echo "<p>Unable to select the database. " .
               "Error code " . mysql_errno($DBConnect) . 
               ": " . mysql_error($DBConnect) . "</p>\n";
          ++$errors;
     }
}
	$TableName = "interns";
		if ($errors == 0) {
			$SQLstring = "SELECT internID, first, last FROM $TableName". " where email='".stripslashes($_POST['email']) ."' and password_md5='".md5(stripslashes($_POST['password'])) ."'";
			$QueryResult = @mysqli_query($DBConnect, $SQLstring);
				if (mysqli_num_rows($QueryResult) == 0) {
					echo"<p>The e-mail address/password combination entered is not valid.</p>\n";
					++$errors;
            }
				else {
				$Row = mysqli_fetch_assoc($QueryResult);
				$InternID = $Row['internID'];
				$InternName = $Row['first'] ." ".$Row['last'];
				echo"<p>Welcome back, $InternName!</p>\n";
            }
        }


		if ($errors > 0) {
			echo "<p>Please use your browser's BACK button to return " . " to the form and fix the errors indicated.</p>\n";
			}
		if ($errors == 0) {
			echo "<form method='post' " . " action='AvailableOpportunities.php'>\n";
			echo "<input type='hidden' name='internID' " . " value='$InternID'>\n";
				echo "<input type='submit' name='submit' " . " value='View Available Opportunities'>\n";
				echo "</form>\n";
}
?>

</body>
</html>