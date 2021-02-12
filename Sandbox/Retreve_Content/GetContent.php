<?php
	$DailyForecast = "<p><strong>San Francisco daily weather forecast</strong>: Today: Partly cloudy. Highs from the 60s to mid 70s. West winds 5 to 10 mph.
	Tonight: Increasing cloud coverage. Lows in the mid 40s to the lower 50s. West winds 5 to 10 mph.</p>";
	
	
	file_put_contents("sfweather.txt", $DailyForecast);
	

	$SFWeather = file_get_contents("sfweather.txt");
	echo $SFWeather;
	

?>