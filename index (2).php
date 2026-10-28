
<?php
$pageTitle = "Muhammad Hanzla | Full-Stack Web Developer";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>

    <meta name="description" content="Muhammad Hanzla - Full-Stack Web Developer specializing in modern, responsive and professional websites.">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, sans-serif;
            background: #0b1120;
            color: #f1f5f9;
        }

        .navbar {
            background: #0b1120;
            border-bottom: 1px solid #263248;
        }

        .navbar-brand {
            color: #38bdf8 !important;
            font-size: 25px;
            font-weight: bold;
        }

        .nav-link {
            color: #e2e8f0 !important;
            margin-left: 12px;
            transition: 0.3s;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #38bdf8 !important;
        }

        .hero {
            min-height: 90vh;
            display: flex;
            align-items: center;
            padding: 80px 0;
            background: radial-gradient(circle at top right, #17385a, #0b1120 60%);
        }

        .hero h1 {
            font-size: clamp(36px, 5vw, 62px);
            font-weight: 800;
            line-height: 1.2;
        }

        .hero h1 span {
            color: #38bdf8;
        }

        .hero h3 {
            color: #cbd5e1;
            font-size: 23px;
            margin: 20px 0;
        }

        .hero p {
            color: #b7c3d4;
            font-size: 17px;
            line-height: 1.9;
            max-width: 650px;
        }

        .btn-main {
            background: #38bdf8;
            color: #07111e;
            padding: 13px 25px;
            border-radius: 8px;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
            margin: 10px 8px 10px 0;
            transition: 0.3s;
        }

        .btn-main:hover {
            background: #0284c7;
            color: white;
            transform: translateY(-3px);
        }

        .btn-outline {
            border: 1px solid #38bdf8;
            color: #38bdf8;
            padding: 12px 25px;
            border-radius: 8px;
            text-decoration: none;
            display: inline-block;
            transition: 0.3s;
        }

        .btn-outline:hover {
            background: #38bdf8;
            color: #07111e;
        }

        .hero-icon {
            width: 260px;
            height: 260px;
            margin: 30px auto;
            border: 3px solid #38bdf8;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #13243b;
            box-shadow: 0 0 45px #0ea5e955;
        }

        .hero-icon i {
            font-size: 115px;
            color: #38bdf8;
        }

        section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .section-title span {
            color: #38bdf8;
        }

        .section-subtitle {
            color: #aab8ca;
            text-align: center;
            margin-bottom: 45px;
        }

        .about-text {
            color: #bdc9d8;
            font-size: 17px;
            line-height: 1.9;
        }

        .custom-card {
            height: 100%;
            padding: 28px;
            background: #121d30;
            border: 1px solid #263b55;
            border-radius: 14px;
            transition: 0.3s;
        }

        .custom-card:hover {
            transform: translateY(-7px);
            border-color: #38bdf8;
        }

        .custom-card i {
            color: #38bdf8;
            font-size: 35px;
            margin-bottom: 20px;
        }

        .custom-card h4 {
            font-size: 21px;
            margin-bottom: 15px;
        }

        .custom-card p {
            color: #aebbd0;
            line-height: 1.8;
            margin-bottom: 0;
        }

        .skill-badge {
            display: inline-block;
            padding: 13px 20px;
            margin: 7px;
            background: #14253a;
            border: 1px solid #29445e;
            border-radius: 8px;
            color: #e2e8f0;
        }

        .skill-badge i {
            color: #38bdf8;
            margin-right: 8px;
        }

        .project-card {
            background: #121d30;
            border: 1px solid #263b55;
            padding: 25px;
            border-radius: 12px;
            height: 100%;
        }

        .project-card h4 {
            color: #38bdf8;
        }

        .project-card p {
            color: #bdc9d8;
            line-height: 1.8;
        }

        .contact-box {
            text-align: center;
            padding: 40px 20px;
            background: #121d30;
            border: 1px solid #263b55;
            border-radius: 15px;
        }

        footer {
            background: #070c17;
            padding: 25px 10px;
            text-align: center;
            color: #aab8ca;
            border-top: 1px solid #263248;
        }

        footer span {
            color: #38bdf8;
        }

        .whatsapp {
            position: fixed;
            right: 20px;
            bottom: 20px;
            width: 55px;
            height: 55px;
            border-radius: 50%;
            background: #25d366;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            text-decoration: none;
            z-index: 999;
            box-shadow: 0 4px 15px #0005;
        }

        .whatsapp:hover {
            background: #128c7e;
            color: white;
        }

        @media (max-width: 768px) {
            .hero {
                text-align: center;
            }

            .hero p {
                margin-left: auto;
                margin-right: auto;
            }

            .hero-icon {
                width: 200px;
                height: 200px;
            }

            .hero-icon i {
                font-size: 85px;
            }

            section {
                padding: 60px 0;
            }

            .section-title {
                font-size: 30px;
            }
        }
    </style>
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#home">MH.</a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About Me</a></li>
                <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Home / Hero -->
<section class="hero" id="home">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <p class="text-info fw-bold mb-2">
                    <i class="fa-solid fa-code"></i>
                    WELCOME TO MY PORTFOLIO
                </p>

                <h1>Hi, I'm <span>Muhammad Hanzla</span></h1>

                <h3>Full-Stack Web Developer</h3>

                <p>
                    I build modern, professional and responsive websites
                    for businesses and individuals. I turn ideas into
                    attractive digital experiences using modern web
                    technologies, clean code and practical solutions.
                </p>

                <a href="#projects" class="btn-main">
                    <i class="fa-solid fa-laptop-code"></i>
                    View My Work
                </a>

                <a href="#contact" class="btn-outline">
                    <i class="fa-solid fa-envelope"></i>
                    Hire Me
                </a>
            </div>

            <div class="col-lg-5 text-center">
                <div class="hero-icon">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <h4>Muhammad Hanzla</h4>
                <p class="mx-auto">Building Websites. Creating Solutions.</p>
            </div>
        </div>
    </div>
</section>

<!-- About -->
<section id="about">
    <div class="container">
        <h2 class="section-title">About <span>Me</span></h2>
        <p class="section-subtitle">Get to know me and my work</p>

        <div class="row align-items-center g-4">
            <div class="col-lg-4 text-center">
                <div class="hero-icon">
                    <i class="fa-solid fa-user-tie"></i>
                </div>
            </div>

            <div class="col-lg-8">
                <h3 class="mb-3">I'm Muhammad Hanzla</h3>

                <p class="about-text">
                    I am a passionate Full-Stack Web Developer focused on
                    creating user-friendly, responsive and professional
                    websites. I work with frontend technologies to build
                    attractive layouts and backend technologies to make
                    websites dynamic and functional.
                </p>

                <p class="about-text">
                    My goal is to help businesses establish their online
                    presence through quality web development, e-commerce
                    solutions and custom web applications.
                </p>

                <a href="#contact" class="btn-main">Let's Discuss Your Project</a>
            </div>
        </div>
    </div>
</section>

<!-- Skills -->
<section id="skills" style="background:#0e1728;">
    <div class="container text-center">
        <h2 class="section-title">My <span>Skills</span></h2>
        <p class="section-subtitle">Technologies I use to build websites</p>

        <div>
            <span class="skill-badge"><i class="fa-brands fa-html5"></i> HTML5</span>
            <span class="skill-badge"><i class="fa-brands fa-css3-alt"></i> CSS3</span>
            <span class="skill-badge"><i class="fa-brands fa-bootstrap"></i> Bootstrap 5</span>
            <span class="skill-badge"><i class="fa-brands fa-js"></i> JavaScript</span>
            <span class="skill-badge"><i class="fa-solid fa-code"></i> jQuery</span>
            <span class="skill-badge"><i class="fa-brands fa-php"></i> PHP</span>
            <span class="skill-badge"><i class="fa-solid fa-database"></i> MySQL</span>
            <span class="skill-badge"><i class="fa-brands fa-git-alt"></i> Git</span>
        </div>
    </div>
</section>

<!-- Projects -->
<section id="projects">
    <div class="container">
        <h2 class="section-title">My <span>Projects</span></h2>
        <p class="section-subtitle">Examples of the types of projects I develop</p>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="project-card">
                    <i class="fa-solid fa-store fa-2x text-info mb-3"></i>
                    <h4>Shop Management System</h4>
                    <p>
                        A business management application for products,
                        sales, stock, customers and reports.
                    </p>
                    <span class="badge bg-info text-dark">PHP & MySQL</span>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="project-card">
                    <i class="fa-solid fa-cart-shopping fa-2x text-info mb-3"></i>
                    <h4>E-commerce Website</h4>
                    <p>
                        An online store concept with product listings,
                        shopping cart and customer contact options.
                    </p>
                    <span class="badge bg-info text-dark">Bootstrap & PHP</span>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="project-card">
                    <i class="fa-solid fa-briefcase fa-2x text-info mb-3"></i>
                    <h4>Business Website</h4>
                    <p>
                        A responsive business website with company
                        information, services and a contact section.
                    </p>
                    <span class="badge bg-info text-dark">HTML & CSS</span>
                </div>
            </div>
        </div>

        <p class="text-center text-secondary mt-4">
            Note: These cards describe project types. Add live project links
            and screenshots when they are ready.
        </p>
    </div>
</section>

<!-- Services -->
<section id="services" style="background:#0e1728;">
    <div class="container">
        <h2 class="section-title">My <span>Services</span></h2>
        <p class="section-subtitle">How I can help your business</p>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="custom-card">
                    <i class="fa-solid fa-globe"></i>
                    <h4>Website Development</h4>
                    <p>Professional websites designed for desktop, tablet and mobile devices.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="custom-card">
                    <i class="fa-solid fa-palette"></i>
                    <h4>Frontend Development</h4>
                    <p>Clean layouts, responsive pages and user-friendly website interfaces.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="custom-card">
                    <i class="fa-solid fa-server"></i>
                    <h4>Backend Development</h4>
                    <p>Dynamic PHP applications and MySQL database integration.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="custom-card">
                    <i class="fa-solid fa-bag-shopping"></i>
                    <h4>E-commerce Solutions</h4>
                    <p>Online product catalogs, cart functionality and order workflows.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="custom-card">
                    <i class="fa-solid fa-database"></i>
                    <h4>Database Management</h4>
                    <p>Structured data storage and secure database connectivity.</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="custom-card">
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                    <h4>Website Maintenance</h4>
                    <p>Website updates, bug fixes and improvements to existing pages.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<section id="contact">
    <div class="container">
        <h2 class="section-title">Let's <span>Work Together</span></h2>
        <p class="section-subtitle">
            Have an idea? Let's discuss your next website project.
        </p>

        <div class="contact-box">
            <i class="fa-solid fa-paper-plane fa-3x text-info mb-4"></i>

            <h3>Muhammad Hanzla</h3>
            <p class="text-secondary mt-3 mb-4">
                Full-Stack Web Developer
            </p>

            <a href="https://wa.me/923081681059"
               class="btn-main" target="_blank" rel="noopener noreferrer">
                <i class="fa-brands fa-whatsapp"></i>
                Contact Me on WhatsApp
            </a>

            <p class="mt-3 mb-0 text-secondary">
                WhatsApp: 0308-1681059
            </p>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <p class="mb-2">
            &copy; <?php echo date("Y"); ?>
            <span>Muhammad Hanzla</span>. All Rights Reserved.
        </p>
        <p class="mb-0">Designed & Developed by Muhammad Hanzla</p>
    </div>
</footer>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/923081681059"
   class="whatsapp" target="_blank" rel="noopener noreferrer"
   aria-label="Chat on WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
</a>

<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function () {

    // Close mobile menu after clicking a navigation link
    $(".navbar-nav .nav-link").on("click", function () {
        $(".navbar-collapse").collapse("hide");
    });

    // Highlight the active section in the navbar
    $(window).on("scroll", function () {
        let currentSection = "";

        $("section[id]").each(function () {
            let sectionTop = $(this).offset().top - 130;

            if ($(window).scrollTop() >= sectionTop) {
                currentSection = $(this).attr("id");
            }
        });

        $(".navbar-nav .nav-link").removeClass("active");

        $('.navbar-nav .nav-link[href="#' + currentSection + '"]')
            .addClass("active");
    });

});
</script>

</body>
</html>
