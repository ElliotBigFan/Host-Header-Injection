<?php
$messages = json_decode(file_get_contents('http://mailhog:8025/api/v2/messages'), true);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inbox</title>
</head>
<body>
    <h1>Inbox</h1>
    <?php foreach ($messages['items'] as $msg): ?>
        <div style="border:1px solid #ccc; margin:10px; padding:10px;">
            <strong>Subject:</strong> <?= htmlspecialchars($msg['Content']['Headers']['Subject'][0]) ?><br>
            <strong>From:</strong> <?= htmlspecialchars($msg['Content']['Headers']['From'][0]) ?><br>
            <strong>Body:</strong><br>
            <?= nl2br(htmlspecialchars($msg['Content']['Body'])) ?>
        </div>
    <?php endforeach; ?>
</body>
</html>