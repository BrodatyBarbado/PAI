<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Strona szefa</title>
</head>
<body>
	
	<?php
		$tablica = array(2, 6, 10 ,18, 24, 30, 34, 54, 72, 94);
		$zdanie  = "zdanie składające się z 5 słów";
		
			foreach($tablica as $tab){
				
				echo $tab ." ";
				
			};
			echo "<br>" . $zdanie . "</br>";
	?>


</body>
</html>