// Gestion du menu burger pour mobile
document.addEventListener('DOMContentLoaded', () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    
    if (burger) {
        burger.addEventListener('click', () => {
            nav.classList.toggle('nav-active');
            burger.classList.toggle('toggle');
        });
    }

    // Animation des barres de progression
    const progressBars = document.querySelectorAll('.progress');
    
    // Fonction pour animer les barres de progression
    const animateProgressBars = () => {
        progressBars.forEach(progress => {
            // Récupérer la valeur de progression depuis l'attribut data-value
            // Par défaut à 0, à personnaliser plus tard
            const value = progress.getAttribute('data-value') || '0';
            progress.style.width = `${value}%`;
        });
    }

    // Observer pour déclencher l'animation au scroll
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateProgressBars();
            }
        });
    });

    // Observer les sections de compétences
    const competencesSections = document.querySelectorAll('.competences-section');
    competencesSections.forEach(section => observer.observe(section));
});

// Smooth scroll pour les ancres
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
