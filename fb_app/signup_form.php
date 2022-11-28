<?php 
    include_once("./header.inc.php");
    include_once("./db_connect.php");
    // echo $connect;
?>

    <main>
        <h1>SIGNUP</h1>
        <form action="signup_script.php" method="post">
            <input type="text" name="username" placeholder="username">
            <input type="password" name="password" placeholder="password">
            <input type="submit" value="submit" name="submit">
        </form>
    </main>

<?php
    include_once("./footer.inc.php");
?>