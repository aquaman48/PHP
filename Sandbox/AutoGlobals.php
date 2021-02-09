<?php
	echo "<p>The name of the current script is ", $_SERVER["SCRIPT_NAME"], "<br />";
	echo "This script was executed with the following server software: ", $_SERVER["SERVER_SOFTWARE"], "<br />";
	echo "This script was requested with the following server protocol: ",$_SERVER["SERVER_PROTOCOL"], "</p>;
	
	$GlobalVariable = "Globalvariable";
	function scopeExample()
	{
		echo "<p>" . $GLOBALS["GlobalVariable"] . "</p>;
	}
	scopeExample()

?> 