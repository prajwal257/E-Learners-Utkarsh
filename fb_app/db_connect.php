<?php

    $connect = mysqli_connect("localhost", "root", "", "test");
    if(!$connect)
        die("I cannot connect to DB");