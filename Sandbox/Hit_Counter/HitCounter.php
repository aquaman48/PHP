<!DOCTYPE>
<html>
<title>Hit Counter</title>
<body>
<?php
	$CounterFile = "hitcount.txt";
	if(file_exists($CounterFile))
	{
		$Hits = file_get_contents($CounterFile);
		++$Hits;
	}
	else
		$Hits = 1;
	echo "<h1>There have been $Hits hits to this page. </h1>\n";
	if(file_put_contents($CounterFile, $Hits))
		echo "<p>The counter file has been updated.</p>\n";



?>
</body>
</html>