<?php

    include_once("./connect.php");
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($connect, $username);  
        $password = mysqli_real_escape_string($connect, $password);  
        $sql = "SELECT * FROM `users` WHERE `username`= " . $username . ";";
        echo $sql;
        $result = mysqli_query($connect, $sql)
        $number_of_users_with_same_name = mysqli_num_rows($result);
        if($number_of_users_with_same_name == 0){
            //proceed with signup...
        }
        else{
            //user with same username exists.
            header("location: signup_form.php?error=username_exists")
        }
    }


?>