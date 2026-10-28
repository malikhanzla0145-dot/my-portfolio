<?php
$pageTitle = "Home";
include 'header.php';

/* Six portfolio projects */
$projects = [
    ["name" => "Sanfi Technologies", "description" => "A professional technology website showcasing digital solutions and business services.", "image" => "https://digitaladverza.com/images/portfolio-web-sanfitech.webp", "url" => "https://sanfitechnologies.com/", "category" => "Technology"],
    ["name" => "SANFI Diagnostics", "description" => "A healthcare diagnostics website providing information about diagnostic services.", "image" => "https://digitaladverza.com/images/portfolio-web-sanfidiag.webp", "url" => "https://sanfidiagnostics.com/", "category" => "Healthcare"],
    ["name" => "Sharjah Auto Paint", "description" => "An automotive website presenting vehicle painting and related services.", "image" => "https://digitaladverza.com/images/portfolio-web-sharjahautopaint.webp", "url" => "https://sharjahautopaint.com/", "category" => "Automotive"],
    ["name" => "AGD Grocery Delivery", "description" => "An online grocery delivery website designed to make shopping more convenient.", "image" => "https://digitaladverza.com/images/portfolio-web-alazka.webp", "url" => "https://food.alazkadg.com/", "category" => "E-Commerce"],
    ["name" => "Jedan Distributor", "description" => "A business website showcasing distributor products and company information.", "image" => "https://digitaladverza.com/images/portfolio-web-jedan.webp", "url" => "https://jedan.pk/", "category" => "Business"],
    ["name" => "Kangaroo Publications", "description" => "A publishing website presenting publications and related information.", "image" => "https://digitaladverza.com/images/portfolio-web-kangaroo.webp", "url" => "https://kangaroopublication.com/", "category" => "Publishing"]
];
?>

<style>
:root {
    --home-primary: #6366f1;
    --home-secondary: #8b5cf6;
    --home-dark: #0b1020;
    --home-card: rgba(255,255,255,.045);
    --home-border: rgba(255,255,255,.10);
    --home-text: #f3f4f6;
    --home-muted: #aab2c5;
}
.home-page { overflow:hidden; color:var(--home-text); }
.home-page section { position:relative; }
.home-page .home-container { width:min(1160px,92%); margin:auto; }
.home-page .home-section { padding:85px 0; }
.home-page .section-heading { max-width:720px; margin:0 auto 45px; text-align:center; }
.home-page .section-label { display:inline-block; color:#a5b4fc; font-size:12px; font-weight:800; letter-spacing:2px; text-transform:uppercase; margin-bottom:12px; }
.home-page .section-heading h2,.home-page .home-about h2,.home-page .home-contact h2 { font-size:clamp(28px,4vw,42px); line-height:1.2; font-weight:800; margin-bottom:15px; }
.home-page .section-heading h2 span,.home-page .home-about h2 span,.home-page .home-contact h2 span { color:#818cf8; }
.home-page .section-heading p,.home-page .home-muted { color:var(--home-muted); line-height:1.8; font-size:15px; }
.home-page .home-btn { display:inline-flex; align-items:center; justify-content:center; gap:9px; padding:12px 21px; border-radius:10px; text-decoration:none; font-size:14px; font-weight:700; transition:.25s ease; }
.home-page .home-btn-primary { color:#fff; background:linear-gradient(135deg,var(--home-primary),var(--home-secondary)); border:1px solid transparent; box-shadow:0 8px 25px rgba(99,102,241,.22); }
.home-page .home-btn-primary:hover { color:#fff; transform:translateY(-3px); box-shadow:0 12px 30px rgba(99,102,241,.35); }
.home-page .home-btn-outline { color:#fff; border:1px solid rgba(255,255,255,.2); background:rgba(255,255,255,.035); }
.home-page .home-btn-outline:hover { color:#fff; border-color:#818cf8; background:rgba(99,102,241,.12); }

/* HERO */
.home-page .home-hero { padding:100px 0 85px; background:radial-gradient(ellipse at 10% 10%,rgba(99,102,241,.18),transparent 42%),radial-gradient(ellipse at 90% 75%,rgba(139,92,246,.13),transparent 38%); }
.home-page .hero-badge { display:inline-flex; align-items:center; gap:9px; padding:9px 14px; border-radius:30px; color:#c7d2fe; border:1px solid rgba(129,140,248,.25); background:rgba(99,102,241,.1); font-size:12px; font-weight:700; margin-bottom:23px; }
.home-page .hero-title { font-size:clamp(36px,5.2vw,61px); font-weight:850; line-height:1.12; letter-spacing:-1.5px; margin-bottom:17px; }
.home-page .hero-title span { display:block; background:linear-gradient(90deg,#818cf8,#c084fc); -webkit-background-clip:text; background-clip:text; color:transparent; }
.home-page .hero-role { font-size:clamp(19px,2.5vw,26px); font-weight:700; margin-bottom:19px; }
.home-page .hero-description { max-width:610px; color:var(--home-muted); font-size:16px; line-height:1.9; margin-bottom:27px; }
.home-page .hero-points { display:flex; flex-wrap:wrap; gap:17px; margin-top:27px; }
.home-page .hero-points span { color:#d1d5db; font-size:13px; }
.home-page .hero-points i { color:#818cf8; margin-right:7px; }

/* PROFILE IMAGE: larger frame; image stays fully visible */
.home-page .hero-profile-wrap {
    position:relative;
    width:475px;
    max-width:100%;
    margin:0 auto;
}
.home-page .hero-profile-frame {
    width:100%;
    padding:10px;
    box-sizing:border-box;
    border-radius:30px;
    border:1px solid rgba(129,140,248,.45);
    background:linear-gradient(145deg,rgba(99,102,241,.20),rgba(139,92,246,.04));
    box-shadow:0 25px 70px rgba(0,0,0,.24);
}
.home-page .hero-profile-img {
    display:block;
    width:100%;
    max-width:100%;
    height:auto;
    max-height:none;
    object-fit:contain;
    object-position:center;
    border-radius:22px;
    background:#171d30;
}
.home-page .hero-profile-placeholder {
    min-height:620px;
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    gap:12px;
    border-radius:22px;
    color:#c7d2fe;
    background:#171d30;
}
.home-page .hero-profile-placeholder i { font-size:65px; }
.home-page .hero-profile-placeholder span { font-size:13px; }
.home-page .hero-profile-caption { text-align:center; margin-top:22px; }
.home-page .hero-profile-caption h3 { font-size:21px; font-weight:800; margin-bottom:6px; }
.home-page .hero-profile-caption p { color:var(--home-muted); font-size:14px; margin-bottom:13px; }
.home-page .hero-socials { display:flex; justify-content:center; gap:10px; }
.home-page .hero-socials a { width:40px; height:40px; display:grid; place-items:center; border-radius:12px; color:#dbeafe; text-decoration:none; border:1px solid var(--home-border); background:rgba(255,255,255,.04); transition:.25s ease; }
.home-page .hero-socials a:hover { color:#fff; background:var(--home-primary); transform:translateY(-3px); }

/* ABOUT */
.home-page .home-about-card { height:100%; padding:30px; border:1px solid var(--home-border); border-radius:20px; background:var(--home-card); }
.home-page .home-about-card>p { color:var(--home-muted); font-size:15px; line-height:1.9; }
.home-page .home-feature-grid { display:grid; grid-template-columns:repeat(2,minmax(0,1fr)); gap:15px; }
.home-page .home-feature { min-height:145px; padding:22px 16px; border-radius:17px; border:1px solid var(--home-border); background:var(--home-card); transition:.25s ease; }
.home-page .home-feature:hover { border-color:rgba(129,140,248,.55); transform:translateY(-4px); }
.home-page .home-feature i { font-size:25px; color:#a5b4fc; margin-bottom:14px; }
.home-page .home-feature h3 { font-size:16px; font-weight:750; margin-bottom:7px; }
.home-page .home-feature p { color:var(--home-muted); font-size:12px; line-height:1.6; margin:0; }

/* SKILLS */
.home-page .home-skills-grid { display:grid; grid-template-columns:repeat(4,minmax(0,1fr)); gap:17px; }
.home-page .home-skill { padding:25px 12px; text-align:center; border-radius:16px; border:1px solid var(--home-border); background:var(--home-card); transition:.25s ease; }
.home-page .home-skill:hover { transform:translateY(-5px); border-color:rgba(129,140,248,.55); }
.home-page .home-skill i { display:block; color:#a5b4fc; font-size:34px; margin-bottom:15px; }
.home-page .home-skill h3 { font-size:15px; font-weight:750; margin-bottom:7px; }
.home-page .home-skill p { font-size:12px; color:var(--home-muted); margin:0; }

/* SERVICES */
.home-page .home-service { height:100%; padding:30px 25px; border-radius:19px; border:1px solid var(--home-border); background:var(--home-card); transition:.25s ease; }
.home-page .home-service:hover { transform:translateY(-5px); border-color:rgba(129,140,248,.55); }
.home-page .home-service-icon { display:grid; place-items:center; width:55px; height:55px; border-radius:15px; background:rgba(99,102,241,.14); color:#a5b4fc; font-size:23px; margin-bottom:22px; }
.home-page .home-service h3 { font-size:19px; font-weight:800; margin-bottom:12px; }
.home-page .home-service p { color:var(--home-muted); font-size:14px; line-height:1.8; margin-bottom:0; }

/* PROJECTS */
.home-page .home-project-card { height:100%; overflow:hidden; border:1px solid var(--home-border); border-radius:17px; background:rgba(255,255,255,.035); transition:transform .25s ease,border-color .25s ease; }
.home-page .home-project-card:hover { transform:translateY(-5px); border-color:rgba(129,140,248,.55); }
.home-page .home-project-image { height:175px; padding:10px; position:relative; overflow:hidden; background:#151b2d; border-bottom:1px solid var(--home-border); }
.home-page .home-project-image img { display:block; width:100%; height:100%; object-fit:contain; object-position:center; border-radius:7px; }
.home-page .home-project-image .project-fallback { width:100%; height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center; gap:10px; color:#a5b4fc; text-align:center; }
.home-page .project-fallback i { font-size:35px; }
.home-page .project-fallback span { font-size:12px; font-weight:700; }
.home-page .home-project-content { padding:18px; }
.home-page .home-project-category { display:inline-block; padding:5px 9px; border-radius:6px; color:#c7d2fe; background:rgba(99,102,241,.13); font-size:10px; font-weight:800; letter-spacing:.5px; margin-bottom:10px; }
.home-page .home-project-content h3 { font-size:17px; font-weight:800; line-height:1.4; margin-bottom:9px; }
.home-page .home-project-content p { color:var(--home-muted); font-size:12px; line-height:1.75; min-height:64px; margin-bottom:15px; }
.home-page .home-project-link { display:inline-flex; align-items:center; gap:8px; color:#c7d2fe; font-size:12px; font-weight:800; text-decoration:none; }
.home-page .home-project-link:hover { color:#fff; }
.home-page .home-projects-note { margin-top:25px; color:var(--home-muted); font-size:12px; }

/* CONTACT CTA */
.home-page .home-contact-box { padding:55px 25px; text-align:center; border:1px solid rgba(129,140,248,.3); border-radius:24px; background:radial-gradient(ellipse at 50% 0%,rgba(99,102,241,.2),transparent 70%),rgba(255,255,255,.035); }
.home-page .home-contact-box p { max-width:670px; margin:0 auto; color:var(--home-muted); font-size:15px; line-height:1.9; }
.home-page .home-contact-buttons { display:flex; justify-content:center; flex-wrap:wrap; gap:12px; margin-top:25px; }

/* RESPONSIVE */
@media (max-width:991px) {
    .home-page .home-hero { padding:75px 0 65px; }
    .home-page .home-skills-grid { grid-template-columns:repeat(3,minmax(0,1fr)); }
    .home-page .home-section { padding:70px 0; }
    .home-page .hero-profile-wrap { width:450px; max-width:100%; }
    .home-page .hero-profile-placeholder { min-height:600px; }
}
@media (max-width:767px) {
    .home-page .home-hero { padding:55px 0; }
    .home-page .hero-title { font-size:clamp(35px,9vw,48px); }
    .home-page .hero-profile-wrap { width:100%; max-width:475px; margin:12px auto 0; }
    .home-page .hero-profile-frame { padding:8px; border-radius:24px; }
    .home-page .hero-profile-img { height:auto; object-fit:contain; }
    .home-page .hero-profile-placeholder { min-height:400px; }
    .home-page .home-section { padding:58px 0; }
    .home-page .home-about-card { padding:23px; }
    .home-page .home-skills-grid { grid-template-columns:repeat(2,minmax(0,1fr)); gap:12px; }
    .home-page .home-project-image { height:250px; }
    .home-page .home-project-content p { min-height:0; }
}
@media (max-width:380px) {
    .home-page .hero-profile-wrap { width:100%; }
    .home-page .home-feature-grid { grid-template-columns:1fr; }
    .home-page .hero-points { gap:12px; }
    .home-page .home-btn { padding:11px 15px; font-size:13px; }
}
@media (prefers-reduced-motion:reduce) {
    .home-page *, .home-page *::before, .home-page *::after { scroll-behavior:auto!important; transition-duration:.01ms!important; animation-duration:.01ms!important; }
}
</style>

<main class="home-page">
    <!-- HERO SECTION -->
    <section class="home-hero" id="home">
        <div class="home-container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <div class="hero-badge"><i class="fas fa-code"></i> WELCOME TO MY PORTFOLIO</div>
                    <h1 class="hero-title">Hi, I'm <span>Muhammad Hanzla</span></h1>
                    <h2 class="hero-role">Full-Stack Web Developer</h2>
                    <p class="hero-description">I build modern, responsive and professional websites that help businesses establish a strong online presence. I combine clean code, creative design and practical functionality to turn ideas into useful digital experiences.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="projects.php" class="home-btn home-btn-primary"><i class="fas fa-briefcase"></i> Explore My Projects</a>
                        <a href="contact.php" class="home-btn home-btn-outline"><i class="fas fa-paper-plane"></i> Let's Talk</a>
                    </div>
                    <div class="hero-points">
                        <span><i class="fas fa-check-circle"></i> Responsive Websites</span>
                        <span><i class="fas fa-check-circle"></i> Modern UI Design</span>
                        <span><i class="fas fa-check-circle"></i> PHP &amp; MySQL</span>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="hero-profile-wrap">
                        <div class="hero-profile-frame">
                            <img src="images/hanzla.jpg" alt="Muhammad Hanzla, Web Developer" class="hero-profile-img"
                                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="hero-profile-placeholder" style="display:none;">
                                <i class="fas fa-user-tie"></i>
                                <span>Add your photo: images/hanzla.jpg</span>
                            </div>
                        </div>
                        <div class="hero-profile-caption">
                            <h3>Muhammad Hanzla</h3>
                            <p>Creative Developer | Problem Solver</p>
                            <div class="hero-socials">
                                <a href="projects.php" aria-label="Projects"><i class="fas fa-laptop-code"></i></a>
                                <a href="contact.php" aria-label="Contact"><i class="fas fa-envelope"></i></a>
                                <a href="https://wa.me/923081681059" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT PREVIEW -->
    <section class="home-section" id="about">
        <div class="home-container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <div class="home-about-card home-about">
                        <span class="section-label">GET TO KNOW ME</span>
                        <h2>About <span>Me</span></h2>
                        <p class="home-muted">I'm Muhammad Hanzla, a web developer passionate about building attractive, user-friendly and functional websites for businesses and individuals.</p>
                        <p class="home-muted">My work includes responsive front-end interfaces, PHP-based website functionality and MySQL database integration. I focus on creating websites that look professional on different screen sizes.</p>
                        <a href="about.php" class="home-btn home-btn-primary mt-2">More About Me <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="home-feature-grid">
                        <div class="home-feature"><i class="fas fa-palette"></i><h3>Creative Design</h3><p>Clean and attractive website interfaces.</p></div>
                        <div class="home-feature"><i class="fas fa-code"></i><h3>Development</h3><p>Structured code and functional features.</p></div>
                        <div class="home-feature"><i class="fas fa-database"></i><h3>Database</h3><p>PHP and MySQL database integration.</p></div>
                        <div class="home-feature"><i class="fas fa-mobile-alt"></i><h3>Responsive</h3><p>Layouts for phones, tablets and desktops.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SKILLS -->
    <section class="home-section" id="skills">
        <div class="home-container">
            <div class="section-heading">
                <span class="section-label">MY EXPERTISE</span>
                <h2>Technical <span>Skills</span></h2>
                <p>The technologies I use to create responsive websites and database-driven web applications.</p>
            </div>
            <div class="home-skills-grid">
                <div class="home-skill"><i class="fab fa-html5"></i><h3>HTML5</h3><p>Website Structure</p></div>
                <div class="home-skill"><i class="fab fa-css3-alt"></i><h3>CSS3</h3><p>Styling &amp; Animation</p></div>
                <div class="home-skill"><i class="fab fa-bootstrap"></i><h3>Bootstrap 5</h3><p>Responsive Layouts</p></div>
                <div class="home-skill"><i class="fab fa-js"></i><h3>JavaScript</h3><p>Interactive Features</p></div>
                <div class="home-skill"><i class="fas fa-code"></i><h3>jQuery</h3><p>Dynamic Interactions</p></div>
                <div class="home-skill"><i class="fab fa-php"></i><h3>PHP</h3><p>Back-End Development</p></div>
                <div class="home-skill"><i class="fas fa-database"></i><h3>MySQL</h3><p>Database Management</p></div>
                <div class="home-skill"><i class="fab fa-github"></i><h3>GitHub</h3><p>Project Repositories</p></div>
            </div>
            <div class="text-center mt-4"><a href="skills.php" class="home-btn home-btn-outline">View All Skills <i class="fas fa-arrow-right"></i></a></div>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="home-section" id="services">
        <div class="home-container">
            <div class="section-heading">
                <span class="section-label">WHAT I OFFER</span>
                <h2>My <span>Services</span></h2>
                <p>Practical web development solutions for businesses, shops and individuals.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4"><div class="home-service"><div class="home-service-icon"><i class="fas fa-laptop-code"></i></div><h3>Website Development</h3><p>Professional business websites designed to present your services, products and brand information clearly.</p></div></div>
                <div class="col-md-6 col-lg-4"><div class="home-service"><div class="home-service-icon"><i class="fas fa-mobile-alt"></i></div><h3>Responsive Web Design</h3><p>User-friendly website layouts that adapt to mobile phones, tablets and desktop screens.</p></div></div>
                <div class="col-md-6 col-lg-4"><div class="home-service"><div class="home-service-icon"><i class="fas fa-database"></i></div><h3>PHP &amp; MySQL</h3><p>Database-driven websites, contact forms, product management and dynamic website features.</p></div></div>
            </div>
            <div class="text-center mt-4"><a href="services.php" class="home-btn home-btn-primary">Explore All Services <i class="fas fa-arrow-right"></i></a></div>
        </div>
    </section>

    <!-- SIX FEATURED PROJECTS -->
    <section class="home-section" id="projects">
        <div class="home-container">
            <div class="section-heading">
                <span class="section-label">SELECTED WORK</span>
                <h2>Featured <span>Projects</span></h2>
                <p>Explore six websites from my portfolio. Open a live website to see the project in action.</p>
            </div>
            <div class="row g-4">
                <?php foreach ($projects as $project): ?>
                    <div class="col-md-6 col-lg-4">
                        <article class="home-project-card">
                            <div class="home-project-image">
                                <img src="<?= htmlspecialchars($project['image'], ENT_QUOTES, 'UTF-8'); ?>"
                                     alt="<?= htmlspecialchars($project['name'], ENT_QUOTES, 'UTF-8'); ?> website preview"
                                     loading="lazy"
                                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="project-fallback" style="display:none;">
                                    <i class="fas fa-globe"></i>
                                    <span><?= htmlspecialchars($project['name'], ENT_QUOTES, 'UTF-8'); ?></span>
                                </div>
                            </div>
                            <div class="home-project-content">
                                <span class="home-project-category"><?= htmlspecialchars($project['category'], ENT_QUOTES, 'UTF-8'); ?></span>
                                <h3><?= htmlspecialchars($project['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                <p><?= htmlspecialchars($project['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                                <a href="<?= htmlspecialchars($project['url'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener noreferrer" class="home-project-link">Live Preview <i class="fas fa-arrow-up-right-from-square"></i></a>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
            <p class="home-projects-note text-center">Project previews depend on the availability of the original websites and image sources.</p>
            <div class="text-center mt-4"><a href="projects.php" class="home-btn home-btn-primary">View All Projects <i class="fas fa-arrow-right"></i></a></div>
        </div>
    </section>

    <!-- CONTACT CTA -->
    <section class="home-section" id="contact">
        <div class="home-container">
            <div class="home-contact-box home-contact">
                <span class="section-label">HAVE A PROJECT IN MIND?</span>
                <h2>Let's Build Something <span>Great</span></h2>
                <p>Looking for a professional website for your business or a new project? Get in touch to discuss your requirements and explore the right solution.</p>
                <div class="home-contact-buttons">
                    <a href="contact.php" class="home-btn home-btn-primary"><i class="fas fa-envelope"></i> Contact Me</a>
                    <a href="https://wa.me/923081681059" target="_blank" rel="noopener noreferrer" class="home-btn home-btn-outline"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>
