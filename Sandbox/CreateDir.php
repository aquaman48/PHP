<?php
	//mkdir("uploads");
	$Dir = "uploads";
	$DirOpen = opendir($Dir);
	
	
	while($CurFile = readdir($DirOpen))
	{
		if((strcmp($CurFile, '.') !=0) && 
		(strcmp($CurFile, '..') !=0))
		echo $CurFile."<br />\n";
	}	
	closedir($DirOpen);




?>