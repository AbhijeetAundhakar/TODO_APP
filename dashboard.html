<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit();
}

/* -----------------------------
   Linked-list session storage
------------------------------*/
if (!isset($_SESSION['todos'])) {
  $_SESSION['todos'] = [];
  $_SESSION['head'] = null;
}

function nextId()
{
  return (string) hrtime(true);;
}

/* Add */
function addTodo($task)
{
  if (trim($task) === '') return;

  $id = nextId();
  $newNode = ['id' => $id, 'task' => trim($task), 'next' => null];

  if ($_SESSION['head'] === null) {
    $_SESSION['head'] = $id;
    $_SESSION['todos'][$id] = $newNode;
    return;
  }

  $current = $_SESSION['head'];
  while ($_SESSION['todos'][$current]['next'] !== null) {
    $current = $_SESSION['todos'][$current]['next'];
  }
  $_SESSION['todos'][$current]['next'] = $id;
  $_SESSION['todos'][$id] = $newNode;
}

/* Delete */
function deleteTodo($id)
{
  if (!isset($_SESSION['todos'][$id])) return;

  if ($_SESSION['head'] === $id) {
    $_SESSION['head'] = $_SESSION['todos'][$id]['next'];
    unset($_SESSION['todos'][$id]);
    return;
  }

  $current = $_SESSION['head'];
  while ($current !== null && $_SESSION['todos'][$current]['next'] !== $id) {
    $current = $_SESSION['todos'][$current]['next'];
  }
  if ($current !== null) {
    $_SESSION['todos'][$current]['next'] = $_SESSION['todos'][$id]['next'];
    unset($_SESSION['todos'][$id]);
  }
}

/* Update */
function updateTodo($id, $task)
{
  if (isset($_SESSION['todos'][$id])) {
    $_SESSION['todos'][$id]['task'] = trim($task);
  }
}

/* Handle POST */
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if (isset($_POST['add']))    addTodo($_POST['task'] ?? '');
  if (isset($_POST['delete'])) deleteTodo($_POST['id'] ?? '');
  if (isset($_POST['update'])) updateTodo($_POST['id'] ?? '', $_POST['task'] ?? '');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Dashboard - Todo App</title>
  <link rel="stylesheet" href="CSS/dashboard.css?v=<?php echo filemtime(__DIR__ . '/CSS/dashboard.css'); ?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>

<body>

  <!-- Top Nav -->
  <nav class="navbar navbar-dark glass-nav">
    <div class="container-fluid">
      <button class="btn btn-nav text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">☰</button>
      <a class="navbar-brand fw-semibold" href="#">TodoApp</a>
      <div class="ms-auto d-flex align-items-center gap-2">
        <span class="username-chip"><?php echo $_SESSION['username']; ?></span>
        <!-- <a href="logout.php" class="btn btn-outline-light btn-logout">Logout</a> -->
      </div>
    </div>
  </nav>

  <!-- Sidebar -->
  <div class="offcanvas offcanvas-start glass-canvas text-white shadow-lg" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
    <div class="offcanvas-header border-bottom border-white/10">
      <h5 class="offcanvas-title" id="sidebarLabel">Menu</h5>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body">
      <div class="text-center mb-4">
        <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($_SESSION['username']); ?>&background=random"
          class="rounded-circle shadow-sm border border-white" width="90" height="90" alt="Avatar">
        <h5 class="mt-3 mb-0"><?php echo htmlspecialchars($_SESSION['username']); ?></h5>
        <p class="text-white-50 small">Welcome back 👋</p>
      </div>

      <ul class="nav flex-column gap-1">
        <li class="nav-item"><a class="nav-link active" href="dashboard.php">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>



  <!-- Main -->
  <main class="page-wrap">
    <header class="hero">
      <h2 class="hero-title">
        Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?> 👋
      </h2>
      <p class="hero-sub">What’s your plan for today?</p>
    </header>

    <section class="glass-card">
      <form method="POST" class="todo-form" autocomplete="off">
        <div class="input-wrap">
          <input type="text" name="task" id="taskInput" placeholder="Add a task…">
          <label for="taskInput">Add a task…</label>
        </div>
        <button type="submit" name="add" class="btn-add">
          <span class="plus">＋</span> Add
        </button>
      </form>

      <div class="tasks-list">
        <?php
        $count = 0;
        $current = $_SESSION['head'];
        if ($current === null): ?>
          <div class="empty-state">
            <div class="empty-illustration"></div>
            <p>No tasks yet. Add your first one ✨</p>
          </div>
        <?php
        endif;

        while ($current !== null):
          $task = $_SESSION['todos'][$current];
          $count++;
        ?>
          <div class="task-card" id="task-<?php echo $task['id']; ?>" style="--i: <?php echo $count; ?>;">
            <form method="POST" class="task-inline">
              <input type="hidden" name="id" value="<?php echo $task['id']; ?>">

              <div class="task-input-wrap">
                <input type="text" name="task" value="<?php echo htmlspecialchars($task['task']); ?>">
              </div>

              <div class="actions">
                <button type="submit" name="update" class="btn-icon success" title="Update">
                  <!-- pencil icon-->
                  <svg width="18" height="18" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708L5.207 14.5H2v-3.207L12.146.146zM11.207 2 3 10.207V13h2.793L14 4.793 11.207 2z" />
                  </svg>
                </button>
                <button type="submit" name="delete" class="btn-icon danger" title="Delete">
                  <!-- trash icon-->
                  <svg width="18" height="18" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
                    <path d="M5.5 5.5a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0v-6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0v-6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 1 1 0v6a.5.5 0 0 1-1 0v-6z" />
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 1 1 0-2H5a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1h2.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118z" />
                  </svg>
                </button>
              </div>
            </form>
          </div>
        <?php
          $current = $task['next'];
        endwhile;
        ?>
      </div>
    </section>
  </main>

  <!-- Decorative orbs -->
  <div class="orb orb-1"></div>
  <div class="orb orb-2"></div>
  <div class="orb orb-3"></div>
</body>

</html>
