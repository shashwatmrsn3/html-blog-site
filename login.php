<?php

include 'utils/dbconnect.php';

$err = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "select * from blog.user where username = '$username' and password = '$password'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result) > 0){
        session_start();
        $_SESSION['username'] = $username;
        header("location:adminpanel.php");
        $err = "";
    }else{
        $err = "invalid username/password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css" />
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
            </ul>
        </div>
    </div>

    <div class="content">
        <form method="POST">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <p style="color:red"><?php echo $err?></p>

            <input type="submit" name="submit" />


        </form>


    </div>
    <footer>
        Copyright@MyBlog
    </footer>
</body>

</html>