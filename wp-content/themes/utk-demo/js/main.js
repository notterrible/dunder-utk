/**
 * UTK Demo Theme JavaScript
 */

(function() {
    'use strict';

    // DOM Ready
    document.addEventListener('DOMContentLoaded', function() {

        // Search Toggle
        const searchToggle = document.querySelector('.search-toggle');
        if (searchToggle) {
            searchToggle.addEventListener('click', function() {
                // Add your search functionality here
                alert('Search functionality - to be implemented');
            });
        }

        // Mobile Menu Toggle (for future enhancement)
        function initMobileMenu() {
            const windowWidth = window.innerWidth;
            const mainNav = document.querySelector('.main-navigation ul');

            if (windowWidth < 768 && mainNav) {
                // Add mobile menu button if needed
                console.log('Mobile view detected');
            }
        }

        // Run on load and resize
        initMobileMenu();
        window.addEventListener('resize', initMobileMenu);

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href !== '#' && document.querySelector(href)) {
                    e.preventDefault();
                    document.querySelector(href).scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

    });

})();
