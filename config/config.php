<?php
/**
 * Application Configuration
 */

// Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'portfolio_db');

// Application Settings
define('APP_NAME', 'Portfolio & Booking Platform');
define('APP_URL', 'http://localhost:8000');
define('APP_VERSION', '1.0.0');

// Security
define('SECRET_KEY', 'your-secret-key-change-this-in-production');
define('PASSWORD_HASH_ALGO', 'bcrypt');

// Session Configuration
define('SESSION_TIMEOUT', 1800); // 30 minutes
define('SESSION_NAME', 'portfolio_session');

// Upload Settings
define('UPLOAD_DIR', dirname(__DIR__) . '/uploads/');
define('MAX_FILE_SIZE', 5242880); // 5MB
define('ALLOWED_EXTENSIONS', ['jpg', 'jpeg', 'png', 'gif', 'pdf']);

// Email Configuration (Optional)
define('MAIL_FROM', 'noreply@portfolio.com');
define('MAIL_HOST', 'smtp.gmail.com');
define('MAIL_PORT', 587);
define('MAIL_USERNAME', 'your-email@gmail.com');
define('MAIL_PASSWORD', 'your-app-password');

// Pagination
define('ITEMS_PER_PAGE', 10);

// Date and Time
define('TIMEZONE', 'UTC');
define('DATE_FORMAT', 'Y-m-d');
define('TIME_FORMAT', 'H:i:s');

// Set Timezone
date_default_timezone_set(TIMEZONE);

// Enable error reporting (disable in production)
if (defined('APP_ENV') && APP_ENV === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(E_ALL);
    ini_set('display_errors', 0);
    ini_set('log_errors', 1);
    ini_set('error_log', dirname(__DIR__) . '/logs/error.log');
}
