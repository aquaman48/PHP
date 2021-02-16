<?php

$ExampleString = "woodworking project";
echo substr($ExampleString,4) . "<br />\n";
echo substr($ExampleString,4,7) . "<br />\n";
echo substr($ExampleString,0,8) . "<br />\n";
echo substr($ExampleString,-7) . "<br />\n";
echo substr($ExampleString,-12,4) . "<br />\n";
//Case sensitive search of a character within a substring
echo strpos("project", "o");
echo "<br />";

echo strchr("woodworking", "o");
echo "<br /><br />";

//using string replace (str_replace()) to replace words in a string
$Email = "president@whitehouse.gov";
$NewEmail = str_replace("president", "vice.president", $Email);
echo $NewEmail;
echo "<br /><br />";
$Presidents = "George Washington;John Adams;Thomas
Jefferson;James Madison;James Monroe";
$President = strtok($Presidents, ";");
while ($President != NULL) 
{
	echo "$President<br /><br />";
	$President = strtok(";");
}
 print_r(str_split("Hello", 3));
 echo "<br /><br />";

$Presidents = "George Washington;John Adams;Thomas
Jefferson;James Madison;James Monroe";
$PresidentArray = explode(";", $Presidents);
foreach ($PresidentArray as $President) 
{
echo "$President<br />";
}
print_r(explode(";", $Presidents));
echo "<br /><br />"

//$PresidentsArray = array("George Washington", "John Adams", "Thomas Jefferson", "James Madison", "James Monroe");
//$Presidents = implode(", ", $PresidentsArray);
//echo $Presidents;

?>