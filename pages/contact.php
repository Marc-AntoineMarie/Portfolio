<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Portfolio BTS SIO</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <?php include("../include/header/navbar.php"); ?>

    <main class="contact-container">
        <h1>Contact</h1>

        <div class="contact-content">
            <!-- Informations de contact -->
            <section class="contact-info">
                <h2>Mes Coordonnées</h2>
                <div class="info-grid">
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <h3>Email</h3>
                        <p>votre.email@example.com</p>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <h3>Téléphone</h3>
                        <p>+33 X XX XX XX XX</p>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <h3>Localisation</h3>
                        <p>Votre Ville, France</p>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <h3>Disponibilité</h3>
                        <p>Lun - Ven, 9h - 18h</p>
                    </div>
                </div>

                <!-- Réseaux sociaux -->
                <div class="social-links">
                    <a href="#" class="social-link">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </section>

            <!-- Formulaire de contact -->
            <section class="contact-form">
                <h2>Envoyez-moi un message</h2>
                <form id="messageForm">
                    <div class="form-group">
                        <label for="name">Nom complet</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Sujet</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="6" required></textarea>
                    </div>
                    
                    <button type="submit" class="submit-btn">
                        <span>Envoyer</span>
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </section>
        </div>

        <!-- Carte ou image -->
        <section class="map-section">
            <div class="map-placeholder">
                <!-- Remplacer par une vraie carte Google Maps ou une image -->
                <div class="map-overlay">
                    <i class="fas fa-map-marked-alt"></i>
                    <p>Carte à intégrer</p>
                </div>
            </div>
        </section>
    </main>

    <?php include("../include/footer/footer.php"); ?>

    <script src="../js/main.js"></script>
    <script src="../js/contact.js"></script>
</body>
</html>
