<?php 

if(isset($_GET["page"]))
	$strona = $_GET["page"];
else
	$strona = null;

echo "strona: ".$strona."<br>";


?>
<html>
	<body>
	<br>
	<a href="2.php"> Strona główna </a> <br> <br>
	<a href="3.php"> Aktualności </a> <br>
		<header> 
	<br>
		</header>
		<div>
			<?php echo "WITAJ NA STRONIE GŁÓWNEJ" ?>
			
			<?php if(($strona)!=null) include($strona.".php"); ?>
			
		</div>
		<footer>
		<br>
		Created by Piotr Nowacki®
	
		</footer>
	</body>
</html>