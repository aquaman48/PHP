<?php
function validateYear($data){
		global $errorCount;
		if(empty($data))
		{
		echo "<p>The field is required.</p>";
		++$errorCount;
		$retval = "";
		} 
		else 
		{
			$data = trim($data);
			$data = stripslashes($data);
			if (is_numeric($data))
			{
				$data = round($data);
				if (($data >=1900) && ($data <= 2100))
				{
					$retval = $data;
				}	
				else 
					{
					echo "<p>The field must be between 1900 and 2100</p>";
					++$errorCount;
					$retval ="";
					}
			}else
					{
						echo "<p>The field must be a numeric value.</p>";
						++$errorCount;
						$retval = "";
					}
			}
			return($retval);
		}			
$errorCount = 0;		
$date = validateYear("f");		
echo "<p>$date</p>";
echo "<p>$errorCount</p>";
?>
