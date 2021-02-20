<!DOCTYPE>
<html>
<title>Conditional Script</title>
<body>
<?php
$IntVariable = 75;
($IntVariable > 100) ? // if 
	$Result = '$IntVariable is greater than 100' : // else
	$Result = '$IntVariable is less than or equal to 100';

echo "<p>$Result</p>";

?>
</body>
</html>

