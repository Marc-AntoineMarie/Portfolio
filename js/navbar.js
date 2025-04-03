document.addEventListener('DOMContentLoaded', function () {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

    burger.addEventListener('click', () => {
        // Toggle de la classe nav-active
        nav.classList.toggle('nav-active');

        // Animation des liens
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = '';
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`;
            }
        });

        // Animation du burger
        burger.classList.toggle('toggle');
    });

    // Gestion du scroll pour masquer/afficher la navbar
    let lastScrollY = window.scrollY;
    window.addEventListener("scroll", () => {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > lastScrollY) {
            // Si on défile vers le bas, on cache la navbar
            navbar.classList.add('nav-hidden');
        } else {
            // Si on défile vers le haut, on l'affiche
            navbar.classList.remove('nav-hidden');
        }
        lastScrollY = window.scrollY;
    });
});