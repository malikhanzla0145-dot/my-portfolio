
<?php
if (!isset($pageTitle)) {
    $pageTitle = "Muhammad Hanzla | Web Developer";
}
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?= htmlspecialchars($pageTitle) ?> | Muhammad Hanzla
    </title>

    <meta name="description"
          content="Muhammad Hanzla - Full-Stack Web Developer specializing in responsive websites, PHP, MySQL, Bootstrap and modern web design.">

    <meta name="theme-color" content="#080d18">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">

        <a class="navbar-brand" href="index.php">
            <span>H</span>anzla.
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavbar"
                aria-controls="mainNavbar"
                aria-expanded="false"
                aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link <?= $currentPage === 'index.php' ? 'active' : '' ?>"
                       href="index.php">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $currentPage === 'about.php' ? 'active' : '' ?>"
                       href="about.php">
                        About
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $currentPage === 'skills.php' ? 'active' : '' ?>"
                       href="skills.php">
                        Skills
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $currentPage === 'services.php' ? 'active' : '' ?>"
                       href="services.php">
                        Services
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $currentPage === 'projects.php' ? 'active' : '' ?>"
                       href="projects.php">
                        Projects
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $currentPage === 'contact.php' ? 'active' : '' ?>"
                       href="contact.php">
                        Contact
                    </a>
                </li>

                <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                    <a href="contact.php" class="btn btn-primary btn-sm">
                        <i class="fas fa-paper-plane me-1"></i>
                        Hire Me
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>

<!-- MAIN CONTENT START -->
<main>
