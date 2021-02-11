<!DOCTYPE>
<html>
<head>
<title>Show Guest Book</title>
</head>
<body>
<?php
	if(is_readable("guestbook.txt"))
	{
		echo "</pre>\n";
		readfile('guestbook.txt');
		echo "</pre>\n";
	}
	else
		echo "<p>Cannot write to the file.</p>\n";


?>
</body>
<p><a href="GuestBook.html">Sign Guest Book</a></p>
</html>