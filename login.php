<?php
session_start();

if (!empty($_SESSION["username"])) {
    header("location:home.php");
    die();
}

if (!empty($_POST['email_or_username']) && !empty($_POST['password'])) {
    include 'dbconfig.php';
    
    // Using the combined input for username or email
    $email_or_username = $conn->real_escape_string($_POST['email_or_username']);
    $password = $_POST['password'];
    
    // Corrected query to check both email and username
    $query = "SELECT * FROM users WHERE email = '$email_or_username' OR username = '$email_or_username';";
    $results = $conn->query($query);
    $count = $results->num_rows;

    // If result matched given username/email and password, there must be one row
    if ($count == 1) {
        $user = $results->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            // Set session variables for user info
            $_SESSION["username"] = $user['username'];
            $_SESSION["user_id"] = $user['id'];
            header("location:home.php");
            exit();
        } else {
            echo "Invalid password";
        }
    } else {
        echo "No user found with the given username or email";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PitStop - Login</title>
    <link rel="stylesheet" href="css/login.css?v=1.0">
    <script>
        function togglePassword() {
            var passwordInput = document.getElementById("password");
            var toggleIcon = document.getElementById("toggle-icon");

            // Toggle password visibility
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleIcon.src = "eye_open_icon.png";  // Replace with an icon for "eye open"
            } else {
                passwordInput.type = "password";
                toggleIcon.src = "eye_closed_icon.png";  // Replace with an icon for "eye closed"
            }
        }
    </script>
</head>
<body>
    <div class="logo">
        <img src="images/MainLogoNoBg.png" alt="PitStop Logo">
    </div>
    <div class="login">
        <h2>Welcome back!</h2>
        <h2>Login below if you are an existing user.</h2>
        <br><br>
        <form method="post" action="login.php">
            <!-- Use email_or_username for both email and username -->
            <input type="text" name="email_or_username" required placeholder="Username or Email..."> <br> <br>
            <input type="password" name="password" required placeholder="Password..."> <br> <br>
            <button class="shadow__btn1">Login</button>
        </form>
        <br><br>
        <a href="forgotPassword.php" class="forgot-password"><button class="shadow__btn2">Forgot Password?</button></a>
    </div>
    
    <div class="sign-up">
        <h3>Press the button below to create an account.</h3>
        <a href="signup.php" style="display: inline-block;">
            <img src="images/tyre.png" alt="formula 1 soft tyre - sign up button" style="width: 100px; height: auto;">
        </a>
        <br>
        <h3>Sign Up</h3>
    </div>
</body>
</html>
