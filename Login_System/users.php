<?php

    include_once("./connect.php");


    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($connect, $sql) or die( mysqli_error($connect));
    for($i = 0; $i< 4; $i++){
        $row = mysqli_fetch_assoc($result);
        echo $row['username'] . " " . $row['email'];
    }