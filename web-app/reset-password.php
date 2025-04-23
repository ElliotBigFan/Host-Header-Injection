<?php
    if(!isset($_GET['token'])) {
        die('There is no token');
    }
    $token = $_GET['token'];
    echo "Token haven't been leaked: $token and it is not a flag. Everything is ok." . "<br>";
    echo "Click here to see your inbox: <a href='http://localhost:8081'>Inbox</a>";
?>