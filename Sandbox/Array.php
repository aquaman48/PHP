<?php
$Provinces = array(
		"Newfoundland and Labrado",
		"Prince Edward Island",
		"Nova Scotia",
		"New Brunswick",
		"Quebec",
		"Ontario",
		"Manitoba",
		"Saskatchewan",
		"Alberta",
		"British Colombia"
		);
$Territories = array(
		"Nunavut", 
		"Northwest Territories", 
		"Yukon Territory"); 
		
	echo "<p>Canada's smallest province is $Provinces[1]. <br />";
	echo "<p>Canada's largest province is $Provinces[4]. <br />";
	echo "<p>Canada has ", count($Provinces), " provinces and ", count($Territories), " territories.</p>";
?>