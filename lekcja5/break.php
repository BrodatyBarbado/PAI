<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>break</title>
</head>
<body>

	<?php
	
	
	 $liczba = 0;
    
    for($liczba = -11; $liczba <11; ++$liczba)
    {
        if($liczba % 5==0)
        {
            continue;
        }
            echo $liczba;
            echo "<br>";
    }
	
	?>


</body>
</html>