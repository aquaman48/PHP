<?php
if(isset($_POST['submit']))
{
	$Subject = stripslashes($_POST['subject']);
	$Name = stripslashes($_POST['name']);
	$Message = stripslashes($_POST['message']);
	
	//Replace any '~' characters with '-' characters
	$Subject = str_replace("~","-",$Subject);
	$Name = str_replace("~","-",$Name);
	$Message = str_replace("~","-",$Message);
	
	//Opens and writes to a file
	$MessageRecord = "$Subject~$Name~$Message\n";
	$MessageFile = fopen("messages.txt", "ab");
	if ($MessageFile === FALSE)
	echo "There was an error saving your message!\n";
	else 
	{
	fwrite($MessageFile, $MessageRecord);
	fclose($MessageFile);
	echo "Your message has been saved.\n";
	}
}



?>
<p>
<a href="PostNewMessage.html">
	Post New Message </a>
</p>