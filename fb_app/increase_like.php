<?php
    include_once("./db_connect.php");
    $post_id = $_POST['post_id'];
    $sql = "SELECT * FROM `posts` WHERE `post_id`=" . $post_id;
    // echo $sql;
    $result = $connect->query($sql);
    $row = $result->fetch_assoc();
    // echo "Current likes on this posts are: " . $row['likes'];
    $updated_likes = $row['likes'] + 1;
    $sql = "UPDATE `posts` SET `likes`=" . ( $updated_likes ) . " WHERE `post_id`=" . $post_id . ";";
    if ($connect->query($sql) === TRUE) {
        echo $updated_likes;
    }
?>