-- Portfolio Database Schema
CREATE DATABASE IF NOT EXISTS portfolio_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE portfolio_db;

-- Users Table
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(20),
    bio TEXT,
    avatar VARCHAR(255),
    role ENUM('admin', 'user') DEFAULT 'user',
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Projects Table
CREATE TABLE projects (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(200) NOT NULL,
    description TEXT NOT NULL,
    category VARCHAR(50),
    image VARCHAR(255),
    technologies VARCHAR(255),
    live_link VARCHAR(255),
    github_link VARCHAR(255),
    featured BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Services Table
CREATE TABLE services (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(150) NOT NULL,
    description TEXT NOT NULL,
    icon VARCHAR(50),
    price_range VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Bookings Table
CREATE TABLE bookings (
    id INT PRIMARY KEY AUTO_INCREMENT,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    service_id INT NOT NULL,
    booking_date DATE NOT NULL,
    booking_time TIME NOT NULL,
    message TEXT,
    status ENUM('pending', 'approved', 'rejected', 'completed') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (service_id) REFERENCES services(id) ON DELETE CASCADE,
    UNIQUE KEY unique_booking (booking_date, booking_time)
);

-- Testimonials Table
CREATE TABLE testimonials (
    id INT PRIMARY KEY AUTO_INCREMENT,
    client_name VARCHAR(100) NOT NULL,
    client_title VARCHAR(100),
    client_image VARCHAR(255),
    message TEXT NOT NULL,
    rating INT CHECK (rating >= 1 AND rating <= 5),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Messages Table
CREATE TABLE messages (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    subject VARCHAR(200) NOT NULL,
    message TEXT NOT NULL,
    is_read BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Blog Posts Table
CREATE TABLE blog_posts (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(250) NOT NULL,
    slug VARCHAR(250) NOT NULL UNIQUE,
    content LONGTEXT NOT NULL,
    excerpt VARCHAR(500),
    featured_image VARCHAR(255),
    category VARCHAR(50),
    author_id INT NOT NULL,
    views INT DEFAULT 0,
    is_published BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (author_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Skills Table
CREATE TABLE skills (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    proficiency INT CHECK (proficiency >= 0 AND proficiency <= 100),
    category VARCHAR(50),
    icon VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Settings Table
CREATE TABLE settings (
    id INT PRIMARY KEY AUTO_INCREMENT,
    setting_key VARCHAR(100) NOT NULL UNIQUE,
    setting_value LONGTEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Create Indexes
CREATE INDEX idx_bookings_date ON bookings(booking_date);
CREATE INDEX idx_bookings_status ON bookings(status);
CREATE INDEX idx_projects_category ON projects(category);
CREATE INDEX idx_blog_published ON blog_posts(is_published);
CREATE INDEX idx_messages_read ON messages(is_read);

-- Insert Sample Admin User (password: password123)
INSERT INTO users (name, email, password, role) VALUES (
    'Admin',
    'admin@portfolio.com',
    '$2y$10$Z1s8T1Ym7X8b5z3c9w5q1e5Z8T1Ym7X8b5z3c9w5q1e5Z8T1Ym7X8b',
    'admin'
);

-- Insert Sample Services
INSERT INTO services (title, description, icon, price_range) VALUES
('Website Development', 'Custom website development tailored to your needs', 'fas fa-globe', '$500-$5000'),
('Frontend Development', 'Responsive and interactive user interfaces', 'fas fa-paint-brush', '$300-$2000'),
('Backend Development', 'Robust server-side development and APIs', 'fas fa-server', '$400-$3000'),
('Full Stack Web Apps', 'Complete web application development', 'fas fa-layer-group', '$1000-$10000'),
('UI/UX Design', 'Modern and user-friendly design', 'fas fa-pencil-ruler', '$500-$3000'),
('API Integration', 'Third-party API integration services', 'fas fa-plug', '$300-$1500'),
('Website Maintenance', 'Ongoing support and updates', 'fas fa-wrench', '$100-$500/month');

-- Insert Sample Skills
INSERT INTO skills (name, proficiency, category, icon) VALUES
('HTML5', 95, 'Frontend', 'fab fa-html5'),
('CSS3', 95, 'Frontend', 'fab fa-css3-alt'),
('JavaScript', 90, 'Frontend', 'fab fa-js-square'),
('React.js', 85, 'Frontend', 'fab fa-react'),
('Bootstrap', 90, 'Frontend', 'fab fa-bootstrap'),
('Tailwind CSS', 85, 'Frontend', 'fas fa-wind'),
('PHP', 90, 'Backend', 'fab fa-php'),
('MySQL', 85, 'Backend', 'fas fa-database'),
('Node.js', 80, 'Backend', 'fab fa-node-js'),
('REST API', 85, 'Backend', 'fas fa-exchange-alt'),
('Git/GitHub', 90, 'Tools', 'fab fa-github'),
('Responsive Design', 95, 'Tools', 'fas fa-mobile-alt');

-- Insert Sample Projects
INSERT INTO projects (title, description, category, technologies, live_link, github_link, featured) VALUES
('E-Commerce Platform', 'Full-featured online store with payment integration', 'E-Commerce', 'PHP, MySQL, Bootstrap, JavaScript', 'https://example.com/ecommerce', 'https://github.com/example/ecommerce', TRUE),
('Booking System', 'Complete appointment scheduling solution', 'Booking Systems', 'PHP, MySQL, Bootstrap', 'https://example.com/booking', 'https://github.com/example/booking', TRUE),
('Admin Dashboard', 'Modern admin panel with analytics', 'Dashboards', 'React, Chart.js, Bootstrap', 'https://example.com/dashboard', 'https://github.com/example/dashboard', FALSE),
('School Management System', 'Complete school management solution', 'School Management', 'PHP, MySQL, Bootstrap', 'https://example.com/school', 'https://github.com/example/school', TRUE),
('Real Estate Platform', 'Property listing and management system', 'Real Estate Systems', 'PHP, MySQL, JavaScript, Bootstrap', 'https://example.com/realestate', 'https://github.com/example/realestate', FALSE),
('Portfolio Website', 'Professional developer portfolio', 'Portfolio Websites', 'HTML5, CSS3, JavaScript, Bootstrap', 'https://example.com/portfolio', 'https://github.com/example/portfolio', FALSE);

-- Insert Sample Testimonials
INSERT INTO testimonials (client_name, client_title, message, rating) VALUES
('John Smith', 'CEO, Tech Startup', 'Excellent work! The developer delivered exactly what we needed on time and on budget.', 5),
('Sarah Johnson', 'Marketing Manager', 'Professional, responsive, and delivers high-quality results. Highly recommended!', 5),
('Mike Wilson', 'Business Owner', 'Great communication and exceptional coding skills. Our website is now a massive asset.', 4),
('Emily Davis', 'Project Manager', 'Delivered a robust solution that exceeded our expectations. Very satisfied!', 5);

-- Insert Sample Settings
INSERT INTO settings (setting_key, setting_value) VALUES
('site_name', 'Full Stack Developer Portfolio'),
('site_description', 'Professional portfolio and booking platform'),
('email', 'contact@portfolio.com'),
('phone', '+1-800-123-4567'),
('address', '123 Developer Street, Tech City, TC 12345'),
('facebook', 'https://facebook.com/portfolio'),
('twitter', 'https://twitter.com/portfolio'),
('linkedin', 'https://linkedin.com/in/portfolio'),
('github', 'https://github.com/portfolio'),
('years_experience', '5'),
('projects_completed', '50'),
('happy_clients', '30');
