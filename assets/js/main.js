/**
 * Main JavaScript
 * Application-wide functions and utilities
 */

// DOM Ready
document.addEventListener('DOMContentLoaded', function() {
    initializeApp();
});

// Initialize App
function initializeApp() {
    setActiveNavLink();
    initializeCounters();
    initializeFormHandlers();
    scrollToTop();
}

// Set Active Navigation Link
function setActiveNavLink() {
    const currentLocation = location.pathname;
    const navLinks = document.querySelectorAll('.navbar-collapse .nav-link');
    
    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentLocation) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
}

// Counter Animation
function initializeCounters() {
    const counters = document.querySelectorAll('.counter');
    
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target'));
        let count = 0;
        const increment = target / 100;
        
        const updateCount = setInterval(() => {
            count += increment;
            if (count >= target) {
                counter.textContent = target;
                clearInterval(updateCount);
            } else {
                counter.textContent = Math.floor(count);
            }
        }, 30);
    });
}

// Form Handlers
function initializeFormHandlers() {
    const forms = document.querySelectorAll('form');
    
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            submitForm(this);
        });
    });
}

// Submit Form via AJAX
function submitForm(form) {
    const formData = new FormData(form);
    const action = form.getAttribute('action');
    const method = form.getAttribute('method') || 'POST';
    
    // Show loading state
    const submitBtn = form.querySelector('button[type="submit"]');
    const originalBtnText = submitBtn.innerHTML;
    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Loading...';
    submitBtn.disabled = true;
    
    fetch(action, {
        method: method,
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showAlert('success', data.message);
            form.reset();
        } else {
            showAlert('danger', data.message);
        }
    })
    .catch(error => {
        showAlert('danger', 'An error occurred. Please try again.');
        console.error('Error:', error);
    })
    .finally(() => {
        submitBtn.innerHTML = originalBtnText;
        submitBtn.disabled = false;
    });
}

// Show Alert
function showAlert(type, message) {
    const alertContainer = document.getElementById('alertContainer');
    
    if (!alertContainer) {
        const newContainer = document.createElement('div');
        newContainer.id = 'alertContainer';
        newContainer.className = 'position-fixed top-0 start-50 translate-middle-x mt-3';
        newContainer.style.zIndex = '9999';
        document.body.appendChild(newContainer);
    }
    
    const alert = document.createElement('div');
    alert.className = `alert alert-${type} alert-dismissible fade show`;
    alert.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `;
    
    document.getElementById('alertContainer').appendChild(alert);
    
    // Auto dismiss after 5 seconds
    setTimeout(() => {
        alert.remove();
    }, 5000);
}

// Scroll to Top
function scrollToTop() {
    const scrollBtn = document.getElementById('scrollTopBtn');
    
    if (!scrollBtn) {
        const btn = document.createElement('button');
        btn.id = 'scrollTopBtn';
        btn.className = 'btn btn-primary btn-floating';
        btn.innerHTML = '<i class="fas fa-arrow-up"></i>';
        btn.style.cssText = `
            position: fixed;
            bottom: 30px;
            right: 30px;
            display: none;
            z-index: 999;
            border-radius: 50%;
            width: 50px;
            height: 50px;
        `;
        document.body.appendChild(btn);
        
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                btn.style.display = 'block';
            } else {
                btn.style.display = 'none';
            }
        });
        
        btn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }
}

// Utility Functions
function formatDate(date) {
    return new Date(date).toLocaleDateString('en-US', {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });
}

function formatTime(time) {
    return new Date(`2000-01-01 ${time}`).toLocaleTimeString('en-US', {
        hour: '2-digit',
        minute: '2-digit'
    });
}

function validateEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}

function validatePhone(phone) {
    const regex = /^[\d\s\-\+\(\)]+$/;
    return regex.test(phone) && phone.replace(/\D/g, '').length >= 10;
}

// Export functions for use in other files
window.showAlert = showAlert;
window.submitForm = submitForm;
window.formatDate = formatDate;
window.formatTime = formatTime;
window.validateEmail = validateEmail;
window.validatePhone = validatePhone;
