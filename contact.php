
<?php
$pageTitle = "Contact Me";
include 'header.php';

$error = "";
$whatsappURL = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $message = trim($_POST["message"] ?? "");

    if ($name === "" || $email === "" || $message === "") {

        $error = "Please fill in all fields.";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $error = "Please enter a valid email address.";

    } else {

        $whatsappMessage =
            "Portfolio Contact Inquiry\n\n" .
            "Name: " . $name . "\n" .
            "Email: " . $email . "\n" .
            "Message: " . $message;

        $whatsappURL = "https://wa.me/923081681059?text=" .
                       rawurlencode($whatsappMessage);
    }
}
?>

<!-- CONTACT SECTION -->
<section class="py-5">
    <div class="container py-4">

        <!-- PAGE HEADING -->
        <div class="text-center mb-5">

            <span class="badge bg-info text-dark px-3 py-2 mb-3">
                GET IN TOUCH
            </span>

            <h1 class="display-4 fw-bold text-white">
                Contact <span class="text-info">Me</span>
            </h1>

            <p class="text-secondary mx-auto mt-3"
               style="max-width: 650px;">
                Have a website idea or project in mind?
                Send me a message and let's discuss it.
            </p>

        </div>

        <div class="row g-4">

            <!-- LEFT SIDE: CONTACT INFORMATION -->
            <div class="col-lg-5">

                <div class="service-card p-4 h-100">

                    <h3 class="text-white mb-4">
                        Let's Connect
                    </h3>

                    <p class="text-secondary mb-4">
                        I welcome enquiries about website development,
                        business websites and web projects.
                    </p>

                    <!-- WHATSAPP -->
                    <div class="d-flex align-items-start mb-4">

                        <div class="me-3 text-success">
                            <i class="fab fa-whatsapp fa-2x"></i>
                        </div>

                        <div>
                            <h5 class="text-white">
                                WhatsApp
                            </h5>

                            <p class="text-secondary mb-2">
                                Contact me directly on WhatsApp.
                            </p>

                            <a href="https://wa.me/923081681059"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="text-info text-decoration-none">
                                0308-1681059
                            </a>
                        </div>

                    </div>

                    <!-- WEB DEVELOPMENT -->
                    <div class="d-flex align-items-start mb-4">

                        <div class="me-3 text-info">
                            <i class="fas fa-code fa-2x"></i>
                        </div>

                        <div>
                            <h5 class="text-white">
                                Web Development
                            </h5>

                            <p class="text-secondary mb-0">
                                HTML, CSS, Bootstrap, JavaScript,
                                PHP and MySQL.
                            </p>
                        </div>

                    </div>

                    <!-- WHATSAPP BUTTON -->
                    <a href="https://wa.me/923081681059"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="btn btn-success mt-2">

                        <i class="fab fa-whatsapp me-2"></i>
                        Chat on WhatsApp

                    </a>

                </div>

            </div>

            <!-- RIGHT SIDE: CONTACT FORM -->
            <div class="col-lg-7">

                <div class="service-card p-4 p-md-5">

                    <h3 class="text-white mb-4">
                        Send a Message
                    </h3>

                    <!-- ERROR MESSAGE -->
                    <?php if ($error !== ""): ?>

                        <div class="alert alert-danger">
                            <?php echo htmlspecialchars($error); ?>
                        </div>

                    <?php endif; ?>

                    <!-- FORM -->
                    <form method="POST" action="contact.php">

                        <!-- NAME -->
                        <div class="mb-3">

                            <label for="name"
                                   class="form-label text-white">
                                Your Name
                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                class="form-control"
                                placeholder="Enter your name"
                                maxlength="100"
                                autocomplete="name"
                                required
                                value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>"
                            >

                        </div>

                        <!-- EMAIL -->
                        <div class="mb-3">

                            <label for="email"
                                   class="form-label text-white">
                                Email Address
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="form-control"
                                placeholder="Enter your email"
                                maxlength="150"
                                autocomplete="email"
                                required
                                value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>"
                            >

                        </div>

                        <!-- MESSAGE -->
                        <div class="mb-4">

                            <label for="message"
                                   class="form-label text-white">
                                Your Message
                            </label>

                            <textarea
                                id="message"
                                name="message"
                                class="form-control"
                                rows="5"
                                placeholder="Tell me about your project..."
                                maxlength="3000"
                                required
                            ><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>

                        </div>

                        <!-- SUBMIT BUTTON -->
                        <button type="submit"
                                class="btn btn-primary btn-lg w-100">

                            <i class="fab fa-whatsapp me-2"></i>
                            Continue to WhatsApp

                        </button>

                    </form>

                    <!-- WHATSAPP MESSAGE READY -->
                    <?php if ($whatsappURL !== ""): ?>

                        <div class="alert alert-success mt-4">

                            <h5 class="alert-heading">
                                Your Message Is Ready!
                            </h5>

                            <p>
                                Click the button below to open WhatsApp.
                                Review your message and press Send.
                            </p>

                            <a href="<?php echo htmlspecialchars($whatsappURL, ENT_QUOTES, 'UTF-8'); ?>"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="btn btn-success d-block mt-3">

                                <i class="fab fa-whatsapp me-2"></i>
                                Open WhatsApp Message

                            </a>

                        </div>

                    <?php endif; ?>

                </div>

            </div>

        </div>

    </div>
</section>

<?php include 'footer.php'; ?>