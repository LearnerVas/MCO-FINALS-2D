<?php
session_start();

// Define username and password
define('USERNAME', 'admin');
define('PASSWORD', 'password123');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Validate username and password
    if ($username === USERNAME && $password === PASSWORD) {
        // Correct credentials, set session and redirect to dashboard
        $_SESSION['loggedin'] = true;
        header('Location: dashboard.php');
        exit;
    } else {
        // If the username and password is incorrect
        $error = "Invalid username or password. Please try again.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/logIn.css">
    <style> 
html { 
  background: url(assets/img.jpg) no-repeat center fixed; 
  background-size: cover;
}

body { 
  color: white; 
  
}
</style>
</head>
<body>
    <div class="outer-container">
        <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>
        <div class="rectangle-container">
            <div class="logo"><img src=assets/logo.png alt="Logo"> <!--class for image so it will not ruin the login container -->
            <div class="container">
            <div class="login-container">
                <form method="post" action="login.php">
                    <div class="input-group"> <!--This is for you to input your username and password-->
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="input-group"> <!--This is also for you to input your username and password-->
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button type="submit">Login</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
