<?php
/**
 * Navigation Bar Include
 */
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand fw-bold" href="<?php echo APP_URL; ?>/index.php">
            <i class="fas fa-code text-primary"></i> Portfolio
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo APP_URL; ?>/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo APP_URL; ?>/about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo APP_URL; ?>/skills.php">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo APP_URL; ?>/projects.php">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo APP_URL; ?>/services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo APP_URL; ?>/testimonials.php">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo APP_URL; ?>/blog.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo APP_URL; ?>/contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <button class="btn btn-outline-primary btn-sm ms-2" id="themeToggle">
                        <i class="fas fa-moon"></i>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>
