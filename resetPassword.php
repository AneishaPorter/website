<?php
include 'dbconfig.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Verify the token
    $stmt = $conn->prepare("SELECT * FROM users WHERE token = ?");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Token is valid, show password reset form
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Reset password

            $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);

            // Update user password and clear the token
            $stmt = $conn->prepare("UPDATE users SET password = ?, token = NULL WHERE token = ?");
            $stmt->bind_param("ss", $new_password, $token);
            $stmt->execute();

            echo "Your password has been reset successfully.";
        }
        ?>
        <form method="post" action="">
            <label for="new_password">New Password: </label>
            <input type="password" id="new_password" name="new_password" required>
            <button type="submit">Reset Password</button>
        </form>
        <?php
    } else {
        echo "Invalid or expired token.";
    }
    $stmt->close();
}
$conn->close();
?>