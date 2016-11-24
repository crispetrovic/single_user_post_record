<?php
session_start();
session_destroy();
//header('Loaction: loginForm.php');
echo '<a href="register.php">Register</a> </br>';
echo '<a href="loginForm.php">Log In</a>';
?>
