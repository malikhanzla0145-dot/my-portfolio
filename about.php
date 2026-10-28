
<?php
$pageTitle = "About Me";
include 'header.php';
?>

<!-- ABOUT HERO -->
<section class="hero" style="min-height: 45vh;">
    <div class="container text-center">
        <span class="badge bg-primary p-2 mb-3">
            GET TO KNOW ME
        </span>

        <h1>About <span>Me</span></h1>

        <p class="mx-auto" style="max-width: 700px;">
            Learn about my journey, my passion for web development
            and the technologies I use to build modern websites.
        </p>
    </div>
</section>

<!-- ABOUT CONTENT -->
<section class="section">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-5 text-center">
                <img
                    src="images/hanzla.jpg"
                    alt="Muhammad Hanzla"
                    class="profile-img"
                    loading="lazy"
                >

                <h3 class="mt-4">Muhammad Hanzla</h3>
                <p class="text-primary fw-bold">
                    Full-Stack Web Developer
                </p>
            </div>

            <div class="col-lg-7">
                <div class="about-content">
                    <span class="text-primary fw-bold">
                        MY INTRODUCTION
                    </span>

                    <h2 class="mt-3">
                        Building Digital Experiences
                        <span class="highlight">That Matter</span>
                    </h2>

                    <p>
                        Hello! I'm Muhammad Hanzla, a web developer
                        interested in creating modern, responsive and
                        user-friendly websites.
                    </p>

                    <p>
                        I work with HTML5, CSS3, Bootstrap 5,
                        JavaScript, jQuery, PHP and MySQL to build
                        websites with attractive interfaces and useful
                        functionality.
                    </p>

                    <p>
                        I enjoy learning new techniques, solving
                        development problems and improving my coding
                        skills through practical projects.
                    </p>

                    <p>
                        My goal is to create websites that look
                        professional, work smoothly on different
                        devices and meet the needs of their users.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mt-4">
                        <a href="projects.php" class="btn btn-primary">
                            <i class="fas fa-laptop-code me-2"></i>
                            View My Work
                        </a>

                        <a href="contact.php" class="btn btn-outline-light">
                            <i class="fas fa-envelope me-2"></i>
                            Contact Me
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- MY APPROACH -->
<section class="section">
    <div class="container">

        <div class="text-center mb-5">
            <span class="text-primary fw-bold">HOW I WORK</span>
            <h2 class="section-title mt-2">
                My <span>Approach</span>
            </h2>
            <p class="section-subtitle">
                Every website starts with understanding the goal
                and building a solution around it.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="service-card text-center">
                    <div class="service-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Understand</h3>
                    <p>
                        First, I focus on the project requirements,
                        purpose and user needs.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-card text-center">
                    <div class="service-icon">
                        <i class="fas fa-pencil-ruler"></i>
                    </div>
                    <h3>Design</h3>
                    <p>
                        I create a clean layout with consistent colors,
                        readable text and responsive sections.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-card text-center">
                    <div class="service-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Develop</h3>
                    <p>
                        I turn the design into a functional website
                        and check it on different screen sizes.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- TECHNOLOGY OVERVIEW -->
<section class="section">
    <div class="container">

        <div class="text-center mb-5">
            <span class="text-primary fw-bold">MY TOOLKIT</span>
            <h2 class="section-title mt-2">
                Technologies I <span>Use</span>
            </h2>
        </div>

        <div class="row g-3">

            <div class="col-6 col-md-4 col-lg-3">
                <div class="skill-card text-center">
                    <i class="fab fa-html5 fa-2x mb-3"></i>
                    <h5>HTML5</h5>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="skill-card text-center">
                    <i class="fab fa-css3-alt fa-2x mb-3"></i>
                    <h5>CSS3</h5>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="skill-card text-center">
                    <i class="fab fa-bootstrap fa-2x mb-3"></i>
                    <h5>Bootstrap 5</h5>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="skill-card text-center">
                    <i class="fab fa-js fa-2x mb-3"></i>
                    <h5>JavaScript</h5>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="skill-card text-center">
                    <i class="fas fa-code fa-2x mb-3"></i>
                    <h5>jQuery</h5>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="skill-card text-center">
                    <i class="fab fa-php fa-2x mb-3"></i>
                    <h5>PHP</h5>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="skill-card text-center">
                    <i class="fas fa-database fa-2x mb-3"></i>
                    <h5>MySQL</h5>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="skill-card text-center">
                    <i class="fab fa-github fa-2x mb-3"></i>
                    <h5>GitHub</h5>
                </div>
            </div>

        </div>

        <div class="text-center mt-5">
            <a href="skills.php" class="btn btn-primary">
                Explore My Skills
                <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>

    </div>
</section>

<!-- CONTACT CTA -->
<section class="section">
    <div class="container">
        <div class="about-card text-center">
            <h2>Let's Work Together</h2>

            <p class="mx-auto" style="max-width: 650px;">
                Have an idea for a website? Get in touch to discuss
                your project and requirements.
            </p>

            <a href="contact.php" class="btn btn-primary mt-3">
                Get In Touch
                <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
