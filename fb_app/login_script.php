<?php
    include('db_connect.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
    $submit = $_POST['submit'];

    if(isset($submit)){
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($connect, $username);  
        $password = mysqli_real_escape_string($connect, $password);  
        $sql = "select * from users where username = '$username' and password = '$password'";  
        $result = mysqli_query($connect, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
            
        if($count == 1){  
            session_start();
            $_SESSION["username"] = $username;
            header("Location: ./index.php");
            exit;  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1><br> <a href='./login_form.php'>Click here to enter credentials again.</a>";
        } 
    }
?>  