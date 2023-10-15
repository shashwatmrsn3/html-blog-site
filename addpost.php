<?php



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
        <form action="process_form.php" method="post" enctype="multipart/form-data">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required>
            <label for="content">Content:</label>
            <textarea name="content" id="content" rows="4" required></textarea>
            <label for="image">Image:</label>
            <input type="file" name="image" id="image" accept="image/*" required>
            <input type="submit" value="Submit">
        </form>
    </div>
    <footer>
        Copyright@MyBlog
    </footer>
</body>

</html>