<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .container {
            text-align: center;
        }
        .btn {
            margin-top: 20px;
        }
        .footer {
            position: fixed;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 12px;
        }
        .footer a {
            color: #007bff;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Reset Password</h1>
        <p>Nhập địa chỉ email của bạn để nhận link reset mật khẩu.</p>
        <form action="" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <button type="submit" class="btn btn-primary">Gửi</button>
        </form>
    </div>
    <?php
        require 'vendor/autoload.php'; // Download PHPMailer using Composer

        use PHPMailer\PHPMailer\PHPMailer;

        $host = $_SERVER['HTTP_HOST'];
        $token = bin2hex(random_bytes(6));
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
        }
        else{
            die("");
        }
        $flag = "FLAG{H0st_H3ad3r_1s_4n_1nJ3ct10n}";
        if($host == "localhost:8082"){
            $token = urlencode($flag);
        }
        $link = "http://$host/reset-password.php?token=$token";
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'mailhog';     // MailHog hostname (In Docker network)
        $mail->Port = 1025;
        $mail->setFrom('noreply@victim.local', 'ResetBot');
        $mail->addAddress($email);
        $mail->Subject = 'Reset Your Password';
        $mail->Body    = "Reset here: $link";
        $mail->send();
    ?>
    <div class="footer">
        <p>&copy; 2023 <a href="https://example.com">Your Company</a></p>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>