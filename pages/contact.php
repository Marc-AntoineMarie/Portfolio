<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Portfolio BTS SIO</title>
    <link rel="stylesheet" href="../css/pages/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <header>
        <?php include("../include/header/navbar.php"); ?>
    </header>

    <main class="contact-container">
        <h1>Contact</h1>

        <div class="contact-content">

            <!-- Formulaire de contact -->
            <section class="contact-form">
                <h2>Envoyez-moi un message</h2>
                <form id="contactForm" action="contact_form_handler.php" method="POST">
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

        <footer>
            <?php include("../include/footer/footer.php"); ?>
        </footer>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const form = document.getElementById('contactForm');
                form.addEventListener('submit', function (e) {
                    e.preventDefault();
                    const formData = new FormData(form);
                    fetch('contact_form_handler.php', {
                        method: 'POST',
                        body: formData
                    })
                        .then(response => {
                            console.log(response); // Ajoute ceci
                            return response.json();
                        })
                        .then(data => {
                            console.log(data); // Ajoute ceci
                            if (data.success) {
                                alert(data.message);
                                form.reset();
                            } else {
                                alert('Erreur : ' + data.message);
                            }
                        })
                        .catch((err) => {
                            alert("Erreur lors de l'envoi du message. Veuillez réessayer plus tard.");
                            console.error(err); // Ajoute ceci
                        });
                });
            });
        </script>
</body>

</html>