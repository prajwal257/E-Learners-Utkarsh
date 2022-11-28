<?php 
    include_once("./header.inc.php");
    include_once("./db_connect.php");
    // echo $connect;
?>

    <main>
        <form action="submit_post.php" method="post">
            <input type="text" name="post_text" placeholder="post_text">
            <input type="submit" name="submit">
        </form>
    </main>

<?php
    include_once("./footer.inc.php");
?>