<?php
    include_once("./connect.php");
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(isset($_POST['submit'])){
        
    }
    //to prevent from mysqli injection  
    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($connect, $username);  
    $password = mysqli_real_escape_string($connect, $password);  

    $sql = "SELECT * FROM `users` where `username`='" . $username . "';";
    echo $sql;
    $result = mysqli_query($connect, $sql) or die( mysqli_error($connect));  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    
    if($password == $row['password']){
        // echo "<h1>Welcome ". $username ."</h1>";
        $_SESSION['username'] = $username;

        header("Location: welcome.php");
    }
    else{
        header("Location: index.html");
    }
?>