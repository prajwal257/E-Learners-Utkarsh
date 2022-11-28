<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="nav">
        <a href="./index.php" class="logo">LOGO</a>
        <div class="menu">
            <a href="./login_form.php">LOGIN</a>
            <a href="./signup_form.php">SIGNUP</a>
            <a href="./post_form.php">POST</a>
        </div>
    </div>
    <?php                 session_start();          ?>