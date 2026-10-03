<?php
if (!isset($pageTitle)) {
    $pageTitle = 'LabCorp';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
  <link rel="stylesheet" href="/app/style.css">
</head>
<body>
  <header>
    <a class="brand" href="/app/">LabCorp</a>
    <nav>
      <a href="/app/">Home</a>
      <a href="/app/login.php">Login</a>
    </nav>
  </header>
