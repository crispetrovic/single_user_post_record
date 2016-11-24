<?php
        require_once 'meekrodb.2.3.class.php';
        DB::$user = 'root';
        DB::$password = 'crissa';
        DB::$dbName = 'microBlog';


        // throws out error messages if user does something wrong
        DB::debugMode();

        $username = $_POST['username'];
        $password = $_POST['password'];
        $hash = password_hash($password, PASSWORD_DEFAULT);

        DB::insert('Credentials', array(
                'username' => $username,
                'password' => $hash
        ));
        
        $_SESSION['loggedin'] = 1;
        header('Location: index.php');


?>
