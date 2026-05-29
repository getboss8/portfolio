# Full Stack Developer Portfolio with Online Booking System

A professional, modern portfolio website for developers featuring an integrated online booking system and admin dashboard.

## 🎯 Features

### Frontend
- **Responsive Design** - Works seamlessly on desktop, tablet, and mobile
- **Modern UI/UX** - Glassmorphism effects, smooth animations, hover transitions
- **Dark/Light Mode** - Toggle between themes
- **Animated Components** - Typing effect, progress bars, counters, AOS animations
- **Hero Section** - Professional introduction with CTA buttons
- **Portfolio Showcase** - Project gallery with category filters and modals
- **Online Booking** - Complete appointment scheduling system
- **Testimonials** - Client reviews with carousel slider
- **Contact Form** - Integrated contact system with map
- **Blog Section** - Articles about web development

### Backend
- **Secure Authentication** - PHP sessions with password hashing
- **Admin Dashboard** - Complete management panel
- **Booking Management** - Approve/reject appointments, prevent double booking
- **CRUD Operations** - Manage projects, services, testimonials, messages
- **Database Integration** - MySQL with proper normalization
- **Security** - SQL injection prevention, XSS protection, CSRF tokens, input sanitization

## 📚 Technology Stack

- **Frontend:** HTML5, CSS3, JavaScript (ES6)
- **Backend:** PHP
- **Database:** MySQL
- **UI Libraries:** Bootstrap 5, Font Awesome, AOS.js

## 📁 Folder Structure

```
portfolio/
├── assets/
│   ├── css/
│   │   ├── style.css
│   │   ├── responsive.css
│   │   └── animations.css
│   ├── js/
│   │   ├── main.js
│   │   ├── theme-toggle.js
│   │   └── animations.js
│   ├── images/
│   └── icons/
├── admin/
│   ├── index.php
│   ├── dashboard.php
│   ├── projects.php
│   ├── bookings.php
│   ├── messages.php
│   ├── testimonials.php
│   ├── blog.php
│   └── profile.php
├── includes/
│   ├── header.php
│   ├── footer.php
│   ├── navbar.php
│   └── functions.php
├── config/
│   ├── database.php
│   ├── config.php
│   └── constants.php
├── classes/
│   ├── Database.php
│   ├── User.php
│   ├── Project.php
│   ├── Booking.php
│   ├── Message.php
│   └── Testimonial.php
├── uploads/
│   ├── projects/
│   ├── testimonials/
│   └── .gitkeep
├── database/
│   └── schema.sql
├── index.php
├── about.php
├── skills.php
├── projects.php
├── services.php
├── booking.php
├── testimonials.php
├── blog.php
├── contact.php
├── login.php
└── .gitignore
```

## 🚀 Quick Start

### Prerequisites
- PHP 7.4+
- MySQL 5.7+
- Apache with mod_rewrite enabled
- Composer (optional)

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/getboss8/portfolio.git
   cd portfolio
   ```

2. **Create Database**
   ```bash
   mysql -u root -p < database/schema.sql
   ```

3. **Configure Database Connection**
   - Copy `config/config.example.php` to `config/config.php`
   - Update database credentials:
   ```php
   define('DB_HOST', 'localhost');
   define('DB_USER', 'root');
   define('DB_PASS', 'your_password');
   define('DB_NAME', 'portfolio_db');
   ```

4. **Set File Permissions**
   ```bash
   chmod 755 uploads/
   chmod 755 uploads/projects/
   chmod 755 uploads/testimonials/
   ```

5. **Start Development Server**
   ```bash
   php -S localhost:8000
   ```

6. **Access the Website**
   - Frontend: http://localhost:8000
   - Admin: http://localhost:8000/admin/
   - Default credentials: admin@portfolio.com / password123 (change immediately!)

## 📄 Pages

- **Home** (`index.php`) - Landing page with hero section
- **About** (`about.php`) - Professional biography and experience
- **Skills** (`skills.php`) - Animated skill bars
- **Portfolio** (`projects.php`) - Project showcase with filters
- **Services** (`services.php`) - Service offerings
- **Booking** (`booking.php`) - Online appointment scheduling
- **Testimonials** (`testimonials.php`) - Client reviews carousel
- **Blog** (`blog.php`) - Article listing
- **Contact** (`contact.php`) - Contact form with map
- **Login** (`login.php`) - Admin authentication
- **Dashboard** (`admin/dashboard.php`) - Admin management panel

## 🔒 Security Features

- Password hashing with bcrypt
- Prepared statements for SQL injection prevention
- CSRF token protection
- XSS protection with htmlspecialchars()
- Input validation and sanitization
- Secure session management
- SQL error suppression in production

## 🎨 Customization

### Color Scheme
Edit `assets/css/style.css` to modify:
- Primary color: `--primary-color: #6366f1`
- Secondary color: `--secondary-color: #8b5cf6`
- Background: `--bg-color: #0f172a`
- Text: `--text-color: #e2e8f0`

### Content
- Update admin dashboard to modify portfolio content
- Add/edit projects, services, and testimonials via admin panel
- Edit HTML files for static content (About, Skills pages)

## 📊 Database Schema

### Main Tables
- `users` - Admin users
- `projects` - Portfolio projects
- `bookings` - Client appointments
- `services` - Services offered
- `testimonials` - Client reviews
- `messages` - Contact form submissions
- `blog_posts` - Blog articles
- `skills` - Developer skills

## 🛠️ Admin Functions

- Create/Edit/Delete projects
- Manage booking requests (approve/reject)
- View and respond to messages
- Add testimonials
- Write blog posts
- Update profile information
- View analytics and statistics

## 📱 Responsive Breakpoints

- Desktop: 1200px+
- Tablet: 768px - 1199px
- Mobile: Below 768px

## ⚡ Performance Optimization

- Minified CSS and JavaScript
- Image optimization
- Lazy loading for images
- Browser caching
- Gzip compression
- Optimized database queries

## 🎁 Optional Features

- [x] Dark/Light mode toggle
- [x] Animated counters
- [x] Project filters
- [x] AJAX form submission
- [ ] Multi-language support
- [ ] Live chat system
- [ ] Email notifications
- [ ] Payment integration
- [ ] PDF CV generator

## 🐛 Troubleshooting

### Database Connection Error
- Check database credentials in `config/config.php`
- Ensure MySQL service is running
- Verify database exists: `SHOW DATABASES;`

### File Upload Issues
- Check folder permissions: `chmod 755 uploads/`
- Verify PHP upload settings in `php.ini`
- Check available disk space

### Admin Login Issues
- Clear browser cookies and cache
- Reset admin password in database
- Check PHP sessions are enabled

## 📝 License

This project is open source and available under the MIT License.

## 🤝 Support

For support, email: support@portfolio.local

## 👨‍💻 Author

Created by: Your Name  
GitHub: [@getboss8](https://github.com/getboss8)

---

**Last Updated:** May 2026
