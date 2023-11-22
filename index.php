<?php

include './utils/dbconnect.php';

$query = "select id,title,content,author,date,image from blog.post";
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
            </ul>
        </div>



    </div>
    <div class="content">
        <h1 class="heading">Trending Posts</h1>
        <?php
        while ($r = mysqli_fetch_assoc($result)) {
            ?>
            <div class="post">
                <div class="post-image">
                    <img src="uploads/<?php echo $r['image']; ?>" />
                </div>
                <div class="post-content">
                    <h2>
                        <?php echo $r['title']; ?>
                    </h2>
                    <p>
                        <?php echo $r['author']; ?> .
                        <?php echo $r['date']; ?>
                    </p>
                    <div class="post-preview">
                        <p> <?php echo $r['content']; ?> </p>
                    </div>

                </div>
            </div>
            <?php
        }
        ?>


    </div>

    <footer>
        Copyright@MyBlog
    </footer>
</body>

</html>

