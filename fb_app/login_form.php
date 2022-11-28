<?php 
    include_once("./header.inc.php");
    include_once("./db_connect.php");
    // echo $connect;
?>

    <main>
        <h1>LOGIN</h1>
        <form action="login_script.php" method="post">
            <input type="text" name="username" placeholder="username">
            <input type="password" name="password" placeholder="password">
            <input type="submit" name="submit">
        </form>
    </main>

<?php
    include_once("./footer.inc.php");
?>