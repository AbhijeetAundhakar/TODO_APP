<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Todo App - Home</title>
  <link rel="stylesheet" href="CSS/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar glass-nav">
    <div class="container d-flex justify-content-between align-items-center">
      <h1 class="logo">✨ TodoApp</h1>
      <ul class="nav-links d-flex align-items-center">
        <?php if (isset($_SESSION['username'])): ?>
          <li><a href="dashboard.php" class="btn-glass">Dashboard</a></li>
          <li><a href="logout.php" class="btn-glass">Logout</a></li>
        <?php else: ?>
          <li><a href="signup.php" class="btn-glass">Sign Up</a></li>
          <li><a href="login.php" class="btn-glass">Login</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="hero-overlay"></div>
    <div class="hero-content text-center">
      <h2>Stay Organized, Stay Ahead 🚀</h2>
      <p>Your personal task manager to help you get more done every day.</p>
      <?php if (!isset($_SESSION['username'])): ?>
        <a href="signup.php" class="cta-btn start-btn">Get Started</a>
      <?php else: ?>
        <a href="dashboard.php" class="cta-btn">Go to Dashboard</a>
      <?php endif; ?>
    </div>
  </section>

  <!-- Features Section -->
  <section class="features-section py-5">
    <div class="container">
      <h2 class="text-center mb-5">Why Choose TodoApp?</h2>

      <div class="row g-5">
        <!-- Feature 1 -->
        <div class="col-md-4">
          <div class="feature-card glass-card text-center p-4">
            <img src="./img/22.jpg" class="img-fluid rounded mb-3 shadow" alt="Task Management">
            <h3>Organize Tasks Effortlessly</h3>
            <p>Quickly create, update, and track your tasks. Categorize them by priority, due date, or project.</p>
          </div>
        </div>

        <!-- Feature 2 -->
        <div class="col-md-4">
          <div class="feature-card glass-card text-center p-4">
            <img src="./img/33.jpg" class="img-fluid rounded mb-3 shadow" alt="Reminders">
            <h3>Smart Reminders</h3>
            <p>Never miss a deadline again with smart reminders and real-time notifications.</p>
          </div>
        </div>

        <!-- Feature 3 -->
        <div class="col-md-4">
          <div class="feature-card glass-card text-center p-4">
            <img src="./img/44.jpg" class="img-fluid rounded mb-3 shadow" alt="Mobile Access">
            <h3>Access Anywhere</h3>
            <p>Manage your tasks on desktop, tablet, or phone — TodoApp is always with you.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer text-center py-4">
    <p>© <?php echo date("Y"); ?> TodoApp — Built to make your life easier ❤️</p>
  </footer>
</body>

</html>
