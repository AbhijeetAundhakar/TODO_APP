<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (isset($_COOKIE["user_$username"])) {
        $hashedPassword = $_COOKIE["user_$username"];
        if (password_verify($password, $hashedPassword)) {
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Invalid password!";
        }
    } else {
        $error = "User not found! Please signup.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - Todo App</title>
  <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
  <div class="form-container">
    <h2>Welcome Back</h2>
    <p class="subtitle">Login to continue to <strong>Todo App</strong></p>
    <?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>
    <form method="POST">
      <div class="input-group">
        <input type="text" name="username" required>
        <label>Username</label>
      </div>
      <div class="input-group">
        <input type="password" name="password" required>
        <label>Password</label>
      </div>
      <button type="submit">Login</button>
    </form>
    <p>Don’t have an account? <a href="signup.php">Sign Up</a></p>
  </div>
</body>
</html>
