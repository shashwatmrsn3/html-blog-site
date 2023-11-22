<?php

    include './utils/dbconnect.php';

    $id=$_GET['id'];
    $query = "delete  from blog.post where id=".$id;
    if(mysqli_query($conn,$query)){
        header("Location:adminpanel.php");
    }


?>