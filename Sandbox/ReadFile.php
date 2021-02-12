<?php
	$open_file = fopen('volunteers.txt','r+');
	echo $open_file;
	echo " ";
	$fileInfo = fread($open_file, filesize("volunteers.txt"));
	echo $fileInfo;
	fclose($open_file);


?>