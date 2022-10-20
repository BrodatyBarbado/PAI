<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Strona szefa</title>
</head>
<body>

	<p>Rozgrzewka</p>
	<hr>

	<form action="./Rozgrzewka.php" method="POST">
		<p><input type="text" name="tekst" placeholder="Tekst" value="" /></p>
		<input type="submit" name="TekstPrzycisk" />
		<input type="submit" name="TekstUsun" value="Usuń" />
	</form>

	<form action="./Rozgrzewka.php" method="POST">
		<p><input type="number" name="liczba" placeholder="Number" value="" /></p>
		<input type="submit" name="LiczbaPrzycisk"/>
		<input type="submit" name="LiczbaUsun" value="Usuń"/>
	</form>
	<hr>

	<?php

		$tablica = array(5, 6, 3);
		$tablica2 = array('Ala', 'ma', 'kota');

		if (isset($_POST['TekstPrzycisk'])) {
			if (isset($_POST['tekst'])) {
				array_push($tablica2, $_POST['tekst']);
				echo "<b>Zawartość tablicy: </b>";
				foreach ($tablica2 as $tab2) {
					echo $tab2 . " ";
				}
			}
		}

		if (isset($_POST['LiczbaPrzycisk'])) {
			if (isset($_POST['liczba'])) {
				array_push($tablica, $_POST['liczba']);
				echo "<b>Zawartość tablicy: </b>";
				foreach ($tablica as $tab) {
					echo $tab . " ";
				}
			}
		}

		if (isset($_POST['TekstUsun'])) {
			$usunTekst = array_pop($tablica2);
			echo "<b>Zawartość tablicy po usunięciu: </b>";
			foreach ($tablica2 as $tab2) {
					echo $tab2 . " ";
				}
		}

		if (isset($_POST['LiczbaUsun'])) {
			$usunTekst = array_pop($tablica);
			echo "<b>Zawartość tablicy po usunięciu: </b>";
			foreach ($tablica as $tab) {
					echo $tab . " ";
				}
		}
	?>


</body>
