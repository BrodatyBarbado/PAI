<html>
    <head>
        <body>
        <div id="lewy">
            <form method="POST" action="">
            <input type="text" name="liczba1" size="10">
                <select name="znak">
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
                </select>
            <input type="text" name="liczba2" size="10">
            <input type="submit" value="Oblicz">
            </form>
            <?php
                $liczba1 = $_POST['liczba1'];
                $liczba2 = $_POST['liczba2'];
                $znak = $_POST['znak'];
                $wynik = "";
                switch ($znak)
                {
                 case "+":
                   $wynik = $liczba1+$liczba2;
                   break;
                 case "-":
                   $wynik = $liczba1-$liczba2;
                   break;
                 case "*":
                   $wynik = $liczba1*$liczba2;
                   break;
                 case "/":
                   $wynik = $liczba1/$liczba2;
                   break;
                }
               echo "<table><tr><td bgcolor=red>"."wynik ".htmlspecialchars($_POST['liczba1']).htmlspecialchars($_POST['znak']).htmlspecialchars($_POST['liczba2'])." = ".$wynik."</td</tr></table>";
            ?>
        </body>
    </head>
</html>