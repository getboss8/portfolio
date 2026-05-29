<?php
/**
 * Contact Page
 */
$page_title = 'Contact';
require_once 'config/config.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<section class="py-5">
    <div class="container">
        <!-- Page Title -->
        <div class="text-center mb-5" data-aos="fade-up">
            <h1 class="display-4 mb-3">Get in <span class="text-primary">Touch</span></h1>
            <p class="lead text-muted">I'd love to hear from you. Let's discuss your project.</p>
        </div>

        <div class="row g-5">
            <!-- Contact Form -->
            <div class="col-lg-6" data-aos="fade-right">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-5">
                        <h4 class="mb-4">Send me a Message</h4>
                        <form id="contactForm" method="POST" action="api/send-message.php">
                            <!-- Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Your Name *</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="contactEmail" class="form-label">Email Address *</label>
                                <input type="email" class="form-control" id="contactEmail" name="email" placeholder="Enter your email" required>
                            </div>

                            <!-- Phone -->
                            <div class="mb-3">
                                <label for="contactPhone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="contactPhone" name="phone" placeholder="Enter your phone">
                            </div>

                            <!-- Subject -->
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject *</label>
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="What is this about?" required>
                            </div>

                            <!-- Message -->
                            <div class="mb-4">
                                <label for="contactMessage" class="form-label">Message *</label>
                                <textarea class="form-control" id="contactMessage" name="message" rows="5" placeholder="Write your message here..." required></textarea>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary btn-lg w-100">
                                <i class="fas fa-paper-plane me-2"></i>Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="col-lg-6" data-aos="fade-left">
                <!-- Email -->
                <div class="mb-4">
                    <div class="d-flex mb-3">
                        <div class="icon me-3" style="width: 50px;">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fas fa-envelope"></i>
                            </div>
                        </div>
                        <div>
                            <h5>Email</h5>
                            <p class="text-muted">contact@portfolio.com</p>
                        </div>
                    </div>
                </div>

                <!-- Phone -->
                <div class="mb-4">
                    <div class="d-flex mb-3">
                        <div class="icon me-3" style="width: 50px;">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fas fa-phone"></i>
                            </div>
                        </div>
                        <div>
                            <h5>Phone</h5>
                            <p class="text-muted">+1-800-123-4567</p>
                        </div>
                    </div>
                </div>

                <!-- Address -->
                <div class="mb-4">
                    <div class="d-flex mb-3">
                        <div class="icon me-3" style="width: 50px;">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                        </div>
                        <div>
                            <h5>Address</h5>
                            <p class="text-muted">123 Developer Street<br>Tech City, TC 12345</p>
                        </div>
                    </div>
                </div>

                <!-- WhatsApp -->
                <div class="mb-4">
                    <div class="d-flex mb-3">
                        <div class="icon me-3" style="width: 50px;">
                            <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fab fa-whatsapp"></i>
                            </div>
                        </div>
                        <div>
                            <h5>WhatsApp</h5>
                            <p class="text-muted"><a href="https://wa.me/18001234567" class="text-decoration-none">Chat on WhatsApp</a></p>
                        </div>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="mt-5">
                    <h5 class="mb-3">Follow Me</h5>
                    <div class="d-flex gap-3">
                        <a href="https://facebook.com" class="btn btn-outline-primary btn-sm rounded-circle" style="width: 40px; height: 40px; padding: 0; display: flex; align-items: center; justify-content: center;">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com" class="btn btn-outline-primary btn-sm rounded-circle" style="width: 40px; height: 40px; padding: 0; display: flex; align-items: center; justify-content: center;">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://linkedin.com" class="btn btn-outline-primary btn-sm rounded-circle" style="width: 40px; height: 40px; padding: 0; display: flex; align-items: center; justify-content: center;">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://github.com" class="btn btn-outline-primary btn-sm rounded-circle" style="width: 40px; height: 40px; padding: 0; display: flex; align-items: center; justify-content: center;">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://instagram.com" class="btn btn-outline-primary btn-sm rounded-circle" style="width: 40px; height: 40px; padding: 0; display: flex; align-items: center; justify-content: center;">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div class="row mt-5" data-aos="fade-up">
            <div class="col-12">
                <h3 class="mb-4">Find Me On Map</h3>
                <div style="height: 400px; border-radius: 10px; overflow: hidden; box-shadow: 0 10px 30px rgba(99, 102, 241, 0.2);">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.1234567890123!2d-74.0060!3d40.7128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQyJzQ2LjEiTiA3NMKwMDAnMjEuNiJX!5e0!3m2!1sen!2sus!4v1234567890" width="100%" height="100%" style="border: none;" allowFullScreen="" loading="lazy" referrerPolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
