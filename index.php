<html>
    <style>
    .title {
        font-weight: bold;
        font-family:monospace;
        margin: 0;
    }
    input {
        font: inherit;
        padding: 0.2em 0.5em;
        width: 30%;
    }
    .btn {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 160px;
        height: 40px;
        background-color: #ffffff;
        cursor: pointer;
        font-size: 24px;
        color: #000000;
        transition: all 0.3s;
        position: relative;
        text-align: center;
        overflow: hidden;
        border-radius: 5px;
        box-shadow: 0 6px 30px -10px rgba(#CCCCCC, 1);
    }

    .btn:hover {
        transform: translateX(5px) translateY(-7px);
        color: #001234;

    }
    .available {
        background-color:lime;
        height: 20px;
        -moz-border-radius:75px;
        -webkit-border-radius: 75px;
        width: 20px;
        display:inline-flex;
    }
    .used {
        background-color:red;
        height: 20px;
        -moz-border-radius:75px;
        -webkit-border-radius: 75px;
        width: 20px;
        display:inline-flex;
    }
    </style>
    <body>
        <center><br><br>
            <h1 class='title'>Username Checker</h1><br>
            <form action="#" method="post">
                <input type="text" name="searchName" autocomplete="off" row=200 placeholder="Find an available username. Search here. Example MIXAS"><br><br>
                <button class="btn">Search</button><br><br>
            </form>
        </center>
    </body>
</html>
<?php
    $username = $_POST['searchName'];
    if (isset($username)) {
        echo "<center>";
        CheckGithub($username);
        CheckYoutube($username);
        CheckBlogspot($username);
        CheckLinkTree($username);
        CheckSteam($username);
        echo "</center><br><br><br>";
    }
    function CheckGithub($username){
        $github = "https://www.github.com/$username";
        $response = file_get_contents($github);
        if($response == ''){
            echo "<div class='available'></div>Github<br><br>";
        }else {
            echo "<div class='used'></div>Github<br><br>";
        }
    }
    function CheckYoutube($username){
        $youtube = "https://www.youtube.com/user/$username";
        $response = file_get_contents($youtube);
        if($response == ''){
            echo "<div class='available'></div>Youtube<br><br>";
        }else {
            echo "<div class='used'></div>Youtube<br><br>";
        }
    }
    function CheckBlogspot($username){
        $blogspot = "http://$username.blogspot.com";
        $response = file_get_contents($blogspot);
        if($response == ''){
            echo "<div class='available'></div>Blogspot<br><br>";
        }else {
            echo "<div class='used'></div>Blogspot<br><br>";
        }
    }
    function CheckLinkTree($username){
        $linktree = "https://linktr.ee/$username";
        $response = file_get_contents($linktree);
        if($response == ''){
            echo "<div class='available'></div>Linktree<br><br>";
        }else {
            echo "<div class='used'></div>Linktree<br><br>";
        }
    }
    function CheckSteam($username){
        $linktree = "https://steamcommunity.com/id/$username";
        $response = file_get_contents($linktree);
        if(strpos($response,'Sorry!')){
            echo "<div class='available'></div>Steam<br><br>";
        }else {
            echo "<div class='used'></div>Steam<br><br>";
        }
    }
    
?>
