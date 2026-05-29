<?php
/**
 * Home Page
 */
$page_title = 'Home';
require_once 'config/config.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<!-- Hero Section -->
<section class="hero min-vh-100 d-flex align-items-center justify-content-center position-relative overflow-hidden">
    <div class="hero-background"></div>
    <div class="container position-relative z-3">
        <div class="row align-items-center">
            <!-- Left Content -->
            <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-up">
                <div class="hero-content">
                    <h1 class="display-4 fw-bold mb-3">
                        Hi, I'm <span class="text-primary">Your Name</span>
                    </h1>
                    <div class="typing-effect mb-4" style="font-size: 1.5rem; color: #8b5cf6;">
                        <span class="typing-text">Full Stack Developer</span>
                        <span class="cursor">|</span>
                    </div>
                    <p class="lead text-muted mb-4">
                        I create beautiful, responsive websites and web applications using modern technologies. Let's build something amazing together!
                    </p>
                    <div class="hero-buttons">
                        <a href="#projects" class="btn btn-primary btn-lg me-3 mb-2">
                            <i class="fas fa-briefcase me-2"></i>View My Work
                        </a>
                        <a href="booking.php" class="btn btn-outline-primary btn-lg mb-2">
                            <i class="fas fa-calendar me-2"></i>Book Appointment
                        </a>
                    </div>
                    <!-- Stats -->
                    <div class="hero-stats mt-5">
                        <div class="stat-item d-inline-block me-5">
                            <h3 class="text-primary counter" data-target="50">0</h3>
                            <p class="text-muted">Projects Completed</p>
                        </div>
                        <div class="stat-item d-inline-block me-5">
                            <h3 class="text-primary counter" data-target="30">0</h3>
                            <p class="text-muted">Happy Clients</p>
                        </div>
                        <div class="stat-item d-inline-block">
                            <h3 class="text-primary counter" data-target="5">0</h3>
                            <p class="text-muted">Years Experience</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Content (Hero Image) -->
            <div class="col-lg-6" data-aos="fade-left">
                <div class="hero-image text-center">
                    <div class="image-wrapper position-relative">
                        <div class="floating-card card bg-gradient border-0 shadow-lg" style="animation: float 3s ease-in-out infinite;">
                            <div class="card-body p-4 text-center">
                                <i class="fas fa-code fa-3x text-primary mb-3"></i>
                                <h5>Web Development</h5>
                                <p class="text-muted small">Modern & Responsive</p>
                            </div>
                        </div>
                        <img src="https://via.placeholder.com/400x400?text=Your+Photo" alt="Your Photo" class="img-fluid rounded-lg shadow-lg" style="max-height: 400px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="py-5 bg-light" id="services">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">
            <span class="text-primary">My Services</span>
        </h2>
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card card border-0 shadow-sm h-100">
                    <div class="card-body text-center py-5">
                        <i class="fas fa-globe text-primary fa-3x mb-3"></i>
                        <h5 class="card-title">Web Development</h5>
                        <p class="card-text text-muted">Custom website development tailored to your specific needs.</p>
                        <a href="services.php" class="btn btn-primary btn-sm">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card card border-0 shadow-sm h-100">
                    <div class="card-body text-center py-5">
                        <i class="fas fa-paint-brush text-primary fa-3x mb-3"></i>
                        <h5 class="card-title">UI/UX Design</h5>
                        <p class="card-text text-muted">Beautiful and user-friendly interface designs.</p>
                        <a href="services.php" class="btn btn-primary btn-sm">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card card border-0 shadow-sm h-100">
                    <div class="card-body text-center py-5">
                        <i class="fas fa-server text-primary fa-3x mb-3"></i>
                        <h5 class="card-title">Backend Development</h5>
                        <p class="card-text text-muted">Robust and scalable server-side solutions.</p>
                        <a href="services.php" class="btn btn-primary btn-sm">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-dark text-light" data-aos="fade-up">
    <div class="container text-center">
        <h2 class="mb-4">Ready to start your project?</h2>
        <p class="lead mb-4 text-muted">Let's discuss how I can help bring your ideas to life.</p>
        <div>
            <a href="booking.php" class="btn btn-primary btn-lg me-2 mb-2">
                <i class="fas fa-calendar me-2"></i>Book Now
            </a>
            <a href="contact.php" class="btn btn-outline-primary btn-lg">
                <i class="fas fa-envelope me-2"></i>Contact Me
            </a>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
