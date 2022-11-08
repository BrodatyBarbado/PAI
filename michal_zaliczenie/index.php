<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/index.css">
	<title>Szczecin strona</title>
</head>
<body>


	<?php
		//podstawowa wartosc zmiennej
		$strona = "strona-glowna";
		//jesli istnieje zmienna w url to zmien dane w zmiennej $strona
		if(isset($_GET['strona'])) {
			$strona = $_GET['strona'];
		}

	?>

    <header>
		<div id="logo-holder" style="background-image: url('icon/logo.png');" class="basic-circle-img">
			
		</div>

		<div id="link-holder">
			<a href="index.php?strona=strona-glowna" class="header-links">Strona główna</a>
			<a href="index.php?strona=zabytki" class="header-links" id="last-link">Zabytki</a>
			<a href="index.php?strona=login" class="header-links">Zaloguj</a>
			<a href="index.php?strona=zarejstruj" class="header-links">Rejstracja</a>
		</div>
	</header>

	<section id="header-margin"></section>

	<section id="main">
		<?php
			//pobieranie zawartosci ze innej strony
			include($strona.".php");
		?>
	</section>

	<footer>
		<h2> Autor: Michał Śmieszniak</h2>
	</footer>

</body>
</html>