<?php
$token = $_GET['token'] ?? 'no-token';
header("Location: index.php?token=" . urlencode($token));
exit;
?>