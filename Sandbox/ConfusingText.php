<?php
$ConfusingText = "tHIs seNTEnCE iS HArD to rEAD.";
echo "<h1>Confusing Text</h1>\n";
echo "ucfirst: " . ucfirst($ConfusingText) . "<br />\n";
echo "lcfirst: " . lcfirst($ConfusingText) . "<br />\n";
echo "ucwords: " . ucwords($ConfusingText) . "<br />\n";
$LowercaseText = strtolower($ConfusingText);
echo "<h1>Lowercase Text</h1>\n";
echo "ucfirst: " . ucfirst($LowercaseText) . "<br />\n";
echo "lcfirst: " . lcfirst($LowercaseText) . "<br />\n";
echo "ucwords: " . ucwords($LowercaseText) . "<br />\n";

$StartingText = "mAdAm, i'M aDaM.";
$UppercaseText = strtoupper($StartingText);
$LowercaseText = strtolower($StartingText);
echo "<p>$UppercaseText</p>\n";
echo "<p>$LowercaseText</p>\n";
echo "<p>" . ucfirst($LowercaseText) . "</p>\n";
echo "<p>" . lcfirst($UppercaseText) . "</p>\n";
$WorkingText = ucwords($LowercaseText);
echo "<p>$WorkingText</p>\n";
echo "<p>" . md5($WorkingText) . "</p>\n";
echo "<p>" . substr($WorkingText,0,6) . "</p>\n";
echo "<p>" . substr($WorkingText,7) . "</p>\n";
echo "<p>" . strrev($WorkingText) . "</p>\n";
echo "<p>" . str_shuffle($WorkingText) . "</p>\n";
?>