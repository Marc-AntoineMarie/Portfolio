document.addEventListener('DOMContentLoaded', () => {
    const messageForm = document.getElementById('messageForm');

    if (messageForm) {
        messageForm.addEventListener('submit', (e) => {
            e.preventDefault();

            // Animation du bouton lors de l'envoi
            const submitBtn = messageForm.querySelector('.submit-btn');
            const submitText = submitBtn.querySelector('span');
            const originalText = submitText.textContent;

            submitBtn.disabled = true;
            submitText.textContent = 'Envoi en cours...';

            // Simulation d'envoi (à remplacer par votre logique d'envoi réelle)
            setTimeout(() => {
                // Réinitialisation du formulaire
                messageForm.reset();
                
                // Animation de succès
                submitText.textContent = 'Message envoyé !';
                submitBtn.style.backgroundColor = '#27ae60';

                // Retour à l'état initial après 2 secondes
                setTimeout(() => {
                    submitText.textContent = originalText;
                    submitBtn.style.backgroundColor = '';
                    submitBtn.disabled = false;
                }, 2000);
            }, 1500);
        });
    }

    // Animation des éléments au scroll
    const observerOptions = {
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);

    // Observer les éléments à animer
    document.querySelectorAll('.info-item, .social-link').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        observer.observe(el);
    });
});
