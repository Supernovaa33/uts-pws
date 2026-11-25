<?php
$pageTitle = $pageTitle ?? APP_BRAND;
$activePage = $activePage ?? 'home';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($pageTitle) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="d-flex flex-column min-vh-100">

<nav class="navbar navbar-expand-lg navbar-light navbar-custom">
    <div class="container-fluid px-3 px-lg-4">
        <a class="navbar-brand" href="index.php"><?= e(APP_BRAND) ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?= $activePage === 'home' ? 'active' : '' ?>" <?= $activePage === 'home' ? 'aria-current="page"' : '' ?> href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $activePage === 'features' ? 'active' : '' ?>" href="index.php#daftar-biodata">Features</a>
                </li>
                <li class="nav-item">
                    <span class="nav-link disabled nav-meta-nama" aria-disabled="true"><?= e(NAV_NAMA) ?></span>
                </li>
                <li class="nav-item">
                    <span class="nav-link disabled nav-meta-nim" aria-disabled="true"><?= e(NAV_NIM) ?></span>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="flex-grow-1">
    <div class="container main-container py-3">
