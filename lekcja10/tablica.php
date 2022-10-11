<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>obsługa formularzy</title>
</head>
<body>

	  <form action='./tablica.php' method='post'>



   <label for='nazwa' >nazwa:</label>
    <input type='text' name='nazwa' id='nazwa' />



   <label for='password' >Hasło:</label>
    <input type='password' name='password' id='password' />
    <p><input type="checkbox" name="zapamietaj" value=1 />Zapamiętaj mnie</p>



   <input type='submit' name='Submit' value='prześlij' />




    </form>
        <?php
		if(isset(($_POST['nazwa']))
        echo ($_POST['nazwa']);
        if(isset($_POST['zapamietaj']) && $_POST['zapamietaj'] == 1) echo "zapisano hasło";
		else {
		echo "witaj";
		} 



       ?>

</body>
</html>