<?php

    $connect = mysqli_connect("localhost", "root", "", "youstream2");
    if($connect === false)
        die("ERROR: Could not connect. " . mysqli_connect_error());
    echo "Connected to DB.";

    $sql = "SELECT * FROM `videos`";

    $result = mysqli_query($connect, $sql);