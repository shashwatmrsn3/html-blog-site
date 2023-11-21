<?php

include './utils/dbconnect.php';
session_start();
if ($_SESSION['username'] == null) {
    header("location:login.php");
}

$query = "select title,content,author,date,image from blog.post";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css" />
    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous">
        </script>
    <script src="js/script.js">
    </script>
</head>

<body>
    <div class="navbar">
        <div class="logo">
            <a href="index.php">MyBlog</a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>

    <div class="content">
        <h2>Posts</h2>
        <a class="add-btn" href="addpost.php">Add new</a>
        <table class="table">
            <tr>
                <th>Title</th>
                <th>Date</th>
                <th>Author</th>
                <th>Image</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            <?php
            while ($r = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td>
                        <?php echo $r['title']; ?>
                    </td>
                    <td>
                        <?php echo $r['date']; ?>
                    </td>
                    <td>
                        <?php echo $r['author']; ?>
                    </td>
                    <td>
                        <img style="height:100px;width:100px" src="uploads/<?php echo $r['image']; ?>" />
                    </td>
                    <td>Update</td>
                    <td>Delete</td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>

    <footer>
        Copyright@MyBlog
    </footer>
</body>

</html>