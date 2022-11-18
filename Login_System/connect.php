<?php
    $connect = mysqli_connect("localhost", "root", "", "test");
    if($connect === false)
        die("ERROR: Could not connect. " . mysqli_connect_error());
    echo "Connected to DB.";
?>