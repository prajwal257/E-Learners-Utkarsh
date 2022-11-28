<?php
    include_once("./db_connect.php");
    $post_text = $_POST['post_text'];
    $sql = 'INSERT INTO `posts`(`post_text`, `likes`) VALUES ("' . $post_text .'", 0)';
    if ($connect->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $connect->error;
    }
    header("location: ./index.php");