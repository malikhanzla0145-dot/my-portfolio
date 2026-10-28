
<?php
$pageTitle = "My Skills";
include 'header.php';
?>

<!-- SKILLS HERO -->
<section class="py-5">
    <div class="container py-4">

        <div class="text-center mb-5">
            <span class="badge bg-info text-dark px-3 py-2 mb-3">
                MY EXPERTISE
            </span>

            <h1 class="display-4 fw-bold text-white">
                My Technical <span class="text-info">Skills</span>
            </h1>

            <p class="text-secondary mx-auto mt-3" style="max-width: 700px;">
                I am continuously improving my web development skills
                and building responsive, modern and user-friendly websites.
            </p>
        </div>

        <!-- MAIN SKILLS -->
        <div class="row g-4">

            <div class="col-md-6 col-lg-4">
                <div class="service-card h-100 p-4">
                    <div class="mb-3">
                        <i class="fab fa-html5 fa-3x text-danger"></i>
                    </div>
                    <h4 class="text-white">HTML5</h4>
                    <p class="text-secondary">
                        Creating structured, semantic and accessible
                        website layouts.
                    </p>
                    <span class="badge bg-secondary">Frontend</span>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="service-card h-100 p-4">
                    <div class="mb-3">
                        <i class="fab fa-css3-alt fa-3x text-info"></i>
                    </div>
                    <h4 class="text-white">CSS3</h4>
                    <p class="text-secondary">
                        Designing modern layouts, animations,
                        colors and responsive interfaces.
                    </p>
                    <span class="badge bg-secondary">Frontend</span>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="service-card h-100 p-4">
                    <div class="mb-3">
                        <i class="fab fa-bootstrap fa-3x text-primary"></i>
                    </div>
                    <h4 class="text-white">Bootstrap 5</h4>
                    <p class="text-secondary">
                        Building responsive websites using the
                        Bootstrap grid and components.
                    </p>
                    <span class="badge bg-secondary">Framework</span>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="service-card h-100 p-4">
                    <div class="mb-3">
                        <i class="fab fa-js fa-3x text-warning"></i>
                    </div>
                    <h4 class="text-white">JavaScript</h4>
                    <p class="text-secondary">
                        Adding interactive features and dynamic
                        behavior to web pages.
                    </p>
                    <span class="badge bg-secondary">Programming</span>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="service-card h-100 p-4">
                    <div class="mb-3">
                        <i class="fab fa-php fa-3x text-info"></i>
                    </div>
                    <h4 class="text-white">PHP</h4>
                    <p class="text-secondary">
                        Developing server-side functionality,
                        forms and dynamic web applications.
                    </p>
                    <span class="badge bg-secondary">Backend</span>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="service-card h-100 p-4">
                    <div class="mb-3">
                        <i class="fas fa-database fa-3x text-success"></i>
                    </div>
                    <h4 class="text-white">MySQL</h4>
                    <p class="text-secondary">
                        Working with databases to store and manage
                        website information.
                    </p>
                    <span class="badge bg-secondary">Database</span>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="service-card h-100 p-4">
                    <div class="mb-3">
                        <i class="fab fa-js-square fa-3x text-warning"></i>
                    </div>
                    <h4 class="text-white">jQuery</h4>
                    <p class="text-secondary">
                        Simplifying JavaScript interactions and
                        handling common page events.
                    </p>
                    <span class="badge bg-secondary">JavaScript Library</span>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="service-card h-100 p-4">
                    <div class="mb-3">
                        <i class="fas fa-mobile-screen-button fa-3x text-info"></i>
                    </div>
                    <h4 class="text-white">Responsive Design</h4>
                    <p class="text-secondary">
                        Creating layouts that adapt to mobile,
                        tablet and desktop screens.
                    </p>
                    <span class="badge bg-secondary">Web Design</span>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="service-card h-100 p-4">
                    <div class="mb-3">
                        <i class="fas fa-code-branch fa-3x text-success"></i>
                    </div>
                    <h4 class="text-white">Problem Solving</h4>
                    <p class="text-secondary">
                        Practicing debugging, improving code
                        and solving development challenges.
                    </p>
                    <span class="badge bg-secondary">Development</span>
                </div>
            </div>

        </div>

        <!-- WORK PROCESS -->
        <div class="mt-5 pt-4 text-center">
            <h2 class="text-white fw-bold mb-3">
                Always <span class="text-info">Learning</span>
            </h2>

            <p class="text-secondary mx-auto mb-4"
               style="max-width: 700px;">
                Technology keeps evolving, and so do I. My goal is
                to keep learning, improve my coding practices and
                build better digital experiences.
            </p>

            <a href="projects.php" class="btn btn-primary px-4 py-3 me-2">
                <i class="fas fa-code me-2"></i>View My Projects
            </a>

            <a href="contact.php" class="btn btn-outline-info px-4 py-3">
                <i class="fas fa-envelope me-2"></i>Contact Me
            </a>
        </div>

    </div>
</section>

<?php include 'footer.php'; ?>
