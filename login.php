<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>


<body>
    <div class="navbar">
        <div class="logo">
            <a href="#">MyBlog</a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
    </div>

    <div class="content">
        <h1>Login</h1>

        <form action="">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <input type="submit" name="submit"/>
           

        </form>


    </div>
    <footer>
        Copyright@MyBlog
    </footer>
</body>

</html>