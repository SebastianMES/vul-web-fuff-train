<?php
$pageTitle = 'LabCorp Portal';
require __DIR__ . '/includes/header.php';
?>
<main class="card">
  <h1>LabCorp Internal Portal</h1>
  <p>This is a local cybersecurity training site. It is intentionally messy so directory and file enumeration tools can find extra paths.</p>
  <ul>
    <li><a href="login.php">Employee login</a></li>
    <li><a href="admin/">Admin panel</a></li>
    <li><a href="secret/">Internal notices</a></li>
  </ul>
  <p class="muted">Training environment only. Do not expose this host to the internet.</p>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
