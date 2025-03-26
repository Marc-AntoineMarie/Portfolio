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

    // Gestion du modal de détails
    const modal = document.getElementById('projetModal');
    const detailButtons = document.querySelectorAll('.btn-details');
    const closeModal = document.querySelector('.close-modal');

    detailButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            modal.style.display = 'block';
            document.body.style.overflow = 'hidden'; // Empêcher le défilement
        });
    });

    closeModal.addEventListener('click', () => {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto'; // Réactiver le défilement
    });

    window.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
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
