<?php
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= isset($page_title) ? htmlspecialchars($page_title) : "DailyJournal"; ?></title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  <style>
    :root{
      --pink:#ff4da6;
      --pink-hover:#ff2f98;
    }

    .navbar-pink{
      background-color: var(--pink) !important;
    }

    .btn-primary{
      background-color: var(--pink) !important;
      border-color: var(--pink) !important;
    }
    .btn-primary:hover{
      background-color: var(--pink-hover) !important;
      border-color: var(--pink-hover) !important;
    }

    .table-dark{
      background-color: var(--pink) !important;
    }
  </style>
</head>

<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-pink navbar-pink">
  <div class="container">
    <a class="navbar-brand fw-semibold" href="admin.php">DailyJournal</a>

    <div class="d-flex gap-2 align-items-center">
      <?php if (isset($_SESSION['username'])): ?>
        <span class="navbar-text text-white">Hi, <?= htmlspecialchars($_SESSION['nama'] ?? $_SESSION['username']); ?></span>
        <a class="btn btn-outline-light btn-sm" href="logout.php">Logout</a>
      <?php endif; ?>
    </div>
  </div>
</nav>

<div class="container py-4">
