/**
 * Theme Toggle (Dark/Light Mode)
 */

const themeToggle = document.getElementById('themeToggle');
const htmlElement = document.documentElement;
const body = document.body;

// Initialize theme
function initializeTheme() {
    const savedTheme = localStorage.getItem('theme') || 'dark';
    applyTheme(savedTheme);
}

// Apply theme
function applyTheme(theme) {
    if (theme === 'light') {
        body.classList.add('light-mode');
        htmlElement.setAttribute('data-bs-theme', 'light');
        updateThemeIcon('sun');
    } else {
        body.classList.remove('light-mode');
        htmlElement.setAttribute('data-bs-theme', 'dark');
        updateThemeIcon('moon');
    }
    localStorage.setItem('theme', theme);
}

// Update icon
function updateThemeIcon(icon) {
    if (themeToggle) {
        themeToggle.innerHTML = icon === 'sun' ? 
            '<i class="fas fa-sun"></i>' : 
            '<i class="fas fa-moon"></i>';
    }
}

// Toggle theme
if (themeToggle) {
    themeToggle.addEventListener('click', function() {
        const currentTheme = localStorage.getItem('theme') || 'dark';
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        applyTheme(newTheme);
    });
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', initializeTheme);
