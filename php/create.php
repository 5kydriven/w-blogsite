<?php

include "connection.php";

if(isset($_POST['create'])) {
    $author = $_POST['author'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    
    

    $sql = "INSERT into posts (author, title, content) values ($author, $title, $content)";
    mysqli_query($conn, $sql);

    header('location: ../index.html');
}