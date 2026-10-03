<?php
$pageTitle = 'Login';
$message = '';
$loggedIn = false;

// Intentionally trivial credential check for local enumeration labs.
$labUser = 'admin';
$labPass = 'Password123!';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if ($username === $labUser && $password === $labPass) {
        $loggedIn = true;
        $message = 'Login successful. Welcome to the training portal.';
    } else {
        $message = 'Invalid username or password.';
    }
}

require __DIR__ . '/includes/header.php';
?>
<main class="card">
  <h1>Employee Login</h1>
  <?php if ($message !== ''): ?>
    <p class="<?php echo $loggedIn ? 'ok' : 'error'; ?>"><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></p>
  <?php endif; ?>

  <?php if (!$loggedIn): ?>
  <form method="post" action="login.php">
    <label for="username">Username</label>
    <input id="username" name="username" type="text" autocomplete="username">

    <label for="password">Password</label>
    <input id="password" name="password" type="password" autocomplete="current-password">

    <button type="submit">Sign in</button>
  </form>
  <p class="muted">Hint for the lab: some credentials are stored in world-readable files.</p>
  <?php else: ?>
    <p><a href="admin/">Open admin panel</a></p>
  <?php endif; ?>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
