<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>tablica</title>
</head>
<body>

	<?php
	

		$tablica = array("Szymon", "Michał", "Dominik", "Marcel");

		$j = 0;
		
		foreach($tablica as $items){
			echo $items . "<br>"; 
			
			++$j;
		}
		
	
	?>


</body>
</html>