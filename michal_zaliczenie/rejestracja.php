<!DOCTYPE html>

<html>

<head>

    <title>Register</title>

    <link rel="stylesheet" type="text/css" href="css/rejestracja.css">

</head>

<body>

     <form action="login.php" method="post">

        <h2>LOGIN</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>User Name</label>

        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Password</label>

        <input type="password" name="password" placeholder="Password"><br> 
		
		<label>E-mail</label>

        <input type="text" name="e-mail" placeholder="e-mail"><br> 

        <button type="submit">Login</button>

     </form>

</body>

</html>

