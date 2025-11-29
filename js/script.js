/* ========================================
   QuickPOS Landing Page - JavaScript
   ======================================== */

// ========================================
// NAVIGATION - POS-101
// ========================================

document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('header');
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('nav-menu');
    const navLinks = document.querySelectorAll('.nav-link');
    
    // Create overlay element
    const overlay = document.createElement('div');
    overlay.classList.add('nav-overlay');
    document.body.appendChild(overlay);
    
    // Toggle mobile menu
    function toggleMenu() {
        hamburger.classList.toggle('active');
        navMenu.classList.toggle('active');
        overlay.classList.toggle('active');
        document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : '';
    }
    
    // Close mobile menu
    function closeMenu() {
        hamburger.classList.remove('active');
        navMenu.classList.remove('active');
        overlay.classList.remove('active');
        document.body.style.overflow = '';
    }
    
    // Hamburger click event
    hamburger.addEventListener('click', toggleMenu);
    
    // Overlay click event
    overlay.addEventListener('click', closeMenu);
    
    // Close menu when clicking nav links
    navLinks.forEach(link => {
        link.addEventListener('click', closeMenu);
    });
    
    // Header scroll effect
    function handleScroll() {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }
    
    window.addEventListener('scroll', handleScroll);
    
    // Initial check
    handleScroll();
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                e.preventDefault();
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // ========================================
    // PRICING TOGGLE - POS-401
    // ========================================
    const pricingToggle = document.getElementById('pricing-toggle');
    const toggleLabels = document.querySelectorAll('.toggle-label');
    const priceAmounts = document.querySelectorAll('.price-amount');
    
    if (pricingToggle) {
        pricingToggle.addEventListener('click', function() {
            this.classList.toggle('active');
            
            // Toggle active state on labels
            toggleLabels.forEach(label => label.classList.toggle('active'));
            
            // Update prices
            const isYearly = this.classList.contains('active');
            priceAmounts.forEach(price => {
                const monthly = price.dataset.monthly;
                const yearly = price.dataset.yearly;
                price.textContent = isYearly ? yearly : monthly;
            });
        });
        
        // Click on labels to toggle
        toggleLabels.forEach(label => {
            label.addEventListener('click', function() {
                const period = this.dataset.period;
                const isCurrentlyYearly = pricingToggle.classList.contains('active');
                
                if ((period === 'yearly' && !isCurrentlyYearly) || (period === 'monthly' && isCurrentlyYearly)) {
                    pricingToggle.click();
                }
            });
        });
    }
    
    // ========================================
    // CONTACT FORM VALIDATION - POS-501
    // ========================================
    const contactForm = document.getElementById('contact-form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            // Clear previous errors
            document.querySelectorAll('.error-message').forEach(msg => {
                msg.style.display = 'none';
                msg.textContent = '';
            });
            
            let isValid = true;
            
            // Validate Name
            const nameInput = document.getElementById('name');
            const nameValue = nameInput.value.trim();
            if (nameValue === '') {
                showError('name-error', 'Name is required');
                isValid = false;
            } else if (nameValue.length < 2) {
                showError('name-error', 'Name must be at least 2 characters');
                isValid = false;
            }
            
            // Validate Email
            const emailInput = document.getElementById('email');
            const emailValue = emailInput.value.trim();
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (emailValue === '') {
                showError('email-error', 'Email is required');
                isValid = false;
            } else if (!emailPattern.test(emailValue)) {
                showError('email-error', 'Please enter a valid email address');
                isValid = false;
            }
            
            // Validate Message
            const messageInput = document.getElementById('message');
            const messageValue = messageInput.value.trim();
            if (messageValue === '') {
                showError('message-error', 'Message is required');
                isValid = false;
            } else if (messageValue.length < 10) {
                showError('message-error', 'Message must be at least 10 characters');
                isValid = false;
            }
            
            // Prevent form submission if validation fails
            if (!isValid) {
                e.preventDefault();
            }
        });
        
        // Helper function to show error messages
        function showError(elementId, message) {
            const errorElement = document.getElementById(elementId);
            if (errorElement) {
                errorElement.textContent = message;
                errorElement.style.display = 'block';
            }
        }
        
        // Real-time validation on input
        const formInputs = contactForm.querySelectorAll('.form-control');
        formInputs.forEach(input => {
            input.addEventListener('blur', function() {
                const errorId = this.id + '-error';
                const errorElement = document.getElementById(errorId);
                
                if (errorElement && errorElement.style.display === 'block') {
                    // Re-validate on blur if error was shown
                    contactForm.dispatchEvent(new Event('submit'));
                }
            });
        });
    }
});


