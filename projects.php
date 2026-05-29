<?php
/**
 * Projects / Portfolio Page
 */
$page_title = 'Portfolio';
require_once 'config/config.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<section class="py-5">
    <div class="container">
        <!-- Page Title -->
        <div class="text-center mb-5" data-aos="fade-up">
            <h1 class="display-4 mb-3">My <span class="text-primary">Projects</span></h1>
            <p class="lead text-muted">Showcase of my recent work and achievements</p>
        </div>

        <!-- Filter Buttons -->
        <div class="text-center mb-5" data-aos="fade-up">
            <button class="btn btn-outline-primary me-2 mb-2 filter-btn" data-filter="all">All</button>
            <button class="btn btn-outline-primary me-2 mb-2 filter-btn" data-filter="ecommerce">E-Commerce</button>
            <button class="btn btn-outline-primary me-2 mb-2 filter-btn" data-filter="booking">Booking</button>
            <button class="btn btn-outline-primary me-2 mb-2 filter-btn" data-filter="dashboard">Dashboard</button>
            <button class="btn btn-outline-primary mb-2 filter-btn" data-filter="portfolio">Portfolio</button>
        </div>

        <!-- Projects Grid -->
        <div class="row g-4" id="projectsGrid">
            <!-- Project 1 -->
            <div class="col-md-6 col-lg-4 project-card" data-category="ecommerce" data-aos="fade-up">
                <div class="card border-0 shadow-sm h-100 hover-lift">
                    <img src="https://via.placeholder.com/400x250?text=E-Commerce+Platform" class="card-img-top" alt="E-Commerce Platform">
                    <div class="card-body">
                        <h5 class="card-title">E-Commerce Platform</h5>
                        <p class="card-text text-muted">Full-featured online store with payment gateway integration and inventory management.</p>
                        <div class="mb-3">
                            <span class="badge badge-primary me-2">PHP</span>
                            <span class="badge badge-primary me-2">MySQL</span>
                            <span class="badge badge-primary">Bootstrap</span>
                        </div>
                        <a href="#" class="btn btn-primary btn-sm me-2" data-bs-toggle="modal" data-bs-target="#projectModal1">
                            <i class="fas fa-eye me-1"></i>View
                        </a>
                        <a href="#" class="btn btn-outline-primary btn-sm">
                            <i class="fab fa-github me-1"></i>GitHub
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="col-md-6 col-lg-4 project-card" data-category="booking" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm h-100 hover-lift">
                    <img src="https://via.placeholder.com/400x250?text=Booking+System" class="card-img-top" alt="Booking System">
                    <div class="card-body">
                        <h5 class="card-title">Appointment Booking System</h5>
                        <p class="card-text text-muted">Complete online appointment scheduling with calendar integration and notifications.</p>
                        <div class="mb-3">
                            <span class="badge badge-primary me-2">PHP</span>
                            <span class="badge badge-primary me-2">JavaScript</span>
                            <span class="badge badge-primary">MySQL</span>
                        </div>
                        <a href="#" class="btn btn-primary btn-sm me-2" data-bs-toggle="modal" data-bs-target="#projectModal2">
                            <i class="fas fa-eye me-1"></i>View
                        </a>
                        <a href="#" class="btn btn-outline-primary btn-sm">
                            <i class="fab fa-github me-1"></i>GitHub
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="col-md-6 col-lg-4 project-card" data-category="dashboard" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm h-100 hover-lift">
                    <img src="https://via.placeholder.com/400x250?text=Admin+Dashboard" class="card-img-top" alt="Admin Dashboard">
                    <div class="card-body">
                        <h5 class="card-title">Admin Dashboard</h5>
                        <p class="card-text text-muted">Modern admin panel with analytics, charts, and data visualization capabilities.</p>
                        <div class="mb-3">
                            <span class="badge badge-primary me-2">React</span>
                            <span class="badge badge-primary me-2">Chart.js</span>
                            <span class="badge badge-primary">Bootstrap</span>
                        </div>
                        <a href="#" class="btn btn-primary btn-sm me-2" data-bs-toggle="modal" data-bs-target="#projectModal3">
                            <i class="fas fa-eye me-1"></i>View
                        </a>
                        <a href="#" class="btn btn-outline-primary btn-sm">
                            <i class="fab fa-github me-1"></i>GitHub
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="col-md-6 col-lg-4 project-card" data-category="ecommerce" data-aos="fade-up">
                <div class="card border-0 shadow-sm h-100 hover-lift">
                    <img src="https://via.placeholder.com/400x250?text=School+Management" class="card-img-top" alt="School Management">
                    <div class="card-body">
                        <h5 class="card-title">School Management System</h5>
                        <p class="card-text text-muted">Complete school management solution for students, teachers, and administrators.</p>
                        <div class="mb-3">
                            <span class="badge badge-primary me-2">PHP</span>
                            <span class="badge badge-primary me-2">MySQL</span>
                            <span class="badge badge-primary">Bootstrap</span>
                        </div>
                        <a href="#" class="btn btn-primary btn-sm me-2" data-bs-toggle="modal" data-bs-target="#projectModal4">
                            <i class="fas fa-eye me-1"></i>View
                        </a>
                        <a href="#" class="btn btn-outline-primary btn-sm">
                            <i class="fab fa-github me-1"></i>GitHub
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="col-md-6 col-lg-4 project-card" data-category="dashboard" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm h-100 hover-lift">
                    <img src="https://via.placeholder.com/400x250?text=Real+Estate" class="card-img-top" alt="Real Estate Platform">
                    <div class="card-body">
                        <h5 class="card-title">Real Estate Platform</h5>
                        <p class="card-text text-muted">Property listing and management system with advanced search and filtering options.</p>
                        <div class="mb-3">
                            <span class="badge badge-primary me-2">PHP</span>
                            <span class="badge badge-primary me-2">JavaScript</span>
                            <span class="badge badge-primary">MySQL</span>
                        </div>
                        <a href="#" class="btn btn-primary btn-sm me-2" data-bs-toggle="modal" data-bs-target="#projectModal5">
                            <i class="fas fa-eye me-1"></i>View
                        </a>
                        <a href="#" class="btn btn-outline-primary btn-sm">
                            <i class="fab fa-github me-1"></i>GitHub
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 6 -->
            <div class="col-md-6 col-lg-4 project-card" data-category="portfolio" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm h-100 hover-lift">
                    <img src="https://via.placeholder.com/400x250?text=Portfolio+Site" class="card-img-top" alt="Portfolio Website">
                    <div class="card-body">
                        <h5 class="card-title">Portfolio Website</h5>
                        <p class="card-text text-muted">Professional portfolio website showcasing projects and services with modern design.</p>
                        <div class="mb-3">
                            <span class="badge badge-primary me-2">HTML5</span>
                            <span class="badge badge-primary me-2">CSS3</span>
                            <span class="badge badge-primary">JavaScript</span>
                        </div>
                        <a href="#" class="btn btn-primary btn-sm me-2" data-bs-toggle="modal" data-bs-target="#projectModal6">
                            <i class="fas fa-eye me-1"></i>View
                        </a>
                        <a href="#" class="btn btn-outline-primary btn-sm">
                            <i class="fab fa-github me-1"></i>GitHub
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>

<script>
// Filter projects
document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const filter = this.dataset.filter;
        document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('btn-primary'));
        document.querySelectorAll('.filter-btn').forEach(b => b.classList.add('btn-outline-primary'));
        this.classList.remove('btn-outline-primary');
        this.classList.add('btn-primary');
        
        document.querySelectorAll('.project-card').forEach(card => {
            if (filter === 'all' || card.dataset.category === filter) {
                card.style.display = 'block';
                card.classList.add('fade-in');
            } else {
                card.style.display = 'none';
            }
        });
    });
});
</script>
