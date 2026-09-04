<?php
require_once __DIR__ . '/seo-config.php';

// Set page key default if not defined in child page
if (!isset($page_key)) {
    $page_key = basename($_SERVER['PHP_SELF'], '.php');
    if ($page_key === 'index') {
        $page_key = 'home';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?= render_seo_tags($page_key) ?>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- Local Stylesheets (No CDN for maximum speed & reliability) -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/leaflet.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<?php include __DIR__ . '/navbar.php'; ?>
