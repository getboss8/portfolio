<?php
/**
 * Header Include File
 * Contains DOCTYPE and meta tags
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Professional Full Stack Developer Portfolio with Online Booking System">
    <meta name="keywords" content="developer, portfolio, freelance, booking, web development">
    <meta name="author" content="Your Name">
    <meta name="theme-color" content="#6366f1">
    
    <title><?php echo isset($page_title) ? $page_title . ' | ' : ''; ?>Portfolio & Booking Platform</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo APP_URL; ?>/assets/images/favicon.ico">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo APP_URL; ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo APP_URL; ?>/assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo APP_URL; ?>/assets/css/animations.css">
    
    <?php if (isset($extra_css)) echo $extra_css; ?>
</head>
<body>
