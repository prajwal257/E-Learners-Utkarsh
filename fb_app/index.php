<?php 
    include_once("./header.inc.php");
    include_once("./db_connect.php");
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
                        <p class="likes">Likes: ' . $row['likes'] . '</p>
                        <button class="like">LIKE</button>
                    </li>
                ';
            }                
        ?>
        </ul>
    </main>
    <script>
        let button = document.getElementsByClassName("like");
        const xhr = new XMLHttpRequest();
        for(let i=0; i<button.length; i++){
            button[i].addEventListener("click", function(){
                console.log("Current Post ID IS: ", i+1);
                xhr.open("POST", "./increase_like.php");
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.send("post_id=" + (i+1));
                let updated_likes = 1;
                xhr.onload = function(){
                    //function gets executed when we recieve a reply form the server.
                    console.log(this.responseText);
                    document.getElementsByClassName("likes")[i].innerHTML = "Likes: " + this.responseText;
                }
                button[i].innerHTML = "LIKED";
            })
        }
    </script>
<?php
    include_once("./footer.inc.php");
?>