<?php
$pageTitle = "Projects | Muhammad Hanzla";
include 'header.php';

$projects = [
    [
        "name" => "Sanfi Technologies",
        "description" => "A professional website for software development, digital solutions and business services.",
        "icon" => "fas fa-laptop-code",
        "tech" => "Business Website",
        "image" => "https://s.wordpress.com/mshots/v1/https%3A%2F%2Fsanfitechnologies.com%2F?w=1200",
        "link" => "https://sanfitechnologies.com/"
    ],
    [
        "name" => "SANFI Diagnostics",
        "description" => "A healthcare website providing diagnostic information and healthcare services.",
        "icon" => "fas fa-heart-pulse",
        "tech" => "Healthcare Website",
        "image" => "https://digitaladverza.com/images/portfolio-web-sanfidiag.webp",
        "link" => "https://sanfidiagnostics.com/"
    ],
    [
        "name" => "Sharjah Auto Paint",
        "description" => "An automotive website featuring car painting services and customer contact options.",
        "icon" => "fas fa-car",
        "tech" => "Automotive Website",
        "image" => "https://s.wordpress.com/mshots/v1/https%3A%2F%2Fsharjahautopaint.com%2F?w=1200",
        "link" => "https://sharjahautopaint.com/"
    ],
    [
        "name" => "AGD Grocery Delivery",
        "description" => "An online grocery store featuring product categories, shopping cart and checkout options.",
        "icon" => "fas fa-cart-shopping",
        "tech" => "E-commerce Website",
        "image" => "https://digitaladverza.com/images/portfolio-web-alazka.webp",
        "link" => "https://food.alazkadg.com/"
    ],
    [
        "name" => "Jedan Distributor",
        "description" => "A business website featuring automotive and solar battery brands, product listings and quotation options.",
        "icon" => "fas fa-car-battery",
        "tech" => "Business Website",
        "image" => "https://digitaladverza.com/images/portfolio-web-jedan.webp",
        "link" => "https://jedan.pk/"
    ],
    [
        "name" => "Kangaroo Publications",
        "description" => "A children's publishing website featuring books, illustrations and video content.",
        "icon" => "fas fa-book-open",
        "tech" => "Publishing Website",
        "image" => "https://digitaladverza.com/images/portfolio-web-kangaroo.webp",
        "link" => "https://kangaroopublication.com/"
    ]
];
?>

<style>
/* MAIN SECTION */

.projects-page {
    background: #080d1a;
    color: #f4f7ff;
    min-height: 100vh;
    padding: 50px 0 60px;
    overflow: hidden;
}

.projects-page .projects-heading {
    text-align: center;
    margin-bottom: 30px;
}

.projects-page .eyebrow {
    color: #5ee7ff;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 3px;
    margin-bottom: 9px;
}

.projects-page .projects-heading h1 {
    color: #f4f7ff;
    font-size: clamp(29px, 4vw, 40px);
    font-weight: 800;
    margin-bottom: 10px;
}

.projects-page .projects-heading h1 span,
.projects-page .cta-box h2 span {
    color: #5ee7ff;
}

.projects-page .heading-description {
    color: #aab6cc;
    font-size: 14px;
    line-height: 1.7;
    margin-bottom: 0;
}

/* PROJECT GRID */

.projects-page .projects-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 18px;
    align-items: stretch;
}

/* PROJECT CARD */

.projects-page .project-card {
    min-width: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    background: #101522;
    border: 1px solid rgba(94, 231, 255, 0.18);
    border-radius: 12px;
    box-shadow: 0 8px 22px rgba(0, 0, 0, 0.18);
    transition: transform 0.3s ease, border-color 0.3s ease;
}

.projects-page .project-card:hover {
    transform: translateY(-4px);
    border-color: #5ee7ff;
}

/* IMAGE AREA */

.projects-page .project-art {
    position: relative;
    width: 100%;
    height: 175px;
    min-height: 175px;
    overflow: hidden;
    background: #0b1120;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
}

.projects-page .project-number {
    position: absolute;
    top: 9px;
    left: 10px;
    z-index: 5;
    color: #5ee7ff;
    font-size: 9px;
    font-weight: 700;
    letter-spacing: 1px;
    text-shadow: 0 2px 6px #000;
    pointer-events: none;
}

/* WEBSITE PREVIEW */

.projects-page .project-preview {
    display: block;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.projects-page .preview-browser {
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
    background: #ffffff;
}

/* BROWSER BAR */

.projects-page .preview-browser-bar {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 2;
    width: 100%;
    height: 22px;
    display: flex;
    align-items: center;
    gap: 4px;
    padding: 0 9px;
    background: #111827;
}

.projects-page .preview-browser-bar span {
    width: 6px;
    height: 6px;
    display: block;
    border-radius: 50%;
    background: #8290a5;
}

/* PROJECT IMAGE */

.projects-page .preview-browser img {
    display: block;
    width: 100%;
    height: 100%;
    max-width: 100%;
    object-fit: cover;
    object-position: top center;
    padding-top: 22px;
    box-sizing: border-box;
    background: #ffffff;
    transition: transform 0.35s ease;
}

.projects-page .project-card:hover .preview-browser img {
    transform: scale(1.025);
}

/* FALLBACK WHEN IMAGE FAILS */

.projects-page .preview-fallback {
    display: none;
    width: 100%;
    height: 100%;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 10px;
    color: #5ee7ff;
    background: #0b1120;
}

.projects-page .preview-fallback i {
    font-size: 35px;
}

.projects-page .preview-fallback span {
    color: #aab6cc;
    font-size: 12px;
    text-align: center;
}

/* PROJECT DETAILS */

.projects-page .project-info {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 17px 15px 19px;
}

.projects-page .project-tag {
    display: inline-block;
    color: #5ee7ff;
    background: rgba(94, 231, 255, 0.08);
    border: 1px solid rgba(94, 231, 255, 0.22);
    border-radius: 30px;
    padding: 5px 10px;
    margin-bottom: 10px;
    font-size: 10px;
    font-weight: 600;
}

.projects-page .project-info h3 {
    color: #f4f7ff;
    font-size: 18px;
    font-weight: 750;
    line-height: 1.4;
    margin-bottom: 9px;
    overflow-wrap: anywhere;
}

.projects-page .project-info p {
    color: #b2bdcf;
    font-size: 12px;
    line-height: 1.7;
    margin-bottom: 17px;
}

/* LIVE PREVIEW BUTTON */

.projects-page .project-view-link {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 7px;
    margin-top: auto;
    padding: 9px 16px;
    color: #5ee7ff;
    background: transparent;
    border: 1px solid #287f99;
    border-radius: 30px;
    font-size: 12px;
    font-weight: 700;
    text-decoration: none;
    transition: all 0.3s ease;
}

.projects-page .project-view-link:hover {
    color: #080d1a;
    background: #5ee7ff;
    border-color: #5ee7ff;
}

/* CONTACT BOX */

.projects-page .cta-box {
    margin-top: 38px;
    padding: 28px 20px;
    text-align: center;
    background: #101522;
    border: 1px solid rgba(94, 231, 255, 0.18);
    border-radius: 12px;
}

.projects-page .cta-box h2 {
    color: #f4f7ff;
    font-size: clamp(23px, 3vw, 30px);
    font-weight: 800;
    margin-bottom: 10px;
}

.projects-page .cta-box > p:not(.eyebrow) {
    color: #aab6cc;
    font-size: 13px;
    margin-bottom: 18px;
}

.projects-page .cta-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 10px 21px;
    color: #080d1a;
    background: #5ee7ff;
    border: 1px solid #5ee7ff;
    border-radius: 30px;
    font-size: 13px;
    font-weight: 700;
    text-decoration: none;
    transition: all 0.3s ease;
}

.projects-page .cta-button:hover {
    color: #5ee7ff;
    background: transparent;
}

/* TABLET */

@media (max-width: 991px) {
    .projects-page .projects-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 17px;
    }

    .projects-page .project-art {
        height: 170px;
        min-height: 170px;
    }
}

/* MOBILE */

@media (max-width: 575px) {
    .projects-page {
        padding: 35px 0 45px;
    }

    .projects-page .projects-grid {
        grid-template-columns: minmax(0, 1fr);
        gap: 18px;
    }

    .projects-page .project-art {
        height: 190px;
        min-height: 190px;
    }

    .projects-page .project-info {
        padding: 18px 16px 20px;
    }

    .projects-page .project-info h3 {
        font-size: 19px;
    }

    .projects-page .project-info p {
        font-size: 13px;
    }

    .projects-page .cta-box {
        margin-top: 28px;
        padding: 24px 15px;
    }
}
</style>

<!-- PROJECTS SECTION -->

<section class="projects-page">
    <div class="container">

        <div class="projects-heading">
            <p class="eyebrow">MY WORK</p>

            <h1>
                Selected <span>Projects</span>
            </h1>

            <p class="heading-description">
                Explore my web development projects and digital solutions.
            </p>
        </div>

        <div class="projects-grid">

            <?php foreach ($projects as $index => $project): ?>

                <article class="project-card">

                    <div class="project-art">

                        <span class="project-number">
                            PROJECT / <?= sprintf('%02d', $index + 1) ?>
                        </span>

                        <a
                            href="<?= htmlspecialchars($project['link']) ?>"
                            class="project-preview"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Visit <?= htmlspecialchars($project['name']) ?>"
                        >

                            <div class="preview-browser">

                                <div class="preview-browser-bar">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>

                                <img
                                    src="<?= htmlspecialchars($project['image']) ?>"
                                    alt="<?= htmlspecialchars($project['name']) ?> website preview"
                                    loading="<?= $index < 3 ? 'eager' : 'lazy' ?>"
                                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                                >

                                <div class="preview-fallback">
                                    <i class="<?= htmlspecialchars($project['icon']) ?>"></i>
                                    <span>Website preview unavailable</span>
                                </div>

                            </div>

                        </a>

                    </div>

                    <div class="project-info">

                        <span class="project-tag">
                            <?= htmlspecialchars($project['tech']) ?>
                        </span>

                        <h3>
                            <?= htmlspecialchars($project['name']) ?>
                        </h3>

                        <p>
                            <?= htmlspecialchars($project['description']) ?>
                        </p>

                        <a
                            href="<?= htmlspecialchars($project['link']) ?>"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="project-view-link"
                        >
                            Live Preview
                            <i class="fas fa-arrow-up-right-from-square"></i>
                        </a>

                    </div>

                </article>

            <?php endforeach; ?>

        </div>

        <div class="cta-box">

            <p class="eyebrow">HAVE AN IDEA?</p>

            <h2>
                Let's Create Your <span>Next Project.</span>
            </h2>

            <p>
                Contact me to discuss your website or business project.
            </p>

            <a href="contact.php" class="cta-button">
                Contact Me
                <i class="fas fa-arrow-right"></i>
            </a>

        </div>

    </div>
</section>

<?php include 'footer.php'; ?>
