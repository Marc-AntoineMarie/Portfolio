document.addEventListener('DOMContentLoaded', () => {
    // Gestion des filtres de projets
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projetCards = document.querySelectorAll('.projet-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Retirer la classe active de tous les boutons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Ajouter la classe active au bouton cliqué
            button.classList.add('active');

            const filterValue = button.getAttribute('data-filter');

            projetCards.forEach(card => {
                if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    // Gestion des modales de détails (multi-modal)
    const detailButtons = document.querySelectorAll('.btn-details');
    detailButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            const modalId = button.getAttribute('href');
            const modal = document.querySelector(modalId);
            const header = document.querySelector('header');
            const footer = document.querySelector('footer');
            if (modal) {
                modal.style.display = 'block';
                document.body.style.overflow = 'hidden';
                // Cacher header et footer
                if (header) header.style.display = 'none';
                if (footer) footer.style.display = 'none';
                // Fermer la modale sur croix
                const closeBtn = modal.querySelector('.close-modal');
                if (closeBtn) {
                    closeBtn.onclick = () => {
                        modal.style.display = 'none';
                        document.body.style.overflow = 'auto';
                        if (header) header.style.display = 'block';
                        if (footer) footer.style.display = 'block';
                    };
                }
                // Fermer la modale si clic à l'extérieur du contenu
                window.onclick = (event) => {
                    if (event.target === modal) {
                        modal.style.display = 'none';
                        document.body.style.overflow = 'auto';
                        if (header) header.style.display = 'block';
                        if (footer) footer.style.display = 'block';
                    }
                };
            }
        });
    });

    // Animation d'apparition des projets
    const observerOptions = {
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    projetCards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'all 0.5s ease-out';
        observer.observe(card);
    });
});
