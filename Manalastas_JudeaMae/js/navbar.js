document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.getElementById('hamburger');
    const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');
    const closeBtn = document.getElementById('closeBtn');

    hamburger.addEventListener('click', function() {
        hamburger.classList.add('active');
        mobileMenuOverlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    });

    function closeMobileMenu() {
        hamburger.classList.remove('active');
        mobileMenuOverlay.classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    closeBtn.addEventListener('click', closeMobileMenu);

    mobileMenuOverlay.addEventListener('click', function(e) {
        if (e.target === mobileMenuOverlay) {
            closeMobileMenu();
        }
    });

    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link, .book-btn-mobile');
    mobileNavLinks.forEach(link => {
        link.addEventListener('click', closeMobileMenu);
    });
});