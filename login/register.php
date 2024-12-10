<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="login-container">
        <center><h2>Register</h2></center>
        <form action="register_process.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Register">
            <div class="login-link">
                <center><a href="login.php">Already have an account? Login</a></center>
            </div>
        </form>
    </div>
</body>
</html>
