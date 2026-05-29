<?php
/**
 * About Page
 */
$page_title = 'About';
require_once 'config/config.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<section class="py-5">
    <div class="container">
        <!-- Page Title -->
        <div class="text-center mb-5" data-aos="fade-up">
            <h1 class="display-4 mb-3">About <span class="text-primary">Me</span></h1>
            <p class="lead text-muted">Get to know more about my journey and expertise</p>
        </div>

        <div class="row align-items-center g-5">
            <!-- Left Side -->
            <div class="col-lg-5" data-aos="fade-right">
                <img src="https://via.placeholder.com/400x500?text=Your+Photo" alt="Your Photo" class="img-fluid rounded-lg shadow-lg">
            </div>

            <!-- Right Side -->
            <div class="col-lg-7" data-aos="fade-left">
                <h2 class="mb-4">Professional <span class="text-primary">Background</span></h2>
                <p class="text-muted mb-4">
                    I'm a passionate Full Stack Developer with over 5 years of experience in building web applications. My journey started with a curiosity about how websites work, which evolved into a career creating beautiful, functional digital solutions.
                </p>
                <p class="text-muted mb-4">
                    I specialize in both frontend and backend development, with a focus on creating responsive, user-friendly applications that solve real-world problems. My expertise spans HTML, CSS, JavaScript, PHP, MySQL, and modern frameworks.
                </p>
                <p class="text-muted mb-5">
                    When I'm not coding, I enjoy contributing to open-source projects, writing technical blogs, and mentoring aspiring developers. I'm always eager to learn new technologies and stay updated with industry trends.
                </p>

                <div class="row mb-5">
                    <div class="col-sm-6 mb-4">
                        <h5 class="text-primary mb-2"><i class="fas fa-graduation-cap me-2"></i>Education</h5>
                        <p class="text-muted">Bachelor in Computer Science</p>
                        <small class="text-muted">University Name, Year</small>
                    </div>
                    <div class="col-sm-6 mb-4">
                        <h5 class="text-primary mb-2"><i class="fas fa-briefcase me-2"></i>Experience</h5>
                        <p class="text-muted">5+ Years</p>
                        <small class="text-muted">Web Development & Design</small>
                    </div>
                </div>

                <a href="booking.php" class="btn btn-primary btn-lg">
                    <i class="fas fa-calendar me-2"></i>Book a Consultation
                </a>
            </div>
        </div>

        <!-- Timeline -->
        <div class="row mt-5 pt-5">
            <div class="col-12">
                <h2 class="text-center mb-5">My <span class="text-primary">Journey</span></h2>
            </div>
            <div class="col-lg-10 mx-auto">
                <div class="timeline">
                    <div class="timeline-item" data-aos="fade-up">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h5 class="text-primary">2019 - Started Freelancing</h5>
                            <p class="text-muted">Began my freelance career creating websites for small businesses and startups.</p>
                        </div>
                    </div>
                    <div class="timeline-item" data-aos="fade-up">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h5 class="text-primary">2020 - First Major Project</h5>
                            <p class="text-muted">Completed a large-scale e-commerce platform for a growing business.</p>
                        </div>
                    </div>
                    <div class="timeline-item" data-aos="fade-up">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h5 class="text-primary">2021 - Expanded Services</h5>
                            <p class="text-muted">Added UI/UX design and backend development services to my portfolio.</p>
                        </div>
                    </div>
                    <div class="timeline-item" data-aos="fade-up">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h5 class="text-primary">2024 - Current</h5>
                            <p class="text-muted">Focusing on full-stack development and helping businesses build scalable solutions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
