
document.addEventListener('DOMContentLoaded', () => {
    // Mobile menu toggle
    const menuBtn = document.querySelector('.mobile-menu-btn');
    const navLinks = document.querySelector('.nav-links');
    if(menuBtn && navLinks) {
        menuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    }

    // Lead Form mock submission
    const form = document.getElementById('leadForm');
    if(form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const btn = this.querySelector('button');
            const originalText = btn.innerText;
            btn.innerText = 'Sending Request...';
            btn.style.opacity = '0.7';
            
            setTimeout(() => {
                alert('Thank you! Your request has been securely submitted. A specialist will call you shortly.');
                this.reset();
                btn.innerText = originalText;
                btn.style.opacity = '1';
            }, 1000);
        });
    }
});
