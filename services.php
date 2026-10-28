
<?php
$pageTitle = "My Services";
include 'header.php';
?>

<!-- SERVICES HERO -->
<section class="py-5">
    <div class="container py-4">

        <div class="text-center mb-5">
            <span class="badge bg-info text-dark px-3 py-2 mb-3">
                WHAT I OFFER
            </span>

            <h1 class="display-4 fw-bold text-white">
                My <span class="text-info">Services</span>
            </h1>

            <p class="text-secondary mx-auto mt-3"
               style="max-width: 700px;">
                I build modern, responsive and functional websites
                designed to help businesses establish their online presence.
            </p>
        </div>

        <!-- SERVICES CARDS -->
        <div class="row g-4">

            <div class="col-md-6 col-lg-4">
                <div class="service-card h-100 p-4">
                    <div class="mb-4">
                        <i class="fas fa-laptop-code fa-3x text-info"></i>
                    </div>

                    <h4 class="text-white mb-3">Website Development</h4>

                    <p class="text-secondary">
                        Professional websites using HTML, CSS, Bootstrap,
                        JavaScript and PHP to meet your business needs.
                    </p>

                    <ul class="text-secondary ps-3">
                        <li>Business websites</li>
                        <li>Portfolio websites</li>
                        <li>Multi-page websites</li>
                    </ul>

                    <a href="contact.php" class="btn btn-outline-info mt-3">
                        Discuss Your Project
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="service-card h-100 p-4">
                    <div class="mb-4">
                        <i class="fas fa-mobile-screen-button fa-3x text-info"></i>
                    </div>

                    <h4 class="text-white mb-3">Responsive Web Design</h4>

                    <p class="text-secondary">
                        Clean and adaptable website layouts that work
                        across mobile phones, tablets and computers.
                    </p>

                    <ul class="text-secondary ps-3">
                        <li>Mobile-friendly layouts</li>
                        <li>Modern user interfaces</li>
                        <li>Consistent design</li>
                    </ul>

                    <a href="contact.php" class="btn btn-outline-info mt-3">
                        Discuss Your Project
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="service-card h-100 p-4">
                    <div class="mb-4">
                        <i class="fas fa-database fa-3x text-info"></i>
                    </div>

                    <h4 class="text-white mb-3">PHP & MySQL</h4>

                    <p class="text-secondary">
                        Dynamic website features connected to databases
                        for storing and managing information.
                    </p>

                    <ul class="text-secondary ps-3">
                        <li>Database integration</li>
                        <li>Contact forms</li>
                        <li>Dynamic PHP pages</li>
                    </ul>

                    <a href="contact.php" class="btn btn-outline-info mt-3">
                        Discuss Your Project
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="service-card h-100 p-4">
                    <div class="mb-4">
                        <i class="fas fa-store fa-3x text-info"></i>
                    </div>

                    <h4 class="text-white mb-3">Business Websites</h4>

                    <p class="text-secondary">
                        Websites that help shops and small businesses
                        present their products and services online.
                    </p>

                    <ul class="text-secondary ps-3">
                        <li>Product listings</li>
                        <li>Business information</li>
                        <li>WhatsApp contact links</li>
                    </ul>

                    <a href="contact.php" class="btn btn-outline-info mt-3">
                        Discuss Your Project
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="service-card h-100 p-4">
                    <div class="mb-4">
                        <i class="fas fa-shopping-cart fa-3x text-info"></i>
                    </div>

                    <h4 class="text-white mb-3">Shopping Features</h4>

                    <p class="text-secondary">
                        E-commerce functionality to help customers browse
                        products and manage their shopping carts.
                    </p>

                    <ul class="text-secondary ps-3">
                        <li>Product pages</li>
                        <li>Add-to-cart features</li>
                        <li>Order form integration</li>
                    </ul>

                    <a href="contact.php" class="btn btn-outline-info mt-3">
                        Discuss Your Project
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="service-card h-100 p-4">
                    <div class="mb-4">
                        <i class="fas fa-tools fa-3x text-info"></i>
                    </div>

                    <h4 class="text-white mb-3">Website Maintenance</h4>

                    <p class="text-secondary">
                        Help with website updates, layout improvements,
                        debugging and common PHP errors.
                    </p>

                    <ul class="text-secondary ps-3">
                        <li>Bug fixing</li>
                        <li>Content updates</li>
                        <li>Design improvements</li>
                    </ul>

                    <a href="contact.php" class="btn btn-outline-info mt-3">
                        Discuss Your Project
                    </a>
                </div>
            </div>

        </div>

        <!-- CTA SECTION -->
        <div class="text-center mt-5 p-4 rounded-4"
             style="background: var(--card); border: 1px solid var(--border);">

            <h2 class="text-white fw-bold">
                Have a Project in Mind?
            </h2>

            <p class="text-secondary mt-3">
                Let's discuss your website idea and turn it into reality.
            </p>

            <a href="contact.php" class="btn btn-primary px-4 py-3 mt-2">
                <i class="fas fa-paper-plane me-2"></i>
                Get in Touch
            </a>

        </div>

    </div>
</section>

<?php include 'footer.php'; ?>
