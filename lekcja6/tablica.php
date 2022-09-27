<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>tablica</title>
</head>
<body>

	<?php
	

		$tablica = array("Lalka", "Pan Tadeusz", "Wesele", "Dziennik Cwaniaczka");

		$j = 0;
		
		foreach($tablica as $items){
			echo $items . "<br>"; 
			
			++$j;
		}
		
	
	?>


</body>
</html>