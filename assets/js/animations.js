/**
 * Animation Utilities
 */

// Animate on scroll
function animateOnScroll() {
    const elements = document.querySelectorAll('[data-animate]');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const animation = entry.target.getAttribute('data-animate');
                entry.target.classList.add(animation);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });
    
    elements.forEach(el => observer.observe(el));
}

// Stagger animation
function staggerAnimation(selector, delay = 100) {
    const elements = document.querySelectorAll(selector);
    
    elements.forEach((el, index) => {
        el.style.animationDelay = `${index * delay}ms`;
    });
}

// Fade in text
function fadeInText(selector) {
    const text = document.querySelector(selector);
    if (!text) return;
    
    const words = text.innerText.split(' ');
    text.innerHTML = words.map(word => 
        `<span class="fade-word" style="display: inline-block; margin: 0 0.3em;">${word}</span>`
    ).join('');
    
    text.querySelectorAll('.fade-word').forEach((word, index) => {
        word.style.animation = `fadeIn 0.5s ease-in-out ${index * 0.1}s forwards`;
        word.style.opacity = '0';
    });
}

// Number counter
function countUp(selector, target, duration = 2000) {
    const element = document.querySelector(selector);
    if (!element) return;
    
    let current = 0;
    const increment = target / (duration / 16);
    
    const interval = setInterval(() => {
        current += increment;
        if (current >= target) {
            element.textContent = target;
            clearInterval(interval);
        } else {
            element.textContent = Math.floor(current);
        }
    }, 16);
}

// Parallax effect
function parallaxEffect(selector, speed = 0.5) {
    const elements = document.querySelectorAll(selector);
    
    window.addEventListener('scroll', () => {
        elements.forEach(el => {
            const scrollY = window.scrollY;
            el.style.transform = `translateY(${scrollY * speed}px)`;
        });
    });
}

// Initialize animations
document.addEventListener('DOMContentLoaded', () => {
    animateOnScroll();
    parallaxEffect('[data-parallax]');
});
