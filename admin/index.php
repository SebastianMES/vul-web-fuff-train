<?php
$pageTitle = 'Admin';
require dirname(__DIR__) . '/includes/header.php';
require dirname(__DIR__) . '/config.php';
?>
<main class="card">
  <h1>Admin Panel</h1>
  <p>Local training dashboard. No authentication is enforced on this page so it is easy to find with directory enumeration.</p>
  <ul>
    <li>Database host: <?php echo htmlspecialchars(DB_HOST, ENT_QUOTES, 'UTF-8'); ?></li>
    <li>Database name: <?php echo htmlspecialchars(DB_NAME, ENT_QUOTES, 'UTF-8'); ?></li>
    <li>Application environment: <?php echo htmlspecialchars(APP_ENV, ENT_QUOTES, 'UTF-8'); ?></li>
  </ul>
  <p><a href="../">Back to home</a></p>
</main>
<?php require dirname(__DIR__) . '/includes/footer.php'; ?>
