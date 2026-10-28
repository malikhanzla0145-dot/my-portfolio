<?php

session_start();

$success = $_SESSION['success'] ?? '';
$error = $_SESSION['error'] ?? '';

unset($_SESSION['success'], $_SESSION['error']);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Me | Hanzla</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    >

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<?php include "includes/navbar.php"; ?>


<section class="page-header">

    <div class="container">

        <span class="section-label">Get In Touch</span>

        <h1>Contact Me</h1>

        <p>
            Have a project or question? Send me a message.
        </p>

    </div>

</section>


<section class="section-padding">

    <div class="container">

        <div class="row g-5">


            <!-- Contact Information -->

            <div class="col-lg-5">

                <span class="section-label">
                    Let's Talk
                </span>

                <h2 class="content-title">
                    Let's Build Something Great
                </h2>

                <p class="contact-intro">
                    If you have a project idea, website requirement or
                    question, feel free to contact me through the form.
                </p>


                <div class="contact-info-list">

                    <div class="contact-info-item">

                        <div class="contact-info-icon">
                            <i class="fas fa-user"></i>
                        </div>

                        <div>
                            <small>Name</small>
                            <strong>Hanzla</strong>
                        </div>

                    </div>


                    <div class="contact-info-item">

                        <div class="contact-info-icon">
                            <i class="fas fa-code"></i>
                        </div>

                        <div>
                            <small>Profession</small>
                            <strong>Full-Stack Web Developer</strong>
                        </div>

                    </div>


                    <div class="contact-info-item">

                        <div class="contact-info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>

                        <div>
                            <small>Email</small>
                            <strong>hanzla0145@gmail.com.com</strong>
                        </div>

                    </div>


                    <div class="contact-info-item">

                        <div class="contact-info-icon">
                            <i class="fas fa-phone"></i>
                        </div>

                        <div>
                            <small>Phone</small>
                            <strong>+92-308-1681059</strong>
                        </div>

                    </div>


                    <div class="contact-info-item">

                        <div class="contact-info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>

                        <div>
                            <small>Location</small>
                            <strong>Pakistan</strong>
                        </div>

                    </div>

                </div>


                <div class="contact-social">

                    <a href="#" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="#" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>

                </div>

            </div>


            <!-- Contact Form -->

            <div class="col-lg-7">

                <div class="contact-form-card">

                    <h3>Send Me a Message</h3>

                    <?php if ($success): ?>

                        <div class="alert alert-success">
                            <i class="fas fa-check-circle"></i>
                            <?= htmlspecialchars($success); ?>
                        </div>

                    <?php endif; ?>


                    <?php if ($error): ?>

                        <div class="alert alert-danger">
                            <i class="fas fa-exclamation-circle"></i>
                            <?= htmlspecialchars($error); ?>
                        </div>

                    <?php endif; ?>


                    <form
                        action="contact_process.php"
                        method="POST"
                        id="contactForm"
                    >

                        <div class="row g-3">

                            <div class="col-md-6">

                                <label for="name" class="form-label">
                                    Full Name
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    name="name"
                                    placeholder="Enter your name"
                                    maxlength="100"
                                    required
                                >

                            </div>


                            <div class="col-md-6">

                                <label for="email" class="form-label">
                                    Email Address
                                </label>

                                <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    placeholder="Enter your email"
                                    maxlength="150"
                                    required
                                >

                            </div>


                            <div class="col-md-6">

                                <label for="phone" class="form-label">
                                    Phone Number
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="phone"
                                    name="phone"
                                    placeholder="Enter your phone number"
                                    maxlength="30"
                                >

                            </div>


                            <div class="col-md-6">

                                <label for="subject" class="form-label">
                                    Subject
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="subject"
                                    name="subject"
                                    placeholder="Enter subject"
                                    maxlength="200"
                                    required
                                >

                            </div>


                            <div class="col-12">

                                <label for="message" class="form-label">
                                    Message
                                </label>

                                <textarea
                                    class="form-control"
                                    id="message"
                                    name="message"
                                    rows="6"
                                    placeholder="Write your message..."
                                    maxlength="2000"
                                    required
                                ></textarea>

                            </div>


                            <div class="col-12">

                                <button
                                    type="submit"
                                    class="btn btn-primary-custom submit-btn"
                                >
                                    Send Message
                                    <i class="fas fa-paper-plane"></i>
                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>


<?php include "includes/footer.php"; ?>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>