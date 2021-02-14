<!DOCTYPE>
<html>
<title>Message Board</title>
<body>
<h1>Message Board</h1>
<?php
	if ((!file_exists("messages.txt")) || (filesize("messages.txt") == 0))
	echo "<p>There are no messages posted.</p>\n";
	else {
	$MessageArray = file("messages.txt");
	echo "<table
	style=\"background-color:lightgray\"
	border=\"1\" width=\"100%\">\n";
	$count = count($MessageArray);
	for ($i = 0; $i < $count; ++$i) 
{
	$CurrMsg = explode("~", $MessageArray[$i]);
	echo "     <tr>\n";
	echo "      <td width=\"5%\" 
	align=\"center\"><strong>" .($i + 1) . "</strong>\n";
	echo "<td width=\"95%\"><strong>Subject:</strong> " . 
	htmlentities($CurrMsg[0]) . "<br />";
	echo "<strong>Name:</strong> " . 
	htmlentities($CurrMsg[1]) . "<br />";
	echo "<u><strong>Message</strong></u><br />" .
	htmlentities($CurrMsg[2]) . "</td>\n";
	echo "</tr>\n";
}
	echo "</table>\n";
	}

?>
<p>
<a href="PostNewMessage.html">
	Post New Message </a>
</p>
</body>
</html>