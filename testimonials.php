<?php
/**
 * Testimonials / Reviews Page
 */
$page_title = 'Testimonials';
require_once 'config/config.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<section class="py-5">
    <div class="container">
        <!-- Page Title -->
        <div class="text-center mb-5" data-aos="fade-up">
            <h1 class="display-4 mb-3">Client <span class="text-primary">Testimonials</span></h1>
            <p class="lead text-muted">What my clients have to say about working with me</p>
        </div>

        <!-- Testimonials Carousel -->
        <div class="row" data-aos="fade-up">
            <div class="col-lg-10 mx-auto">
                <div id="testimonialsCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Testimonial 1 -->
                        <div class="carousel-item active">
                            <div class="testimonial-card card border-0 shadow-sm p-5 text-center">
                                <div class="mb-4">
                                    <img src="https://via.placeholder.com/80?text=John" alt="John Smith" class="rounded-circle" style="width: 80px; height: 80px;">
                                </div>
                                <h5 class="mb-2">John Smith</h5>
                                <p class="text-muted mb-3">CEO, Tech Startup</p>
                                <div class="mb-3">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                                <p class="lead text-muted">
                                    "Excellent work! The developer delivered exactly what we needed on time and on budget. The attention to detail and communication throughout the project was exceptional."
                                </p>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="carousel-item">
                            <div class="testimonial-card card border-0 shadow-sm p-5 text-center">
                                <div class="mb-4">
                                    <img src="https://via.placeholder.com/80?text=Sarah" alt="Sarah Johnson" class="rounded-circle" style="width: 80px; height: 80px;">
                                </div>
                                <h5 class="mb-2">Sarah Johnson</h5>
                                <p class="text-muted mb-3">Marketing Manager</p>
                                <div class="mb-3">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                                <p class="lead text-muted">
                                    "Professional, responsive, and delivers high-quality results. Highly recommended! The new website has significantly improved our online presence."
                                </p>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="carousel-item">
                            <div class="testimonial-card card border-0 shadow-sm p-5 text-center">
                                <div class="mb-4">
                                    <img src="https://via.placeholder.com/80?text=Mike" alt="Mike Wilson" class="rounded-circle" style="width: 80px; height: 80px;">
                                </div>
                                <h5 class="mb-2">Mike Wilson</h5>
                                <p class="text-muted mb-3">Business Owner</p>
                                <div class="mb-3">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                                <p class="lead text-muted">
                                    "Great communication and exceptional coding skills. Our website is now a massive asset to our business. Would definitely work with them again."
                                </p>
                            </div>
                        </div>

                        <!-- Testimonial 4 -->
                        <div class="carousel-item">
                            <div class="testimonial-card card border-0 shadow-sm p-5 text-center">
                                <div class="mb-4">
                                    <img src="https://via.placeholder.com/80?text=Emily" alt="Emily Davis" class="rounded-circle" style="width: 80px; height: 80px;">
                                </div>
                                <h5 class="mb-2">Emily Davis</h5>
                                <p class="text-muted mb-3">Project Manager</p>
                                <div class="mb-3">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                                <p class="lead text-muted">
                                    "Delivered a robust solution that exceeded our expectations. Very satisfied with the results and the overall experience. Definitely recommend!"
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Carousel Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="row mt-5 pt-5">
            <div class="col-md-3 text-center" data-aos="fade-up">
                <div class="mb-3">
                    <i class="fas fa-smile fa-3x text-primary"></i>
                </div>
                <h4 class="counter" data-target="30">0</h4>
                <p class="text-muted">Happy Clients</p>
            </div>
            <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="mb-3">
                    <i class="fas fa-star fa-3x text-primary"></i>
                </div>
                <h4>5/5</h4>
                <p class="text-muted">Average Rating</p>
            </div>
            <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="mb-3">
                    <i class="fas fa-check-circle fa-3x text-primary"></i>
                </div>
                <h4 class="counter" data-target="50">0</h4>
                <p class="text-muted">Projects Completed</p>
            </div>
            <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="mb-3">
                    <i class="fas fa-award fa-3x text-primary"></i>
                </div>
                <h4 class="counter" data-target="5">0</h4>
                <p class="text-muted">Years Experience</p>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
