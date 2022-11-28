<?php 
    include_once("./header.inc.php");
    include_once("./db_connect.php");
    // echo $connect;
?>

    <main>
        <?php
            $username = "Guest";
            if(isset($_SESSION['username'])){
                $username = $_SESSION['username'];
            }
            echo "<h1>Welcome " . $username . "</h1>";
        ?>
        <ul class="posts" style="margin: 5vh; list-style-type: none">
        <?php
            $sql = "SELECT * FROM `posts`";
            $result = mysqli_query($connect, $sql);
            while($row = $result->fetch_assoc()) {
                echo '
                    <li styles="margin: 3vh" class="post">
                        <h1>' . $row['post_text'] . '</h1>
                        <p>Likes: ' . $row['likes'] . '</p>
                        <button class="like" data-postId="' . $row['post_id'] . '">LIKE</button>
                    </li>
                ';
            }                
        ?>
        </ul>
    </main>
    <script>
        var button = document.getElementsByClassName("like")
        for(let i=0; i<button.length; i++){
            button[i].addEventListener("click", function(){
                // var current_post_ID = i;
                // console.log("Current Post ID IS: ", current_post_Id);
                button[i].innerHTML = "LIKED";
            })
        }
    </script>
<?php
    include_once("./footer.inc.php");
?>