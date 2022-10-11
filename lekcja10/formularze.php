<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Strona szefa</title>
</head>
<body>
	<form action="./formularze.php" method="POST">

	<p>Login</p>
	<p><input type="login" placeholder="Username" name="login" value="" /></p>
	<p><input type="password" placeholder="Password" name="haslo" value="" /></p>
	
	<p><input type="checkbox" name="Check" value="1" />Tak</p>
	
	<input type="submit" />
	
	</form>
	<?php
	
		if(isset($_POST['login'])){
            echo "<br><b>Twój login: </b>" . htmlspecialchars($_POST['login']) . ".<br>";
		}
		if(isset($_POST['haslo'])){
			echo "<b>Twoje haslo: </b>" . sha1(htmlspecialchars($_POST['haslo'])) . ". ";
		}
		
        else{
            echo "Nie podales loginu lub hasla.";
        }

        if(isset($_POST['Check'])){
		    echo "<br> Zaznaczyłeś Tak.";
		    }
		else{
		    echo "<br>Nie zaznaczyłeś Tak";
		}
		
	?>


</body>