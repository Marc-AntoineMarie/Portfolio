<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Portfolio BTS SIO</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include("../include/header/navbar.php"); ?>

    <main class="container">
        <h1>Contact</h1>
        <div class="contact-info">
            <div class="contact-item">
                <i class="fas fa-envelope"></i>
                <p>votre.email@example.com</p>
            </div>
            <div class="contact-item">
                <i class="fas fa-phone"></i>
                <p>+33 X XX XX XX XX</p>
            </div>
            <div class="contact-item">
                <i class="fab fa-linkedin"></i>
                <p><a href="#" target="_blank">LinkedIn</a></p>
            </div>
        </div>

        <form class="contact-form">
            <div class="form-group">
                <label for="name">Nom complet</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
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
    </main>

    <?php include("../include/footer/footer.php"); ?>
</body>
</html>
