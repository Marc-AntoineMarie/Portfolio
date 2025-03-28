<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - BTS SIO SLAM</title>
    <link rel="stylesheet" href="../css/include/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Three.js est nécessaire pour VANTA -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.waves.min.js"></script>
 
</head>

<footer class="footer">
    <div class="footer-content">
        <div class="footer-section">
            <a href="mailto:mmarie.galaxie@gmail.com" class="footer-link">
                <i class="fas fa-envelope"></i>
                mmarie.galaxie@gmail.com
            </a>
        </div>
        
        <div class="footer-section social-links">
            <a href="https://github.com/Marc-AntoineMarie" target="_blank" class="footer-link">
                <i class="fab fa-github"></i>
                Marc-Antoine Marie
            </a>
            <a href="https://www.linkedin.com/in/marc-antoine-marie-6a132820a" target="_blank" class="footer-link">
                <i class="fab fa-linkedin"></i>
                LinkedIn
            </a>
        </div>

        <div class="footer-section">
            <button id="mentionsLegalesBtn" class="footer-link">Mentions légales</button>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> - Portfolio BTS SIO SLAM</p>
    </div>

    <!-- Modal Mentions Légales -->
    <div id="mentionsLegalesModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Mentions légales</h2>
            <div class="modal-text">
                <p>Les présentes conditions générales fixent les modalités d'utilisation du service web portfolio.elianeperol.com.</p>

                <h3>Éditeur et responsable de publication</h3>
                <p>Le site est édité par Marc-Antoine Marie, responsable de publication.<br>
                Contact : <a href="mailto:mmarie.galaxie@gmail.com">mmarie.galaxie@gmail.com</a><br>
                Ce site est un portfolio personnel non déclaré à la CNIL.</p>

                <h3>Hébergement</h3>
                <p>Ce site est hébergé par OVH.com<br>
                Siège social : 2 rue Kellermann – 59100 Roubaix – France.</p>

                <h3>Responsabilité</h3>
                <p>Le contenu du site est fourni à titre indicatif et peut être modifié à tout moment. L'éditeur s'efforce de garantir l'exactitude des informations mais ne peut être tenu responsable des erreurs ou omissions. L'utilisateur est seul responsable de l'usage qu'il fait des informations disponibles sur le site.</p>

                <h3>Propriété intellectuelle</h3>
                <p>Tous les éléments du site (textes, images, logos, etc.) sont protégés par des droits de propriété intellectuelle. Toute reproduction ou utilisation sans autorisation préalable est interdite, sauf pour les courtes citations avec mention de la source.</p>

                <h3>Responsabilité dans l'utilisation du service</h3>
                <p>L'utilisateur s'engage à ne pas perturber le bon fonctionnement du site, à ne pas publier de contenus illicites et à respecter les lois en vigueur. L'éditeur se réserve le droit de supprimer tout commentaire ou contenu inapproprié.</p>

                <h3>Traitement des données personnelles</h3>
                <p>Le site ne collecte aucune donnée personnelle et n'utilise pas de cookies. Conformément à la loi "Informatique et Libertés", aucune donnée personnelle n'est enregistrée à l'insu de l'utilisateur. Le site n'est pas déclaré à la CNIL.</p>
            </div>
        </div>
    </div>
</footer>

<style>
.footer {
    background-color: var(--primary-color);
    color: white;
    padding: 20px 0;
    margin-top: auto;
}

.footer-content {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
}

.footer-section {
    text-align: center;
}

.footer-link {
    color: white;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 5px 10px;
    border-radius: 5px;
    transition: all 0.3s ease;
    background: none;
    border: none;
    font-size: inherit;
    cursor: pointer;
}

.footer-link:hover {
    background-color: rgba(255, 255, 255, 0.1);
}

.social-links {
    display: flex;
    gap: 20px;
}

.footer-bottom {
    text-align: center;
    padding-top: 20px;
    margin-top: 20px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.footer-bottom p {
    margin: 0;
    font-size: 0.9em;
    opacity: 0.8;
}

/* Modal Styles */
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    overflow-y: auto;
    padding: 20px 0;
}

.modal-content {
    background-color: var(--primary-color);
    color: var(--text-color);
    margin: 5vh auto;
    padding: 25px;
    border-radius: 10px;
    width: 90%;
    max-width: 500px;
    position: relative;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.modal-text {
    max-height: 70vh;
    overflow-y: auto;
    padding-right: 10px;
}

.modal-text::-webkit-scrollbar {
    width: 8px;
}

.modal-text::-webkit-scrollbar-track {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 4px;
}

.modal-text::-webkit-scrollbar-thumb {
    background: rgba(255, 255, 255, 0.2);
    border-radius: 4px;
}

.modal-text h3 {
    margin-top: 1.5rem;
    margin-bottom: 0.5rem;
    color: var(--text-color);
}

.close {
    position: absolute;
    right: 20px;
    top: 15px;
    color: var(--text-color);
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}

.close:hover {
    color: #bbb;
}

@media (max-width: 768px) {
    .footer-content {
        flex-direction: column;
        gap: 15px;
    }

    .social-links {
        flex-direction: column;
        gap: 10px;
    }

    .footer-bottom {
        margin-top: 15px;
        padding-top: 15px;
    }

    .modal-content {
        width: 95%;
        margin: 1vh auto;
        padding: 20px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('mentionsLegalesModal');
    const btn = document.getElementById('mentionsLegalesBtn');
    const span = document.getElementsByClassName('close')[0];

    btn.onclick = function() {
        modal.style.display = 'block';
        document.body.style.overflow = 'hidden';
    }

    span.onclick = function() {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    }
});
</script>
