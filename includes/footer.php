<?php
/**
 * Footer Include File
 */
?>
    <!-- Footer -->
    <footer class="footer bg-dark text-light py-5">
        <div class="container">
            <div class="row">
                <!-- About -->
                <div class="col-md-3 mb-4">
                    <h5 class="text-primary mb-3">About</h5>
                    <p class="text-muted">Full Stack Developer with expertise in building modern web applications and providing exceptional user experiences.</p>
                </div>
                
                <!-- Quick Links -->
                <div class="col-md-3 mb-4">
                    <h5 class="text-primary mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo APP_URL; ?>/index.php" class="text-muted text-decoration-none">Home</a></li>
                        <li><a href="<?php echo APP_URL; ?>/about.php" class="text-muted text-decoration-none">About</a></li>
                        <li><a href="<?php echo APP_URL; ?>/projects.php" class="text-muted text-decoration-none">Portfolio</a></li>
                        <li><a href="<?php echo APP_URL; ?>/services.php" class="text-muted text-decoration-none">Services</a></li>
                        <li><a href="<?php echo APP_URL; ?>/contact.php" class="text-muted text-decoration-none">Contact</a></li>
                    </ul>
                </div>
                
                <!-- Services -->
                <div class="col-md-3 mb-4">
                    <h5 class="text-primary mb-3">Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo APP_URL; ?>/services.php" class="text-muted text-decoration-none">Web Development</a></li>
                        <li><a href="<?php echo APP_URL; ?>/services.php" class="text-muted text-decoration-none">Frontend Development</a></li>
                        <li><a href="<?php echo APP_URL; ?>/services.php" class="text-muted text-decoration-none">Backend Development</a></li>
                        <li><a href="<?php echo APP_URL; ?>/booking.php" class="text-muted text-decoration-none">Book Appointment</a></li>
                    </ul>
                </div>
                
                <!-- Social Media -->
                <div class="col-md-3 mb-4">
                    <h5 class="text-primary mb-3">Follow Me</h5>
                    <div class="social-links">
                        <a href="https://facebook.com" class="text-muted text-decoration-none me-2" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com" class="text-muted text-decoration-none me-2" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://linkedin.com" class="text-muted text-decoration-none me-2" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://github.com" class="text-muted text-decoration-none me-2" title="GitHub"><i class="fab fa-github"></i></a>
                        <a href="https://instagram.com" class="text-muted text-decoration-none" title="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            
            <hr class="bg-secondary my-4">
            
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="text-muted mb-0">&copy; 2024 Your Name. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="text-muted mb-0">Designed & Developed with <i class="fas fa-heart text-danger"></i> by Your Name</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- jQuery (optional) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Custom JS -->
    <script src="<?php echo APP_URL; ?>/assets/js/main.js"></script>
    <script src="<?php echo APP_URL; ?>/assets/js/theme-toggle.js"></script>
    <script src="<?php echo APP_URL; ?>/assets/js/animations.js"></script>
    
    <?php if (isset($extra_js)) echo $extra_js; ?>
    
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            offset: 100,
            once: true
        });
    </script>
</body>
</html>
