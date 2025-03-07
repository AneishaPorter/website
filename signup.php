<?php
include "dbconfig.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        echo "New account created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PitStop - Sign Up</title>
    <link rel="stylesheet" href="css/signup.css?v=1.0">
</head>
<body>
    <section>
        <div class="login">
            <h2>Sign Up</h2>
            <!-- Add form with action and method -->
            <form action="signup.php" method="POST">
                <div class="inputBox">
                    <input type="text" name="email" placeholder="Email" required>
                </div>
                <div class="inputBox">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="inputBox">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="inputBox">
                    <input type="submit" value="Create Account">
                </div>
            </form>
            <div class="group">
                <a href="forgotPassword.php">Forgot Password</a>
                <a href="login.php">Login</a>
            </div>
        </div>
    </section>
</body>
</html>

