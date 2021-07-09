<html>
    <style>
    h1 {
        font-weight: bold;
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

    </style>
    <body>
        <center>
            <h1>Username Checker</h1><br>
            <form action="#" method="post">
                <input type="text" name="searchName" autocomplete="off" row=200 placeholder="Find an available username. Search here. Example MIXAS"><br><br>
                <button class="btn">Search</button>
            </form>
        </center>
    </body>
</html>
<?php
    $username = $_POST['searchName'];
    if (isset($username)) {
        CheckGithub($username);
        CheckYoutube($username);
        CheckBlogspot($username);
        CheckLinkTree($username);
    }
    function CheckGithub($username){
        $github = "https://www.github.com/$username";
        $response = file_get_contents($github);
        if($response == ''){
            echo "Github kullanılmıyor";
        }else {
            echo "Bu kullanıcı adına sahip bir github bulunmakta";
        }
        echo "<br>";
    }
    function CheckYoutube($username){
        $youtube = "https://www.youtube.com/user/$username";
        $response = file_get_contents($youtube);
        if($response == ''){
            echo "Youtube kullanılmıyor";
        }else {
            echo "Bu kullanıcı adına sahip bir youtube bulunmakta";
        }
        echo "<br>";
    }
    function CheckBlogspot($username){
        $blogspot = "http://$username.blogspot.com";
        $response = file_get_contents($blogspot);
        if($response == ''){
            echo "blogspot kullanılmıyor";
        }else {
            echo "Bu kullanıcı adına sahip bir blogspot bulunmakta";
        }
        echo "<br>";
    }
    function CheckLinkTree($username){
        $twitter = "https://linktr.ee/$username";
        $response = file_get_contents($twitter);
        if($response == ''){
            echo "linktree kullanılmıyor";
        }else {
            echo "Bu kullanıcı adına sahip bir linktree bulunmakta";
        }
        echo "<br>";
    }
?>