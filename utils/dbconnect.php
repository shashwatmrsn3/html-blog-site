<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($hostname, $username, $password);
    if(!$conn){
        echo "cannot establish connection", mysqli_error($conn);
    }
?>