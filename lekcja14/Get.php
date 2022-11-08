<?php 

if(isset($_GET["page"]))
	$strona = $_GET["page"];
else
	$strona = null;

echo "strona: ".$strona."<br>";


?>
<html>
	<body>
	<a href="dolaczanie.php?page=main"> Strona główna </a> <br>
	<a href="dolaczanie.php?page=news"> Aktualności </a>
		<header> 
			jakas zawartosc headera
		</header>
		<div>
		
			
			<?php if(($strona)!=null) include($strona.".php"); ?>
			
		</div>
		<footer> 
			jakas zawartosc footera
		</footer>
	</body>
</html>