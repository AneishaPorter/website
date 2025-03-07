<?php
// Load Composer's autoloader
require 'vendor/autoload.php'; 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include 'dbconfig.php'; // Database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Use prepared statements to avoid SQL Injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Generating a token
        $reset_token = bin2hex(random_bytes(50));
        $resetLink = "http://localhost/PitStop/resetPassword.php?token=" . $reset_token;

        // Set token expiry to 1 hour from now
        $token_expiry = date('Y-m-d H:i:s', strtotime('+1 hour'));

        // Update the user record with the generated token and expiry
        $stmt = $conn->prepare("UPDATE users SET reset_token = ?, token_expiry = ? WHERE email = ?");
        $stmt->bind_param("sss", $reset_token, $token_expiry, $email);
        $stmt->execute();

        // Send the reset email using PHPMailer
        $mail = new PHPMailer(true);
        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.outlook.com'; // Set the SMTP server to send through
            $mail->SMTPAuth = true;          // Enable SMTP authentication
            $mail->Username = 'your_email@outlook.com'; // Your SMTP username (email)
            $mail->Password = 'your_app_password'; // Your SMTP password or App Password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
            $mail->Port = 587; // TCP port to connect to

            // Recipients
            $mail->setFrom('your_email@outlook.com', 'Your Name');
            $mail->addAddress($email); // Add a recipient

            // Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'Password Reset';
            $mail->Body = "Click this link to reset your password: <a href='$resetLink'>$resetLink</a>";

            $mail->send();
            echo "A password reset link has been sent to your email.";
        } 
        catch (Exception $e) {
            echo "Failed to send the reset email. Mailer Error: {$mail->ErrorInfo}";
        }

    } 
    else {
        echo "Email not found.";
    }
    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PitStop - Forgot Password</title>
    <link rel="stylesheet" href="css/forgotPassword.css?v=1.0">
</head>
<body>
    <h1>Forgot Password</h1>
    <div class="form-container">
        <div class="logo-container">Forgot Password</div>
        <form class="form" method="post" action="forgotPassword.php">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <button class="form-submit-btn" type="submit">Send Email</button>
        </form>
        <p class="signup-link">
            Don't have an account?
            <a href="signup.php" class="signup-link link">Sign up now</a>
        </p>
    </div>
</body>
</html>