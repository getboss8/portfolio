<?php
/**
 * Admin Login Page
 */
session_start();
require_once 'config/config.php';

$page_title = 'Admin Login';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?> | Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.1), rgba(139, 92, 246, 0.1));
        }
        
        .login-card {
            max-width: 400px;
            width: 100%;
            padding: 2rem;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-card card border-0 shadow-lg">
            <div class="card-body">
                <div class="text-center mb-4">
                    <h1 class="h3 mb-2">
                        <i class="fas fa-code text-primary"></i> Portfolio Admin
                    </h1>
                    <p class="text-muted">Sign in to your account</p>
                </div>
                
                <!-- Alert Messages -->
                <div id="alertContainer"></div>
                
                <!-- Login Form -->
                <form method="POST" action="admin/login-process.php">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">
                            Remember me
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary w-100 mb-3">
                        <i class="fas fa-sign-in-alt me-2"></i>Sign In
                    </button>
                </form>
                
                <hr class="my-3">
                
                <div class="text-center text-muted small">
                    <p>Demo Credentials:</p>
                    <p>Email: admin@portfolio.com</p>
                    <p>Password: password123</p>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
