<?php session_start();
    // $microBlog = $_POST['microBlog'];
    // echo $microBlog;


    require_once 'meekrodb.2.3.class.php';
    DB::$user = '';
    DB::$password = '';
    DB::$dbName = '';
    // throws out error messages if user does something wrong
    DB::debugMode();

    $microBlog = $_POST['microBlog'];
    // insert items into database table
    DB::insert('microBlog', array(
                    'post' => $microBlog)
    );

    $_SESSION['loggedin'] = 1;
    header('Location: index.php');
?>
