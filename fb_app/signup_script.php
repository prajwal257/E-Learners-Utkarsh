<?php

    //used for validating the signup scripts...
    include_once("./db_connect.php");

    $username = $_POST['username'];
    $password = $_POST['password'];
    $submit = $_POST['submit'];

    if(isset($submit)){
        //submit button was pressed.

        //make it right.
        $sql = "SELECT * FROM `users` WHERE `username` = '" . $username. "';";
        $users = mysqli_query($connect, $sql); 
        $row = mysqli_fetch_array($users, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($users); 

        if($count>0){
            echo "Already user exists with same username. <br> <a href='./login_form.php'>Click here to login</a>";
        }
        else{

            //ok now we need to insert this user into the database.
            //make it right.

            $sql = "INSERT INTO `users`(username, password) VALUES ('" . $username . "', '" . $password ."')";
            $status = mysqli_query($connect, $sql); 
            
            echo $sql;
            if($status == TRUE ){
                echo "user inserted successfully now you can login.";
                // Start the session
                session_start();
                $_SESSION["username"] = $username;
                header("Location: ./index.php");
                exit;
            }
            else{
                echo "something wrong happend with script.";
            }
        }
    }
?>