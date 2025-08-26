<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (!empty($username) && !empty($password)) {
        // Store user details in cookies (valid for 1 day)
        setcookie("user_$username", password_hash($password, PASSWORD_DEFAULT), time() + 86400, "/");
        $success = "Registration successful! You can now login.";
    } else {
        $error = "All fields are required!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up - Todo App</title>
  <link rel="stylesheet" href="CSS/signup.css">
</head>
<body>
  <div class="form-container">
    <h2>Create Account</h2>
    <p class="subtitle">Join <strong>Todo App</strong> and manage tasks smarter</p>

    <?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>
    <?php if(isset($success)) echo "<p class='success'>$success</p>"; ?>

    <form method="POST">
      <div class="input-group">
        <input type="text" name="username" required>
        <label>Username</label>
      </div>
      <div class="input-group">
        <input type="password" name="password" required>
        <label>Password</label>
      </div>
      <button type="submit">Sign Up</button>
    </form>
    <p>Already have an account? <a href="login.php">Login</a></p>
  </div>
</body>
</html>
