<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Strona szefa</title>
</head>
<body>
	<form action="./formularzeZadanie2.php" method="POST">

	<p>Komentarz</p>
	<p><input type="text" placeholder="Nickname" name="nick" value="" /></p>
	<textarea name='opis' placeholder="Komentarz"></textarea><br>
	
	<input type="submit" />
	
	</form>
	<?php

		if(isset($_POST['nick'])){
			$nickname = $_POST['nick'];
            echo "<br><b>Twój nick: </b>" . $nickname;
		}

		if(isset($_POST['nick'])){
			$komentarz = $_POST['opis'];
            echo "<br: </b>" . $komentarz;
		}
			
	    if(isset($_POST['nick'])){
            $komentarz = $_POST['opis'];
           echo "<br> komentarz " . htmlspecialchars($_POST['opis']) . ". ";
        }
	?>


</body>