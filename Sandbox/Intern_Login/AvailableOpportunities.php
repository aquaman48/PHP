<?php
	session_start();
?>

<!DOCTYPE>
<html>
<head>
	<title>Available Opportunities</title>
</head>
<body>
	<h1>College Internship</h1>
	<h2>Available Opportunities</h2>
	<?php
		if (isset($_COOKIE['LastRequestDate']))
			 $LastRequestDate = $_COOKIE['LastRequestDate'];
		else
			 $LastRequestDate = "";
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
					   "Error code " . mysql_errno($DBConnect) . ": " .
					   mysql_error($DBConnect) . "</p>\n";
				  ++$errors;
			 }
		}
		$TableName = "interns";
		if ($errors == 0) {
			 $SQLstring = "SELECT * FROM $TableName WHERE " .
			 		   " internID = '" . $_SESSION['internID'] = 1 . "'";
			 $QueryResult = @mysqli_query($DBConnect, $SQLstring);
			 if ($QueryResult === FALSE) {
				  echo "<p>Unable to execute the query. " . 
					   "Error code " . mysql_errno($DBConnect) . ": " .
					   mysql_error($DBConnect) . "</p>\n";
				  ++$errors;
			 }
			 else {
				  if (mysqli_num_rows($QueryResult) == 0) {
					   echo "<p>Invalid Intern ID!</p>";
					   ++$errors;
				  }
			 }
		}
		if ($errors == 0) {
			 $Row = mysqli_fetch_assoc($QueryResult);
			 $InternName = $Row['first'] . " " . $Row['last'];
		} else
			 $InternName = "";
		$TableName = "assigned_opportunities";
		$ApprovedOpportunities = 0;
		$SQLstring = "SELECT COUNT(opportunityID) FROM $TableName " .
				  " WHERE internID='" . $_SESSION['internID']=1 . "' " .
				  " AND date_approved IS NOT NULL";
		$QueryResult = @mysqli_query($DBConnect, $SQLstring);
		if (mysqli_num_rows($QueryResult) > 0) {
			 $Row = mysqli_fetch_row($QueryResult);
			 $ApprovedOpportunities = $Row[0];
			 mysqli_free_result($QueryResult);
		}
		$SelectedOpportunities = array();
		$SQLstring = "SELECT opportunityID FROM $TableName " .
				  " WHERE internID='" . $_SESSION['internID']=1 . "'";
		$QueryResult = @mysqli_query($DBConnect, $SQLstring);
		if (mysqli_num_rows($QueryResult) > 0) {
			 while (($Row = mysqli_fetch_row($QueryResult)) !== FALSE)
				  $SelectedOpportunities[] = $Row[0];
			 mysqli_free_result($QueryResult);
		}
		$AssignedOpportunities = array();
		$SQLstring = "SELECT opportunityID FROM $TableName " .
				  " WHERE date_approved IS NOT NULL";
		$QueryResult = @mysqli_query($DBConnect, $SQLstring);
		if (mysqli_num_rows($QueryResult) > 0) {
			 while (($Row = mysqli_fetch_row($QueryResult)) !== FALSE)
				  $AssignedOpportunities[] = $Row[0];
			 mysqli_free_result($QueryResult);
		}
		if (!empty($LastRequestDate))
			echo "<p>You last requested an internship
				opportunity " .
				" on $LastRequestDate.</p>\n";
		$TableName = "opportunities";
		$Opportunities = array();
		$SQLstring = "SELECT opportunityID, company, city, " .
				  " start_date, end_date, position, description " .
				  " FROM $TableName";
		$count = 1;  
		
		$QueryResult = mysqli_query($DBConnect, $SQLstring);
		$numRows = mysqli_num_rows($QueryResult);
		
		if (mysqli_num_rows($QueryResult) > 0) {
			 while ($count <= $numRows)	{			 
				  $Opportunities[] = mysqli_fetch_assoc($QueryResult);
				  $count++;
			 }
			 mysqli_free_result($QueryResult);
		}
	
		mysqli_close($DBConnect);
		if (!empty($LastRequestDate))
			 echo "<p>You last requested an internship opportunity " .
					   " on $LastRequestDate.</p>\n";

		echo "<table border='1' width='100%'>\n";
		echo "<tr>\n";
		echo "     <th style='background-color:cyan'>Company</th>\n";
		echo "     <th style='background-color:cyan'>City</th>\n";
		echo "     <th style='background-color:cyan'>Start Date</th>\n";
		echo "     <th style='background-color:cyan'>End Date</th>\n";
		echo "     <th style='background-color:cyan'>Position</th>\n";
		echo "     <th style='background-color:cyan'>Description</th>\n";
		echo "     <th style='background-color:cyan'>Status</th>\n";
		echo "</tr>\n";
		
		foreach ($Opportunities as $Opportunity) {
			 if (!in_array($Opportunity['opportunityID'],
					   $AssignedOpportunities)) {
				  echo "<tr>\n";
				  echo "     <td>" . 
							htmlentities($Opportunity['company']) . 
							"</td>\n";
				  echo "     <td>" . 
							htmlentities($Opportunity['city']) . 
							"</td>\n";
				  echo "     <td>" . 
							htmlentities($Opportunity['start_date']) . 
							"</td>\n";
				  echo "     <td>" . 
							htmlentities($Opportunity['end_date']) . 
							"</td>\n";
				  echo "     <td>" . 
							htmlentities($Opportunity['position']) . 
							"</td>\n";
				  echo "     <td>" . 
							htmlentities($Opportunity['description']) . 
							"</td>\n";
				  echo "     <td>";
				  if (in_array($Opportunity['opportunityID'],
							$SelectedOpportunities))
					   echo "Selected<br />" .
							 "<a href='CancelSelection.php?" .
							 SID . "&opportunityID=" .
							 $Opportunity['opportunityID'] .
							 "'>Cancel Selection</a>";
					   
				  else {
					   if ($ApprovedOpportunities>0)
							echo "Open";
					   else
							echo "<a href='RequestOpportunity.php?" .
								 SID . "'>Available</a>";
				  }
				  echo "</td>\n";
				  echo "</tr>\n";
			 }
		}
		
		echo "</table>\n";
		echo "<p><a href='InternLogin.php'>Log Out</a></p>\n";
	?>
</body>
</html>