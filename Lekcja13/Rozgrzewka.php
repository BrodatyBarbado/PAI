<?php
session_start();



if(isset($_POST['guzik'])){
	$login1 = $_POST['guzik'];
	
	$_SESSION['login1'] = $login1;
	$_SESSION['haslo1'] = $haslo1;
	
	if (isset($_SESSION['login1']) && isset($_SESSION['haslo1']))
		echo "sesja utworzona";


}
?>

<html>
<head>



</head>
<body>
    <form action="./lekcja13.php" method="POST">
    <b>Podaj login </b>
        <p><input type="text" name="login" placeholder="Tekst" value="" /></p>
        <b>Podaj hasło </b>
        <p><input type="password" name="hasło" placeholder="Password" value="" /></p>
        <input type="submit" name="Przycisk" />
        <input type="submit" name="guzik" value="wyślij" />
    </form>
</body>
</html>