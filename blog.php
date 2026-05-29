<?php
/**
 * Blog Page
 */
$page_title = 'Blog';
require_once 'config/config.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<section class="py-5">
    <div class="container">
        <!-- Page Title -->
        <div class="text-center mb-5" data-aos="fade-up">
            <h1 class="display-4 mb-3"><span class="text-primary">Blog</span> Posts</h1>
            <p class="lead text-muted">Articles about web development and technology</p>
        </div>

        <div class="row g-4">
            <!-- Blog Post 1 -->
            <div class="col-lg-6" data-aos="fade-up">
                <div class="card border-0 shadow-sm h-100 blog-card">
                    <img src="https://via.placeholder.com/500x300?text=Web+Development" class="card-img-top" alt="Web Development">
                    <div class="card-body">
                        <span class="badge badge-primary mb-3">Web Development</span>
                        <h5 class="card-title">Introduction to Full Stack Web Development</h5>
                        <p class="card-text text-muted">Learn the fundamentals of full stack web development and how to build complete web applications from scratch...</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted"><i class="fas fa-calendar me-2"></i>May 28, 2024</small>
                            <a href="#" class="btn btn-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Post 2 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm h-100 blog-card">
                    <img src="https://via.placeholder.com/500x300?text=PHP+Tutorial" class="card-img-top" alt="PHP Tutorial">
                    <div class="card-body">
                        <span class="badge badge-primary mb-3">PHP</span>
                        <h5 class="card-title">PHP Best Practices for 2024</h5>
                        <p class="card-text text-muted">Discover the best practices for writing clean, secure, and maintainable PHP code in modern applications...</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted"><i class="fas fa-calendar me-2"></i>May 25, 2024</small>
                            <a href="#" class="btn btn-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Post 3 -->
            <div class="col-lg-6" data-aos="fade-up">
                <div class="card border-0 shadow-sm h-100 blog-card">
                    <img src="https://via.placeholder.com/500x300?text=JavaScript+Tips" class="card-img-top" alt="JavaScript Tips">
                    <div class="card-body">
                        <span class="badge badge-primary mb-3">JavaScript</span>
                        <h5 class="card-title">Essential JavaScript Tips and Tricks</h5>
                        <p class="card-text text-muted">Master advanced JavaScript concepts and improve your coding efficiency with these essential tips...</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted"><i class="fas fa-calendar me-2"></i>May 20, 2024</small>
                            <a href="#" class="btn btn-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Post 4 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm h-100 blog-card">
                    <img src="https://via.placeholder.com/500x300?text=Freelancing" class="card-img-top" alt="Freelancing">
                    <div class="card-body">
                        <span class="badge badge-primary mb-3">Career</span>
                        <h5 class="card-title">Starting Your Freelance Web Development Career</h5>
                        <p class="card-text text-muted">A comprehensive guide to starting and growing your freelance web development business successfully...</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted"><i class="fas fa-calendar me-2"></i>May 18, 2024</small>
                            <a href="#" class="btn btn-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Post 5 -->
            <div class="col-lg-6" data-aos="fade-up">
                <div class="card border-0 shadow-sm h-100 blog-card">
                    <img src="https://via.placeholder.com/500x300?text=Security" class="card-img-top" alt="Security">
                    <div class="card-body">
                        <span class="badge badge-primary mb-3">Security</span>
                        <h5 class="card-title">Web Application Security Best Practices</h5>
                        <p class="card-text text-muted">Learn how to protect your web applications from common security vulnerabilities and threats...</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted"><i class="fas fa-calendar me-2"></i>May 15, 2024</small>
                            <a href="#" class="btn btn-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Post 6 -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm h-100 blog-card">
                    <img src="https://via.placeholder.com/500x300?text=Performance" class="card-img-top" alt="Performance">
                    <div class="card-body">
                        <span class="badge badge-primary mb-3">Performance</span>
                        <h5 class="card-title">Optimizing Website Performance</h5>
                        <p class="card-text text-muted">Tips and techniques to optimize your website for better performance and user experience...</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted"><i class="fas fa-calendar me-2"></i>May 10, 2024</small>
                            <a href="#" class="btn btn-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <nav aria-label="Blog pagination" class="mt-5">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
