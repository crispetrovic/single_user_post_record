<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>Log In</title>
        <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
        <h2>Log In</h2>
        <form action='login.php' method='post'>
                <p>Username: <input type='text' name='username' id='username'></p>
                <p>Password: <input type='text' name='password' id='password'></p>
                <input type="submit">
        </form>

</body>
</html>
