<?php
if(isset(4_POST["guzik"]){
$login1 = $_POST["guzik"];
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
        <p><input type="text" name="hasło" placeholder="Tekst" value="" /></p>
        <input type="submit" name="Przycisk" />
        <input type="submit" name="guzik" value="wyślij" />
    </form>
</body>
</html>