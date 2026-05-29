<?php
/**
 * Services Page
 */
$page_title = 'Services';
require_once 'config/config.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<section class="py-5">
    <div class="container">
        <!-- Page Title -->
        <div class="text-center mb-5" data-aos="fade-up">
            <h1 class="display-4 mb-3">My <span class="text-primary">Services</span></h1>
            <p class="lead text-muted">Professional services tailored to your needs</p>
        </div>

        <div class="row g-4">
            <!-- Service 1 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <div class="card border-0 shadow-sm h-100 service-card">
                    <div class="card-body text-center py-5">
                        <i class="fas fa-globe text-primary fa-3x mb-3"></i>
                        <h5 class="card-title mb-3">Website Development</h5>
                        <p class="card-text text-muted mb-4">Custom website development tailored to your specific business needs and requirements.</p>
                        <p class="h6 text-primary mb-3">$500 - $5000</p>
                        <a href="booking.php" class="btn btn-primary btn-sm">
                            <i class="fas fa-calendar me-2"></i>Book Now
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm h-100 service-card">
                    <div class="card-body text-center py-5">
                        <i class="fas fa-paint-brush text-primary fa-3x mb-3"></i>
                        <h5 class="card-title mb-3">Frontend Development</h5>
                        <p class="card-text text-muted mb-4">Responsive and interactive user interfaces using modern technologies and best practices.</p>
                        <p class="h6 text-primary mb-3">$300 - $2000</p>
                        <a href="booking.php" class="btn btn-primary btn-sm">
                            <i class="fas fa-calendar me-2"></i>Book Now
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm h-100 service-card">
                    <div class="card-body text-center py-5">
                        <i class="fas fa-server text-primary fa-3x mb-3"></i>
                        <h5 class="card-title mb-3">Backend Development</h5>
                        <p class="card-text text-muted mb-4">Robust server-side development and APIs for scalable and secure applications.</p>
                        <p class="h6 text-primary mb-3">$400 - $3000</p>
                        <a href="booking.php" class="btn btn-primary btn-sm">
                            <i class="fas fa-calendar me-2"></i>Book Now
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <div class="card border-0 shadow-sm h-100 service-card">
                    <div class="card-body text-center py-5">
                        <i class="fas fa-layer-group text-primary fa-3x mb-3"></i>
                        <h5 class="card-title mb-3">Full Stack Web Apps</h5>
                        <p class="card-text text-muted mb-4">Complete web application development from frontend to backend with database integration.</p>
                        <p class="h6 text-primary mb-3">$1000 - $10000</p>
                        <a href="booking.php" class="btn btn-primary btn-sm">
                            <i class="fas fa-calendar me-2"></i>Book Now
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 5 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm h-100 service-card">
                    <div class="card-body text-center py-5">
                        <i class="fas fa-pencil-ruler text-primary fa-3x mb-3"></i>
                        <h5 class="card-title mb-3">UI/UX Design</h5>
                        <p class="card-text text-muted mb-4">Modern and user-friendly interface designs that enhance user experience and engagement.</p>
                        <p class="h6 text-primary mb-3">$500 - $3000</p>
                        <a href="booking.php" class="btn btn-primary btn-sm">
                            <i class="fas fa-calendar me-2"></i>Book Now
                        </a>
                    </div>
                </div>
            </div>

            <!-- Service 6 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm h-100 service-card">
                    <div class="card-body text-center py-5">
                        <i class="fas fa-plug text-primary fa-3x mb-3"></i>
                        <h5 class="card-title mb-3">API Integration</h5>
                        <p class="card-text text-muted mb-4">Third-party API integration services to enhance your application functionality.</p>
                        <p class="h6 text-primary mb-3">$300 - $1500</p>
                        <a href="booking.php" class="btn btn-primary btn-sm">
                            <i class="fas fa-calendar me-2"></i>Book Now
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="row mt-5">
            <div class="col-lg-8 mx-auto">
                <div class="card border-0 shadow-lg glass text-center p-5" data-aos="fade-up">
                    <h3 class="mb-3">Looking for a Custom Solution?</h3>
                    <p class="text-muted mb-4">Every project is unique. Let's discuss your specific requirements and create a tailored solution.</p>
                    <a href="contact.php" class="btn btn-primary btn-lg">
                        <i class="fas fa-envelope me-2"></i>Get in Touch
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
