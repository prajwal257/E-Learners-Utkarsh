<?php
// ge the post ID and increment the like counter...

    $post_id = $_POST['post_id'];
    $result = $connect->query("SELECT `likes` FROM `posts` WHERE `post_id`=" . $post_id);
    $row = $result->fetch_assoc();
    $sql = "UPDATE TABLE `posts` SET `likes`=" . ( $row['likes'] + 1 ) . " WHERE `post_id`=" . $post_id . ";";
    echo $sql;
    // execute query.
?>