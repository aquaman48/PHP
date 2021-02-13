<?php
	$EventVolunteers = "Blair, Dennis\n";
	$EventVolunteers .= "Hernandez, Louis\n";
	$EventVolunteers .= "Miller, Erica\n";
	$EventVolunteers .= "Morinaga, Scott\n";
	$EventVolunteers .= "Picard, Raymond\n";
	
	$VolunteersFile = "volunteer.txt";
	
	if(file_put_contents($VolunteersFile, $EventVolunteers) > 0)
		echo "<p>Data was successfully written to the $VolunteersFile file.</p>";
	else
		echo "<p>No data was written to the $VolunteersFile file.</p>";







?>