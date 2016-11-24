<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Microblogging Site</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

        <?php if(isset($_SESSION['loggedin'])){
        echo '<form action="postForm.php" method="post">
                <TextArea name="microBlog" id="microBlog" cols="30" rows="10">
                </TextArea>
                </br>
                <input type="submit">
        </form>';

                require_once 'meekrodb.2.3.class.php';
                DB::$user = 'root';
                DB::$password = 'crissa';
                DB::$dbName = 'microBlog';
                $results = DB::query("SELECT post FROM microBlog");
                foreach ($results as $row){
                        echo "<div class='microBlog'>" . $row['post'] . "</div>";
                }

                echo '<a href="logout.php">Log Out</a>';

        }

        else {

                echo '<a href="register.php">Register</a> </br>';
                echo '<a href="loginForm.php">Log In</a>';
        }

        

?>


</body>
</html>
